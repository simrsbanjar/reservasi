<!DOCTYPE html>

<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PENDAFTARAN ONLINE</title>


    <link rel="icon" href="<?= base_url('assets/img/logo rsu.png'); ?>" type="image/png" sizes="16x16">
    <link href="<?= base_url('assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css"> -->
</head>

</html>

<body>
    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="featuresok" class="featuresok">
            <div class="container">
                <div class="section-title">
                    <h2>PENDAFTARAN ONLINE</h2>

                </div>
                <br>
                <h4 style="text-align: center;">Silakan pilih dan klik cara bayar.</h4>
                <br>
                <ul class="nav nav-pills nav-justified row justify-content-md-center d-flex ">
                    <li class="nav-item col-lg-3 mt-5 ">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                            <div class="icon"><img src="<?= base_url('assets/img/BPJS.png'); ?>" width="200px" height="200px"></div>
                            <h4 style="text-align: center;">BPJS</h4>
                        </a>
                    </li>
                    <li class="nav-item col-lg-3 mt-5">
                        <a class="nav-link " data-toggle="tab" href="#tab-2">
                            <div class="icon"><img src="<?= base_url('assets/img/ASURANSI.png'); ?>" width="200px" height="200px"></div>
                            <h4 style="text-align: center;">JAMINAN LAIN</h4>
                        </a>
                    </li>
                    <li class="nav-item col-lg-3 mt-5">
                        <a class="nav-link" data-toggle="tab" href="#tab-3">
                            <div class="icon"><img src="<?= base_url('assets/img/AVATAR_CEKLIS.png'); ?>" width="200px" height="200px"></div>
                            <h4 style="text-align: center;">UMUM (MANDIRI)</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row justify-content-md-center">
                            <section id="featured-services1" class="featured-services1">
                                <div style="padding: 2rem 3rem; text-align: left;">
                                    <div class="card ">
                                        <div class="card-header bg-primary text-white">
                                            Data Pasien
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group"><label class="label-control">Nomor Rekam Medik</label> <input type="text" placeholder="Nomor RM" class="input">
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group"><label class="label-control">Tanggal Lahir</label> <input type="text" placeholder="dd/mm/yyyy" class="input">
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group"><label class="label-control">Nomor Peserta BPJS / Rujukan</label> <input placeholder="Nomor Peserta BPJS / Rujukan" class="input">
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-2">
                        <div class="row">

                            <section id="featured-services2" class="featured-services2">
                                <div class="row">
                                    <div class="col-lg-6" style="justify-content: right;  text-align: right">
                                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>Download Buku Petunjuk Seleksi CPNS</span>
                                            <i class="icofont-download-alt"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-6" style="justify-content: left;  text-align: left">
                                        <a download="" href="assets/img/alur/Alur%20Seleksi%20CPNS.png" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>Download Alur Seleksi CPNS</span>
                                            <i class="icofont-download-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <br><br>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box">
                                                <div style="text-align: center"><img src="assets/img/alur/daftar.jpg" class="img-fluid" alt="" style="width: 70%; "></div>
                                                <h4 class="title"><a>1. Daftar Akun</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li>Pelamar mengakses Portal SSCASN di <strong> <a href="https://sscasn.bkn.go.id">https://sscasn.bkn.go.id</a></strong> </li>
                                                    <li>Buat akun SSCASN </li>
                                                    <li>Login ke akun SSCASN yang telah dibuat</li>
                                                    <li>Lengkapi biodata dan unggah swafoto </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="200">
                                                <br>
                                                <div style="text-align: center"><img src="assets/img/alur/pilih.jpg" class="img-fluid" alt="" style="width: 60%; "></div>
                                                <h4 class="title"><a>2. Daftar Formasi</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li>Pilih Jenis Seleksi</li>
                                                    <li>Pilih Formasi</li>
                                                    <li>Unggah dokumen</li>
                                                    <li>Cek resume dan akhiri pendaftaran</li>
                                                    <li>Cetak kartu informasi akun dan kartu pendaftaran akun</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="300">
                                                <div style="text-align: center"><img src="img/icon2/3.png" class="img-fluid" alt="" style="width: 50%; "></div>
                                                <h4 class="title"><a>3. Seleksi Administrasi</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Panitia memverifikasi data pelamar</li>
                                                    <li>Panitia mengumumkan hasil Seleksi Administrasi</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Administrasi</li>
                                                    <li>Panitia mengumumkan hasil sanggah</li>
                                                    <li>Pelamar yang dinyatakan lulus melakukan cetak Kartu Ujian </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>



                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box">
                                                <div style="text-align: center"><img src="img/icon2/4.png" class="img-fluid" alt="" style="width: 50%; "></div>
                                                <h4 class="title"><a>4. Seleksi Kompetensi Dasar </a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Pelamar melaksanakan Ujian Seleksi Kompetensi Dasar</li>
                                                    <li> Panitia mengumumkan hasil Seleksi Kompetensi Dasar</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Kompetensi Dasar</li>
                                                    <li>Panitia mengumumkan hasil sanggah</li>
                                                    <li>Pelamar yang dinyatakan lulus dapat melanjutkan proses ke tahap Ujian Seleksi Kompetensi Bidang </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="200">
                                                <div style="text-align: center"><img src="assets/img/alur/skb.jpg" class="img-fluid" alt="" style="width: 60%; "></div>
                                                <h4 class="title"><a>5. Seleksi Kompetensi Bidang </a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Pelamar melaksanakan Ujian Seleksi Kompetensi Bidang</li>
                                                    <li> Panitia mengumumkan hasil Seleksi Kompetensi Bidang</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Kompetensi Bidang</li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="300">
                                                <div style="text-align: center"><img src="assets/img/alur/berhasil.png" class="img-fluid" alt="" style="width: 60%; "></div>
                                                <h4 class="title"><a>6. Pengumuman Kelulusan</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Panitia mengumumkan hasil sanggah Seleksi Kompetensi Bidang (pengumuman ini bersifat mutlak dan tidak dapat diganggu gugat)</li>
                                                    <li>Pelamar yang dinyatakan lulus melakukan pemberkasan</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div></div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <section id="featured-services3" class="featured-services3">

                                <div class="row">
                                    <div class="col-lg-6" style="justify-content: right;  text-align: right">
                                        <a download="" href="#" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>Download Buku Petunjuk Seleksi PPPK Non Guru</span>
                                            <i class="icofont-download-alt"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-6" style="justify-content: left;  text-align: left">
                                        <a download="" href="assets/img/alur/Alur%20Seleksi%20PPPK.png" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>Download Alur Seleksi PPPK Non Guru</span>
                                            <i class="icofont-download-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <br><br>

                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box">
                                                <div style="text-align: center"><img src="assets/img/alur/daftar2.jpg" class="img-fluid" alt="" style="width: 60%; "></div>
                                                <h4 class="title"><a>1. Daftar Akun</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li>Pelamar mengakses Portal SSCASN di <strong> <a href="https://sscasn.bkn.go.id">https://sscasn.bkn.go.id</a></strong> </li>
                                                    <li>Buat akun SSCASN </li>
                                                    <li>Login ke akun SSCASN yang telah dibuat</li>
                                                    <li>Lengkapi biodata dan unggah swafoto </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="200">
                                                <br>
                                                <div style="text-align: center"><img src="assets/img/alur/pilih2.jpg" class="img-fluid" alt="" style="width: 80%; "></div>
                                                <h4 class="title"><a>2. Daftar Formasi</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li>Pilih Jenis Seleksi</li>
                                                    <li>Pilih Formasi</li>
                                                    <li>Unggah dokumen</li>
                                                    <li>Cek resume dan akhiri pendaftaran</li>
                                                    <li>Cetak kartu informasi akun dan kartu pendaftaran akun</li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="300">
                                                <div style="text-align: center"><img src="img/icon2/3.png" class="img-fluid" alt="" style="width: 50%; "></div>
                                                <h4 class="title"><a>3. Seleksi Administrasi</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Panitia memverifikasi data pelamar</li>
                                                    <li>Panitia mengumumkan hasil Seleksi Administrasi</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Administrasi</li>
                                                    <li>Panitia mengumumkan hasil sanggah</li>
                                                    <li>Pelamar yang dinyatakan lulus melakukan cetak Kartu Ujian </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>



                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box">
                                                <div style="text-align: center"><img src="img/icon2/4.png" class="img-fluid" alt="" style="width: 50%; "></div>
                                                <h4 class="title"><a>4. Seleksi Kompetensi Dasar </a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Pelamar melaksanakan Ujian Seleksi Kompetensi Dasar</li>
                                                    <li> Panitia mengumumkan hasil Seleksi Kompetensi Dasar</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Kompetensi Dasar</li>
                                                    <li>Panitia mengumumkan hasil sanggah</li>
                                                    <li>Pelamar yang dinyatakan lulus dapat melanjutkan proses ke tahap Ujian Seleksi Kompetensi Bidang </li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="200">
                                                <div style="text-align: center"><img src="assets/img/alur/skb2.jpg" class="img-fluid" alt="" style="width: 80%; "></div>
                                                <h4 class="title"><a>5. Seleksi Kompetensi Bidang </a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Pelamar melaksanakan Ujian Seleksi Kompetensi Bidang</li>
                                                    <li> Panitia mengumumkan hasil Seleksi Kompetensi Bidang</li>
                                                    <li>Pelamar yang dinyatakan tidak lulus dapat menyanggah Hasil Seleksi Kompetensi Bidang</li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos-delay="300">
                                                <div style="text-align: center"><img src="assets/img/alur/berhasill2.jpg" class="img-fluid" alt="" style="width: 65%; "></div>
                                                <h4 class="title"><a>6. Pengumuman Kelulusan</a></h4>
                                                <p class="description">
                                                <ul>
                                                    <li> Panitia mengumumkan hasil sanggah Seleksi Kompetensi Bidang (pengumuman ini bersifat mutlak dan tidak dapat diganggu gugat)</li>
                                                    <li>Pelamar yang dinyatakan lulus melakukan pemberkasan</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-134453258-5');
    </script>

</body>

</html>