<!DOCTYPE html>

<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PENDAFTARAN ONLINE</title>


    <link rel="icon" href="<?= base_url("assets/img/logo rsu.png"); ?>" type="image/png" sizes="16x16">
    <link href="<?= base_url("assets/vendor/icofont/icofont.min.css"); ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/style.css"); ?>" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
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
                <div class="card" id="carabayar">
                    <div class="card-body">
                        <h4 style="text-align: center;">Silakan pilih dan klik cara bayar.</h4>
                        <br>
                        <ul class="nav nav-pills nav-justified row justify-content-md-center d-flex ">
                            <li class="nav-item col-lg-3 mt-5 ">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                    <div class="icon"><img src="<?= base_url("assets/img/BPJS.png"); ?>" width="200px" height="200px"></div>
                                    <h4 style="text-align: center;">BPJS</h4>
                                </a>
                            </li>
                            <li class="nav-item col-lg-3 mt-5">
                                <a class="nav-link " data-toggle="tab" href="#tab-2">
                                    <div class="icon"><img src="<?= base_url("assets/img/ASURANSI.png"); ?>" width="200px" height="200px"></div>
                                    <h4 style="text-align: center;">JAMINAN LAIN</h4>
                                </a>
                            </li>
                            <li class="nav-item col-lg-3 mt-5">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">
                                    <div class="icon"><img src="<?= base_url("assets/img/AVATAR_CEKLIS.png"); ?>" width="200px" height="200px"></div>
                                    <h4 style="text-align: center;">UMUM (MANDIRI)</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex flex-row-reverse">
                        <button id="btnlanjutcarabayar" name="btnlanjutcarabayar" type="button" onclick="prosesLanjutcarabayar()" class="btn btn-sm btn-primary p-2"><i class="fas fa-arrow-alt-circle-right"></i></i> Lanjut</button>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row justify-content-md-center">
                            <!-- <section id="featured-services1" class="featured-services1"> -->
                            <div style="padding: 2rem 3rem; text-align: left;">
                                <div class="card" id="carddata">
                                    <div class="card-header bg-primary  text-white" id="headerdatapasien">
                                        Data Pasien
                                    </div>
                                    <div class="card-body" id="isidatapasien">
                                        <input type="hidden" name="nilai" id="nilai" value="1">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label class="label-control"><strong>Status Pasien</strong></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="1" id="flexRadioDefault1" checked onclick="checkRadio(value)">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Pasien Lama
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="2" id="flexRadioDefault2" onclick="checkRadio(value)">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Pasien Baru
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="pasienlama">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nomor Rekam Medik</strong></label>
                                                    <input type="number" placeholder="Nomor RM" class="input" name="norm" id="norm">
                                                    <small></small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" value="<?= date("Y-m-d") ?>" class="input" name="tgllahir" id="tgllahir">
                                                    <small></small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nomor Peserta BPJS / Rujukan</strong></label>
                                                    <input placeholder="Nomor Peserta BPJS / Rujukan" class="input">
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="pasienbaru">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Depan</strong></label>
                                                    <select name="gelar" id="gelar" class="form-control form-control-user" title="Pilih Gelar">
                                                        <option value="">-PILIH-</option>
                                                        <option value="Bayi">Bayi</option>
                                                        <option value="Anak">Anak</option>
                                                        <option value="Tn.">Tn.</option>
                                                        <option value="Ny.">Ny.</option>
                                                        <option value="Nn.">Nn.</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" placeholder="Nama Pasien" class="input" maxlength="50">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kelamin</strong></label>
                                                    <select name="kelamin" id="kelamin" class="form-control form-control-user" title="Pilih Jenis Kelamin">
                                                        <option value="">-PILIH-</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tempat Lahir</strong></label>
                                                    <input type="text" placeholder="Tempat Lahir" class="input" maxlength="50">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" placeholder="dd/mm/yyyy" class="input" value="<?= date("Y-m-d") ?>">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tahun</strong></label>
                                                    <input type="text" placeholder="Thn" class="input" disabled>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Bulan</strong></label>
                                                    <input type="text" placeholder="Bln" class="input" disabled>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Hari</strong></label>
                                                    <input type="text" placeholder="Hari" class="input" disabled>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>No. Identitas (KTP/SIM/...)</strong></label>
                                                    <input type="number" placeholder="No. Identitas" class="input" maxlength="20">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Alamat</strong></label>
                                                    <input type="text" placeholder="Alamat" class="input" maxlength="100">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RT</strong></label>
                                                    <input type="number" placeholder="RT" class="input" onKeyPress="if(this.value.length==3) return false;">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RW</strong></label>
                                                    <input type="number" placeholder="RW" class="input" onKeyPress="if(this.value.length==3) return false;">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Propinsi</strong></label>
                                                    <select name="propinsi" id="propinsi" class="form-control form-control-user" title="Pilih Propinsi">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kota (Kabupaten)</strong></label>
                                                    <select name="kota" id="kota" class="form-control form-control-user" title="Pilih Kota (Kabupaten)">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kecamatan</strong></label>
                                                    <select name="kecamatan" id="kecamatan" class="form-control form-control-user" title="Pilih Kecamatan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kelurahan (Desa)</strong></label>
                                                    <select name="kelurahan" id="kelurahan" class="form-control form-control-user" title="Pilih Kelurahan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Telepon</strong></label>
                                                    <input type="number" placeholder="Telepon" class="input" onKeyPress="if(this.value.length==15) return false;">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kode Pos</strong></label>
                                                    <input type="number" placeholder="Kode Pos" class="input" onKeyPress="if(this.value.length==5) return false;">
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-primary  text-white" id="headerreservasi">
                                        Data Registrasi
                                    </div>
                                    <div class="card-body" id="isireservasi">
                                        <input type="hidden" name="nilai" id="nilai" value="1">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tgl. Registrasi</strong></label>
                                                    <input type="date" placeholder="Tanggal Reservasi" class="input" value="<?= date("Y-m-d") ?>">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Poli</strong></label>
                                                    <select name="poli" id="propinsi" class="form-control form-control-user" title="Pilih Poli">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Rujukan Asal</strong></label>
                                                    <select name="rujukanasal" id="rujukanasal" class="form-control form-control-user" title="Pilih Rujukan Asal">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>No. Peserta / No. Kartu</strong></label>
                                                    <input type="number" placeholder="No Peserta" class="input" onKeyPress="if(this.value.length==20) return false;">
                                                    <!---->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>No. Surat Rujukan</strong></label>
                                                    <input type="number" placeholder="No. Surat Rujukan" class="input" onKeyPress="if(this.value.length==20) return false;">
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Jenis Kunjungan</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="1" id="flexRadionew1" onclick="checkRadio(value)">
                                                        <label class="form-check-label mr-5" for="flexRadionew1">
                                                            Kontrol
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="2" id="flexRadionew2" onclick="checkRadio(value)">
                                                        <label class="form-check-label" for="flexRadionew2">
                                                            Berdasarkan Rujukan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Jenis Permintaan</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="1" id="flexRadionew1" onclick="checkRadio(value)">
                                                        <label class="form-check-label mr-5" for="flexRadionew1">
                                                            Ambil Antrian Pendaftaran
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="2" id="flexRadionew2" onclick="checkRadio(value)">
                                                        <label class="form-check-label" for="flexRadionew2">
                                                            Pendaftaran Poli
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Jenis Poli</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="1" id="flexRadionew1" onclick="checkRadio(value)">
                                                        <label class="form-check-label mr-5" for="flexRadionew1">
                                                            Eksekutif
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="flexRadionew" value="2" id="flexRadionew2" onclick="checkRadio(value)">
                                                        <label class="form-check-label" for="flexRadionew2">
                                                            Reguler
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex">
                                        <!-- <button id="btncari" name="btncari" type="button" onclick="prosesCari()" class="btn btn-sm btn-primary"><i class="fas fa-search"></i> Cari</button> -->
                                        <button id="btnkembali" name="btnkembali" type="button" onclick="prosesKembali()" class="btn btn-sm btn-primary p-2"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
                                        <button id="btnlanjut" name="btnlanjut" type="button" onclick="prosesLanjut()" class="btn btn-sm btn-primary ml-auto p-2"><i class="fas fa-arrow-alt-circle-right"></i> Lanjut</button>
                                    </div>

                                </div>
                            </div>
                            <!-- </section> -->
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
        $(document).ready(function() {

            $("#pasienlama").show();
            $("#pasienbaru").hide();
            $("#btnlanjutcarabayar").show();
            $("#headerreservasi").hide();
            $("#isireservasi").hide();
            $("#headerdatapasien").hide();
            $("#isidatapasien").hide();
            $("#cardfooter").hide();
            $("#btnkembali").hide();
            $("#btnlanjut").hide();
            $("#carddata").hide();

            getpropinsi();
            GetRujukanAsal();
        });

        function checkRadio(value) {
            var norm = document.getElementById('norm');
            if (value == "1") {
                $("#pasienlama").show();
                $("#pasienbaru").hide();
                $("#btnlanjut").html('<i class="fas fa-search"></i> Cari');
            } else {
                $("#pasienlama").hide();
                $("#pasienbaru").show();
                $("#btnlanjut").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
            }
            setSuccessFor(norm);
        }

        function prosesLanjutcarabayar() {
            var statuspasien = $('input[name="flexRadioDefault"]:checked').val();
            if (statuspasien == '1') {
                $("#pasienlama").show();
                $("#pasienbaru").hide();
                $("#headerdatapasien").show();
                $("#isidatapasien").show();
                $("#headerreservasi").hide();
                $("#isireservasi").hide();
                $("#btnkembali").show();
                $("#btnlanjut").show();
                $("#carabayar").hide();
                $("#btncarabayar").hide();
                $("#btnlanjutcarabayar").hide();
                $("#carddata").show();
            } else {
                $("#headerdatapasien").show();
                $("#isidatapasien").show();
                $("#headerreservasi").hide();
                $("#isireservasi").hide();
                $("#pasienbaru").show();
                $("#carabayar").hide();
                $("#btncarabayar").hide();
                $("#btnlanjutcarabayar").hide();
                $("#carddata").show();
            }
            $("#btnkembali").show();
            $("#btnlanjut").show();
            document.getElementById("nilai").value = "1";
            $("#btnlanjut").html('<i class="fas fa-search"></i> Cari');

            var norm = document.getElementById('norm');
            setSuccessFor(norm);
        }

        function prosesKembali() {
            var nilai = $("[name='nilai']").val();
            var statuspasien = $('input[name="flexRadioDefault"]:checked').val();
            var norm = document.getElementById('norm');

            if (nilai == '1') {
                $("#pasienlama").hide();
                $("#btnlanjutcarabayar").show();
                $("#carabayar").show();
                $("#headerreservasi").hide();
                $("#isireservasi").hide();
                $("#headerdatapasien").hide();
                $("#isidatapasien").hide();
                $("#cardfooter").hide();
                $("#btnkembali").hide();
                $("#btnlanjut").hide();
                $("#carddata").hide();
            } else {
                if (statuspasien == '1') {
                    $("#pasienlama").show();
                    $("#pasienbaru").hide();
                    $("#headerdatapasien").show();
                    $("#isidatapasien").show();
                    $("#headerreservasi").hide();
                    $("#isireservasi").hide();
                    $("#btnkembali").show();
                    $("#btnlanjut").show();
                    $("#carabayar").hide();
                    $("#btncarabayar").hide();
                    $("#btnlanjutcarabayar").hide();
                    $("#carddata").show();
                } else {
                    $("#headerdatapasien").show();
                    $("#isidatapasien").show();
                    $("#headerreservasi").hide();
                    $("#isireservasi").hide();
                    $("#pasienbaru").show();
                }
                $("#btnkembali").show();
                $("#btnlanjut").show();

            }
            if (nilai == '1') {
                $("#btnlanjut").html('<i class="fas fa-save"></i> Simpan');
            } else {
                $("#btnlanjut").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
            }
            document.getElementById("nilai").value = Number(nilai) - 1;
            setSuccessFor(norm);
        }

        function prosesLanjut() {
            if (validasi() == false) {
                return
            }

            var nilai = $("[name='nilai']").val();
            $("#headerdatapasien").hide();
            $("#isidatapasien").hide();
            $("#headerreservasi").show();
            $("#isireservasi").show();
            $("#btnkembali").show();
            var hasilnum = Number(nilai) + 1;
            if (nilai > '2') {
                hasilnum = '2';
            } else {
                hasilnum = Number(nilai) + 1;
            }

            if (nilai == '1') {
                $("#btnlanjut").html('<i class="fas fa-save"></i> Simpan');
            } else {
                $("#btnlanjut").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                // $("norm").attr("required", true);
            }

            document.getElementById("nilai").value = hasilnum;

        }

        function validasi() {
            var statuspasien = $('input[name="flexRadioDefault"]:checked').val();
            var norm = document.getElementById('norm');
            var normValue = norm.value.trim();
            var tgllahir = document.getElementById('tgllahir');
            var tgllahirValue = tgllahir.value.trim();

            if (statuspasien == '1') {
                if (normValue === '') {
                    setErrorFor(norm, 'No.RM Tidak Boleh Kosong');
                    return false;
                } else {
                    setSuccessFor(norm);
                }
                if (tgllahirValue === '') {
                    setErrorFor(tgllahir, 'Tgl. Lahir Tidak Boleh Kosong');
                    return false;
                } else {
                    setSuccessFor(tgllahir);
                }
            }
        }

        function setErrorFor(input, message) {
            var formGroup = input.parentElement;
            var small = formGroup.querySelector('small');
            formGroup.className = 'form-group error';
            small.innerText = message;
        }

        function setSuccessFor(input) {
            var formGroup = input.parentElement;
            formGroup.className = 'form-group success';
        }

        function getpropinsi() {
            $.ajax({
                url: "<?= base_url('Reservasi/GetPropinsi') ?>",
                method: "POST",
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option value=''>-PILIH-</option>";
                    for (i = 0; i < data.length; i++) {
                        html += "<option value = '" + data[i].KdPropinsi + "'>" + data[i].NamaPropinsi + "</option>";
                    }
                    $('#propinsi').html(html);

                },
                error: function() {
                    var html = '';
                    html += "<option value=''>-PILIH-</option>";
                    $('#propinsi').html(html);
                }
            });
        }

        function GetKota() {
            var id = $('#propinsi').val();
            $.ajax({
                url: "<?= base_url('Reservasi/GetKota') ?>",
                method: "POST",
                data: {
                    "propinsi": id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option value=''>-PILIH-</option>";
                    for (i = 0; i < data.length; i++) {
                        html += "<option value = '" + data[i].KdKotaKabupaten + "'>" + data[i].NamaKotaKabupaten + "</option>";
                    }
                    $('#kota').html(html);

                },
                error: function() {
                    var html = '';
                    html += "<option value=''>-PILIH-</option>";
                    $('#kota').html(html);
                }
            });
        }

        function GetKecamatan() {
            var id = $('#kota').val();
            $.ajax({
                url: "<?= base_url('Reservasi/GetKecamatan') ?>",
                method: "POST",
                data: {
                    "kota": id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option value=''>-PILIH-</option>";
                    for (i = 0; i < data.length; i++) {
                        html += "<option value = '" + data[i].KdKecamatan + "'>" + data[i].NamaKecamatan + "</option>";
                    }
                    $('#kecamatan').html(html);

                },
                error: function() {
                    var html = '';
                    html += "<option value=''>-PILIH-</option>";
                    $('#kecamatan').html(html);
                }
            });
        }

        function GetKelurahan() {
            var id = $('#kecamatan').val();
            $.ajax({
                url: "<?= base_url('Reservasi/GetKelurahan') ?>",
                method: "POST",
                data: {
                    "kecamatan": id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option value=''>-PILIH-</option>";
                    for (i = 0; i < data.length; i++) {
                        html += "<option value = '" + data[i].KdKelurahan + "'>" + data[i].NamaKelurahan + "</option>";
                    }
                    $('#kelurahan').html(html);

                },
                error: function() {
                    var html = '';
                    html += "<option value=''>-PILIH-</option>";
                    $('#kelurahan').html(html);
                }
            });
        }

        function GetRujukanAsal() {
            $.ajax({
                url: "<?= base_url('Reservasi/GetRujukanAsal') ?>",
                method: "POST",
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option value=''>-PILIH-</option>";
                    for (i = 0; i < data.length; i++) {
                        html += "<option value = '" + data[i].KdRujukanAsal + "'>" + data[i].RujukanAsal + "</option>";
                    }
                    $('#rujukanasal').html(html);

                },
                error: function() {
                    var html = '';
                    html += "<option value=''>-PILIH-</option>";
                    $('#rujukanasal').html(html);
                }
            });
        }

        $('#propinsi').change(function() {
            GetKota();
            GetKecamatan();
            GetKelurahan();
        });

        $('#kota').change(function() {
            GetKecamatan();
            GetKelurahan();
        });

        $('#kecamatan').change(function() {
            GetKelurahan();
        });
    </script>

</body>

</html>