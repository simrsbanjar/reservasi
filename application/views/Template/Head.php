<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran Online RSUD Kota Banjar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url('assets/img/logo rsu.png'); ?>" type="image/png" sizes="16x16">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.0/dist/css/adminlte.min.css" /> -->

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/material_blue.css">

  <!-- Styling slick slider vendor -->
  <style>
    .align-left {
      text-align: justify;
    }

    .swal-wide {
      width: 550px !important;
    }

    .slider .slick-slide {
      border: solid 1px #000;
    }

    .slider .slick-slide img {
      width: 100%;
    }

    /* Membuat button prev dan next membesar */
    .slick-prev,
    .slick-next {
      width: 50px;
      height: 50px;
      z-index: 1;
    }

    /* Menggeser posisi previous (prev) ke banner foto */
    .slick-prev {
      left: 5px;
    }

    /* Menggeser posisi next ke banner foto */
    .slick-next {
      right: 5px;
    }

    /* Menambahkan shadow  */
    .slick-prev:before,
    .slick-next:before {
      font-size: 40px;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .slick-dots li.slick-active button:before {
      color: #000;
    }
  </style>

  <style>
    #load {
      width: 100%;
      height: 100%;
      position: fixed;
      text-indent: 100%;
      background: #e0e0e0 url('assets/img/loading-gif-png-5.gif') no-repeat center;
      z-index: 1;
      opacity: 0.6;
      background-size: 8%;
    }

    .overlay {
      z-index: 999999;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: #e0e0e0 url('assets/img/loading-gif-png-5.gif') no-repeat center;
      text-align: center;
      opacity: 0.6;
      background-size: 8%;
    }
  </style>
  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>
  <div id="WAButton"></div>
  <div id="load">Loading...</div>

  <div id="loading"></div>
  <div id="loadingsimpan" class="overlay" hidden></div>