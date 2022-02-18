<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Tag</title>
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
  <!-- End Header -->

@extends('admin.layout.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tag</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/bloger">Home</a></li>
          <li class="breadcrumb-item active">Data Tag</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tag</h5>
              <a href="{{route('tag.create')}}" class="btn btn-md btn-primary mb-3 float-right">Tambah Data</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @php $i=1 @endphp
                @forelse ($tags as $item)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{$item->name}}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('tag.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('tag.edit', $item->id) }}"
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                  </tr>
                @empty
                <tr>
                    <td class="text-center text-mute" colspan="11">Data Perangkat tidak tersedia</td>
                </tr>
                @endforelse
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

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