<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Data Kategori</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="/admin/img/favicon.png" rel="icon">
  <link href="/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/admin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
@extends('admin.layout.header')

  <!-- ======= Sidebar ======= -->
@extends('admin.layout.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Data Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/bloger">Home</a></li>
          <li class="breadcrumb-item">Data Kategori</li>
          <li class="breadcrumb-item active">Input</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->
              <form action="{{ route('category.store') }}" method="POST">

                @csrf

                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                  </div>

                  <!-- error message untuk title -->
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('category.index') }}" class="btn btn-md btn-danger">Kembali</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@extends('admin.layout.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/admin/vendor/chart.js/chart.min.js"></script>
  <script src="/admin/vendor/echarts/echarts.min.js"></script>
  <script src="/admin/vendor/quill/quill.min.js"></script>
  <script src="/admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="/admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/admin/js/main.js"></script>

</body>

</html>