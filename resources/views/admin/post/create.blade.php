<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Postingan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="/admin/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

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
      <h1>Input Postingan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/bloger">Home</a></li>
          <li class="breadcrumb-item">Postingan Blog</li>
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
              <form action="{{ route('post.store') }}" method="POST">

                @csrf

                <div class="row mb-3">
                  <label for="title" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
                  </div>

                  <!-- error message untuk title -->
                  @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="row mb-3">
                    <label for="publish" class="col-sm-2 col-form-label">Publish</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('publish') is-invalid @enderror" name="publish" value="{{ old('publish') }}" required>
                    </div>
  
                    <!-- error message untuk title -->
                    @error('publish')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="publisher" class="col-sm-2 col-form-label">publisher</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher') }}" required>
                    </div>
  
                    <!-- error message untuk title -->
                    @error('publisher')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="id_category" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('id_category') is-invalid @enderror" name="id_category" value="{{ old('id_category') }}" required>
                    </div>
  
                    <!-- error message untuk title -->
                    @error('id_category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="id_tag" class="col-sm-2 col-form-label">Tag</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('id_tag') is-invalid @enderror" name="id_tag" value="{{ old('id_tag') }}" required>
                    </div>
  
                    <!-- error message untuk title -->
                    @error('id_tag')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Dekripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                    </div>
  
                    <!-- error message untuk title -->
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('post.index') }}" class="btn btn-md btn-danger">Kembali</a>
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