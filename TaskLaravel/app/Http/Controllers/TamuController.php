<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamu = Tamu::orderBy('created_at', 'DESC')->get();
  
        return view('tamus.index', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'asal' => 'required',
            'jumlah' => 'required',
            'pic' => 'required',
            'tanggal' => 'required',
        ])->validate();

        Tamu::create([
            'asal' => $request->asal,
            'jumlah' => $request->jumlah,
            'pic' => $request->pic,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('tamus')->with('success', 'Tamu added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tamu = Tamu::findOrFail($id);
  
        return view('tamus.show', compact('tamu'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tamu = Tamu::findOrFail($id);
  
        return view('tamus.edit', compact('tamu'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tamu = Tamu::findOrFail($id);
  
        $tamu->update($request->all());
  
        return redirect()->route('tamus')->with('success', 'tamu updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tamu = Tamu::findOrFail($id);
  
        $tamu->delete();
  
        return redirect()->route('tamus')->with('success', 'tamu deleted successfully');
    }
}
