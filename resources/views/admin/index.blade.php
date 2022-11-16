<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Admin | SiCloud</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('img/title-logo.png') }}" rel="icon">
  <link href="{{ url('img/title-logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/admin/assets/css/style.css') }}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.partials.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('info') </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}"><i class="bi bi-house"></i></a></li>
          <li class="breadcrumb-item active"><a href="#!">@yield('data1')</a></li>
          <li class="breadcrumb-item active"><a href="#!">@yield('data2')</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- ======= Content ======= -->
    <section class="section dashboard">
      <div class="row">

        @yield('content')

      </div>
    </section>
    <!-- ======= End Content ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- @include('admin.partials.footer') --}}
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('template/admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/admin/assets/js/main.js') }}"></script>

</body>

</html>