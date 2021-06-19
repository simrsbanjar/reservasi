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
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div class="antrian">
        <div class="container">
            <div class="gambar">
                <img src="<?= base_url() ?>/assets/img/logo rsu.png" alt="logo rumah sakit">
                <p>
                    Rumah Sakit Umum Daerah Kota Banjar
                </p>
            </div>
            <p>
                Jl. Rumah Sakit Umum No.5, Hegarsari, Kec. Pataruman, Kota Banjar, Jawa Barat 40293
            </p>
            <table>

                <div>
                    <p style="margin-top: 10px;">Nomer Antrian Anda</p>
                    <div class="nomerantri">
                        <div>
                            <p><?= $cetak['nomorantrean'] ?></p>
                        </div>
                    </div>
                </div>
            </table>
            <div class="urutan row justify-content-center" style="padding-top: 10px;">
                <div class="nopendaftaran">
                    No. Pendaftaran :
                </div>
                <div class="nomer">
                    <p><?= $cetak['nopendaftaran'] ?></p>
                </div>
            </div>
            <div class="urutan row justify-content-center">
                <div class="politujuan">
                    Poli Tujuan :
                </div>
                <div class="politujuan">
                    <p><?= $cetak['namapoli'] ?></p>
                </div>
            </div>
            <div class="urutan row justify-content-center">
                <div class="doktertugas">
                    Dokter Tujuan :
                </div>
                <div class="doktertugas">
                    <p><?= $cetak['namadokter'] ?></p>
                </div>
            </div>
            <div class="urutan row justify-content-center">
                <div class="estimasi">
                    Estimasi Dilayani :
                </div>
                <div class="estimasi">
                    <p><?= $cetak['estimasidilayani'] ?></p>
                </div>
            </div>
            <div class="urutan row justify-content-center">
                <div class="estimasi">
                    No. Rekam Medik :
                </div>
                <div class="estimasi">
                    <p><?= $cetak['nocm'] ?></p>
                </div>
            </div>
            <div class="urutan row justify-content-center">
                <div class="estimasi">
                    Status Pasien :
                </div>
                <div class="estimasi">
                    <p><?= $cetak['statuspasien'] ?></p>
                </div>
            </div>


            <div class="qrcode">
                <img src="<?= base_url() . 'assets/img/qrcode/' . $cetak['kodebooking'] . '.png' ?>" alt="logo qrcode">
            </div>
            <div class="urutan row justify-content-center">
                <div class="nomer">
                    <p><?= $cetak['kodebooking'] ?></p>
                </div>
            </div>

            <div style="align-items: center;">
                <p>Mohon datang <b>30 menit</b> sebelumnya </p>
                <p>Jika terlambat antrian tidak berlaku lagi</p>
                <p style="font-weight: bold;">!!! Bawalah tanda bukti ini untuk verifikasi di pendaftaran !!! </p>
            </div>
        </div>
        <!-- tutup div container -->
    </div>
    <!-- tutup div class antrian -->

</body>

</html>