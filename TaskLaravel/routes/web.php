<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;


Route::get('/', function () {
   
    return redirect()->route(('dashboard'));
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    // Rute untuk halaman login dan proses login
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    
    // Rute untuk proses logout (membutuhkan autentikasi)
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});


Route::middleware('auth')->group(function () {
    // Halaman dashboard
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(TamuController::class)->prefix('tamus')->group(function () {
        // Rute untuk daftar tamu
        Route::get('', 'index')->name('tamus');
        
        // Rute untuk formulir pembuatan tamu baru
        Route::get('create', 'create')->name('tamus.create');
        Route::post('store', 'store')->name('tamus.store');
        
        // Rute untuk menampilkan detail tamu
        Route::get('show/{id}', 'show')->name('tamus.show');
        
        // Rute untuk formulir edit tamu
        Route::get('edit/{id}', 'edit')->name('tamus.edit');
        Route::put('edit/{id}', 'update')->name('tamus.update');
        
        // Rute untuk menghapus tamu
        Route::delete('destroy/{id}', 'destroy')->name('tamus.destroy');
    });
});

// Route untuk menampilkan formulir lupa password
Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
})->name('password.request');

// Route untuk menangani pengiriman email reset password
Route::post('/forgotpassword', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

// Route untuk menampilkan formulir reset password
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.resetpassword', ['token' => $token]);
})->name('password.reset');

// Route untuk menangani reset password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password),
            ])->save();
        }
    );

    return $status == Password::PASSWORD_RESET
        ? redirect()->route('login')->with(['status' => __($status)])
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');