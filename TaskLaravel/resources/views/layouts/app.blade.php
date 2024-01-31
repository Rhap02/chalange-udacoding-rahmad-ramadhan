<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Dasbor</title>
  
  <!-- Font kustom untuk template ini -->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Gaya kustom untuk template ini -->
  <link href="{{ asset('admin_assets/css/sb-admin-2.css') }}" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Pengelola Halaman -->
  <div id="wrapper">
  
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- Akhir dari Sidebar -->
  
    <!-- Pengelola Konten -->
    <div id="content-wrapper" class="d-flex flex-column">
  
      <!-- Konten Utama -->
      <div id="content">
  
        <!-- Tampilan Atas -->
        @include('layouts.navbar')
        <!-- Akhir dari Tampilan Atas -->
  
        <!-- Mulai Konten Halaman -->
        <div class="container-fluid">
  
          <!-- Judul Halaman -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>
  
          @yield('contents')
  
          <!-- Baris Konten -->
        </div>
        <!-- /.container-fluid -->
  
      </div>
      <!-- Akhir dari Konten Utama -->
  
      <!-- Footer -->
      @include('layouts.footer')
      <!-- Akhir dari Footer -->
  
    </div>
    <!-- Akhir dari Pengelola Konten -->
  
  </div>
  <!-- Akhir dari Pengelola Halaman -->
  
  <!-- Tombol Gulir ke Atas-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <!-- Plugin inti JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.js') }}"></script>
  <!-- Skrip kustom untuk semua halaman-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.js') }}"></script>
  <!-- Plugin tingkat halaman -->
  <script src="{{ asset('admin_assets/vendor/chart.js/Chart.js') }}"></script>
</body>
</html>
