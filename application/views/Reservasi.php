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
                                        <div class="row mt-4" id="pasienlama">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nomor Rekam Medik</strong></label>
                                                    <input type="number" placeholder="Nomor RM" class="input" name="norm" id="norm">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" value="<?= date("Y-m-d") ?>" class="input" name="tgllahir" id="tgllahir">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="pasienbaru">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Depan</strong></label>
                                                    <select name="gelar" id="gelar" class="input" title="Pilih Gelar">
                                                        <option value="">-PILIH-</option>
                                                        <option value="Bayi">Bayi</option>
                                                        <option value="Anak">Anak</option>
                                                        <option value="Tn.">Tn.</option>
                                                        <option value="Ny.">Ny.</option>
                                                        <option value="Nn.">Nn.</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" placeholder="Nama Pasien" class="input" maxlength="50" name="namalengkap" id="namalengkap">
                                                    <!---->
                                                    <small>Error Message</small>
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
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tempat Lahir</strong></label>
                                                    <input type="text" placeholder="Tempat Lahir" class="input" maxlength="50" id="tempatlahir" name="tempatlahir">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" placeholder="dd/mm/yyyy" class="input" value="<?= date("Y-m-d") ?>" id="tgllahir" name="tgllahir">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tahun</strong></label>
                                                    <input type="text" placeholder="Thn" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Bulan</strong></label>
                                                    <input type="text" placeholder="Bln" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Hari</strong></label>
                                                    <input type="text" placeholder="Hari" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>No. Identitas (KTP/SIM/...)</strong></label>
                                                    <input type="number" placeholder="No. Identitas" class="input" maxlength="20" id="noidentitas" name="noidentitas">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Alamat</strong></label>
                                                    <input type="text" placeholder="Alamat" class="input" maxlength="100" id="alamat" name="alamat">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RT</strong></label>
                                                    <input type="number" placeholder="RT" class="input" onKeyPress="if(this.value.length==3) return false;" id="rt" name="rt">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RW</strong></label>
                                                    <input type="number" placeholder="RW" class="input" onKeyPress="if(this.value.length==3) return false;" id="rw" name="rw">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Propinsi</strong></label>
                                                    <select name="propinsi" id="propinsi" class="form-control form-control-user" title="Pilih Propinsi">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kota (Kabupaten)</strong></label>
                                                    <select name="kota" id="kota" class="form-control form-control-user" title="Pilih Kota (Kabupaten)">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kecamatan</strong></label>
                                                    <select name="kecamatan" id="kecamatan" class="form-control form-control-user" title="Pilih Kecamatan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kelurahan (Desa)</strong></label>
                                                    <select name="kelurahan" id="kelurahan" class="form-control form-control-user" title="Pilih Kelurahan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Telepon</strong></label>
                                                    <input type="number" placeholder="Telepon" class="input" onKeyPress="if(this.value.length==15) return false;" id="notlp" name="notlp">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kode Pos</strong></label>
                                                    <input type="number" placeholder="Kode Pos" class="input" onKeyPress="if(this.value.length==5) return false;">
                                                    <!---->
                                                    <small>Error Message</small>
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
                                                    <select name="poli" id="poli" class="form-control form-control-user" title="Pilih Poli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="01">MATA</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Rujukan Asal</strong></label>
                                                    <select name="rujukanasal" id="rujukanasal" class="form-control form-control-user" title="Pilih Rujukan Asal">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>No. Peserta / No. Kartu</strong></label>
                                                    <input type="number" placeholder="No Peserta" class="input" onKeyPress="if(this.value.length==20) return false;" id="nopeserta" name="nopeserta">
                                                    <small>Error Message</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>No. Surat Rujukan</strong></label>
                                                    <input type="number" placeholder="No. Surat Rujukan" class="input" onKeyPress="if(this.value.length==20) return false;" id="nosuratrujukan" name="nosuratrujukan">
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kunjungan</strong></label>
                                                    <select name="jeniskunjungan" id="jeniskunjungan" class="form-control form-control-user" title="Pilih Jenis Kunjungan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Kontrol</option>
                                                        <option value="2">Berdasarkan Rujukan</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Permintaan</strong></label>
                                                    <select name="jenispermintaan" id="jenispermintaan" class="form-control form-control-user" title="Pilih Jenis Permintaan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Ambil Antrian Pendaftaran</option>
                                                        <option value="2">Pendaftaran Poli</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Poli</strong></label>
                                                    <select name="jenispoli" id="jenispoli" class="form-control form-control-user" title="Pilih Jenis POli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Eksekutif</option>
                                                        <option value="2">Reguler</option>
                                                    </select>
                                                    <small>Error Message</small>
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
                        <div class="row justify-content-md-center">
                            <!-- <section id="featured-services1" class="featured-services1"> -->
                            <div style="padding: 2rem 3rem; text-align: left;">
                                <div class="card" id="carddata2">
                                    <div class="card-header bg-primary  text-white" id="headerdatapasien2">
                                        Data Pasien
                                    </div>
                                    <div class="card-body" id="isidatapasien2">
                                        <input type="hidden" name="nilai2" id="nilai2" value="1">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label class="label-control"><strong>Status Pasien</strong></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault3" checked onclick="checkRadio(value)">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault3">
                                                        Pasien Lama
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault4" onclick="checkRadio(value)">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        Pasien Baru
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4" id="pasienlama2">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nomor Rekam Medik</strong></label>
                                                    <input type="number" placeholder="Nomor RM" class="input" name="norm2" id="norm2">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" value="<?= date("Y-m-d") ?>" class="input" name="tgllahir2" id="tgllahir2">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="pasienbaru2">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Depan</strong></label>
                                                    <select name="gelar2" id="gelar2" class="input" title="Pilih Gelar">
                                                        <option value="">-PILIH-</option>
                                                        <option value="Bayi">Bayi</option>
                                                        <option value="Anak">Anak</option>
                                                        <option value="Tn.">Tn.</option>
                                                        <option value="Ny.">Ny.</option>
                                                        <option value="Nn.">Nn.</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" placeholder="Nama Pasien" class="input" maxlength="50" name="namalengkap2" id="namalengkap2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kelamin</strong></label>
                                                    <select name="kelamin2" id="kelamin2" class="form-control form-control-user" title="Pilih Jenis Kelamin">
                                                        <option value="">-PILIH-</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tempat Lahir</strong></label>
                                                    <input type="text" placeholder="Tempat Lahir" class="input" maxlength="50" id="tempatlahir2" name="tempatlahir2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" placeholder="dd/mm/yyyy" class="input" value="<?= date("Y-m-d") ?>" id="tgllahir2" name="tgllahir2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tahun</strong></label>
                                                    <input type="text" placeholder="Thn" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Bulan</strong></label>
                                                    <input type="text" placeholder="Bln" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Hari</strong></label>
                                                    <input type="text" placeholder="Hari" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>No. Identitas (KTP/SIM/...)</strong></label>
                                                    <input type="number" placeholder="No. Identitas" class="input" maxlength="20" id="noidentitas2" name="noidentitas2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Alamat</strong></label>
                                                    <input type="text" placeholder="Alamat" class="input" maxlength="100" id="alamat2" name="alamat2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RT</strong></label>
                                                    <input type="number" placeholder="RT" class="input" onKeyPress="if(this.value.length==3) return false;" id="rt2" name="rt2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RW</strong></label>
                                                    <input type="number" placeholder="RW" class="input" onKeyPress="if(this.value.length==3) return false;" id="rw2" name="rw2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Propinsi</strong></label>
                                                    <select name="propinsi2" id="propinsi2" class="form-control form-control-user" title="Pilih Propinsi">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kota (Kabupaten)</strong></label>
                                                    <select name="kota2" id="kota2" class="form-control form-control-user" title="Pilih Kota (Kabupaten)">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kecamatan</strong></label>
                                                    <select name="kecamatan2" id="kecamatan2" class="form-control form-control-user" title="Pilih Kecamatan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kelurahan (Desa)</strong></label>
                                                    <select name="kelurahan2" id="kelurahan2" class="form-control form-control-user" title="Pilih Kelurahan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Telepon</strong></label>
                                                    <input type="number" placeholder="Telepon" class="input" onKeyPress="if(this.value.length==15) return false;" id="notlp2" name="notlp2">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kode Pos</strong></label>
                                                    <input type="number" placeholder="Kode Pos" class="input" onKeyPress="if(this.value.length==5) return false;">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-primary  text-white" id="headerreservasi2">
                                        Data Registrasi
                                    </div>
                                    <div class="card-body" id="isireservasi2">
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
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Cara Bayar</strong></label>
                                                    <select name="carabayar2" id="carabayar2" class="form-control form-control-user" title="Pilih Cara Bayar">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Poli</strong></label>
                                                    <select name="poli2" id="poli2" class="form-control form-control-user" title="Pilih Poli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="01">MATA</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Rujukan Asal</strong></label>
                                                    <select name="rujukanasal2" id="rujukanasal2" class="form-control form-control-user" title="Pilih Rujukan Asal">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>No. Peserta / No. Kartu</strong></label>
                                                    <input type="number" placeholder="No Peserta" class="input" onKeyPress="if(this.value.length==20) return false;" id="nopeserta2" name="nopeserta2">
                                                    <small>Error Message</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kunjungan</strong></label>
                                                    <select name="jeniskunjungan2" id="jeniskunjungan2" class="form-control form-control-user" title="Pilih Jenis Kunjungan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Kontrol</option>
                                                        <option value="2">Berdasarkan Rujukan</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Permintaan</strong></label>
                                                    <select name="jenispermintaan2" id="jenispermintaan2" class="form-control form-control-user" title="Pilih Jenis Permintaan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Ambil Antrian Pendaftaran</option>
                                                        <option value="2">Pendaftaran Poli</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Poli</strong></label>
                                                    <select name="jenispoli2" id="jenispoli2" class="form-control form-control-user" title="Pilih Jenis POli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Eksekutif</option>
                                                        <option value="2">Reguler</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex">
                                        <!-- <button id="btncari" name="btncari" type="button" onclick="prosesCari()" class="btn btn-sm btn-primary"><i class="fas fa-search"></i> Cari</button> -->
                                        <button id="btnkembali2" name="btnkembali2" type="button" onclick="prosesKembali()" class="btn btn-sm btn-primary p-2"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
                                        <button id="btnlanjut2" name="btnlanjut2" type="button" onclick="prosesLanjut()" class="btn btn-sm btn-primary ml-auto p-2"><i class="fas fa-arrow-alt-circle-right"></i> Lanjut</button>
                                    </div>

                                </div>
                            </div>
                            <!-- </section> -->
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-3">
                        <div class="row justify-content-md-center">
                            <!-- <section id="featured-services1" class="featured-services1"> -->
                            <div style="padding: 2rem 3rem; text-align: left;">
                                <div class="card" id="carddata3">
                                    <div class="card-header bg-primary  text-white" id="headerdatapasien3">
                                        Data Pasien
                                    </div>
                                    <div class="card-body" id="isidatapasien3">
                                        <input type="hidden" name="nilai3" id="nilai3" value="1">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label class="label-control"><strong>Status Pasien</strong></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault3" value="1" id="flexRadioDefault5" checked onclick="checkRadio(value)">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault5">
                                                        Pasien Lama
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault3" value="2" id="flexRadioDefault6" onclick="checkRadio(value)">
                                                    <label class="form-check-label" for="flexRadioDefault6">
                                                        Pasien Baru
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4" id="pasienlama3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nomor Rekam Medik</strong></label>
                                                    <input type="number" placeholder="Nomor RM" class="input" name="norm3" id="norm3">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" value="<?= date("Y-m-d") ?>" class="input" name="tgllahir3" id="tgllahir3">
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="pasienbaru3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Depan</strong></label>
                                                    <select name="gelar3" id="gelar3" class="input" title="Pilih Gelar">
                                                        <option value="">-PILIH-</option>
                                                        <option value="Bayi">Bayi</option>
                                                        <option value="Anak">Anak</option>
                                                        <option value="Tn.">Tn.</option>
                                                        <option value="Ny.">Ny.</option>
                                                        <option value="Nn.">Nn.</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" placeholder="Nama Pasien" class="input" maxlength="50" name="namalengkap3" id="namalengkap3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kelamin</strong></label>
                                                    <select name="kelamin3" id="kelamin3" class="form-control form-control-user" title="Pilih Jenis Kelamin">
                                                        <option value="">-PILIH-</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tempat Lahir</strong></label>
                                                    <input type="text" placeholder="Tempat Lahir" class="input" maxlength="50" id="tempatlahir3" name="tempatlahir3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" placeholder="dd/mm/yyyy" class="input" value="<?= date("Y-m-d") ?>" id="tgllahir3" name="tgllahir3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Tahun</strong></label>
                                                    <input type="text" placeholder="Thn" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Bulan</strong></label>
                                                    <input type="text" placeholder="Bln" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Hari</strong></label>
                                                    <input type="text" placeholder="Hari" class="input" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>No. Identitas (KTP/SIM/...)</strong></label>
                                                    <input type="number" placeholder="No. Identitas" class="input" maxlength="20" id="noidentitas3" name="noidentitas3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Alamat</strong></label>
                                                    <input type="text" placeholder="Alamat" class="input" maxlength="100" id="alamat3" name="alamat3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RT</strong></label>
                                                    <input type="number" placeholder="RT" class="input" onKeyPress="if(this.value.length==3) return false;" id="rt3" name="rt3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>RW</strong></label>
                                                    <input type="number" placeholder="RW" class="input" onKeyPress="if(this.value.length==3) return false;" id="rw3" name="rw3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Propinsi</strong></label>
                                                    <select name="propinsi3" id="propinsi3" class="form-control form-control-user" title="Pilih Propinsi">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kota (Kabupaten)</strong></label>
                                                    <select name="kota3" id="kota3" class="form-control form-control-user" title="Pilih Kota (Kabupaten)">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kecamatan</strong></label>
                                                    <select name="kecamatan3" id="kecamatan3" class="form-control form-control-user" title="Pilih Kecamatan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kelurahan (Desa)</strong></label>
                                                    <select name="kelurahan3" id="kelurahan3" class="form-control form-control-user" title="Pilih Kelurahan">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class=" form-group">
                                                    <label class="label-control"><strong>Telepon</strong></label>
                                                    <input type="number" placeholder="Telepon" class="input" onKeyPress="if(this.value.length==15) return false;" id="notlp3" name="notlp3">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Kode Pos</strong></label>
                                                    <input type="number" placeholder="Kode Pos" class="input" onKeyPress="if(this.value.length==5) return false;">
                                                    <!---->
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-primary  text-white" id="headerreservasi3">
                                        Data Registrasi
                                    </div>
                                    <div class="card-body" id="isireservasi3">
                                        <input type="hidden" name="nilai3" id="nilai3" value="1">
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
                                                    <select name="poli3" id="poli3" class="form-control form-control-user" title="Pilih Poli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="01">MATA</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Rujukan Asal</strong></label>
                                                    <select name="rujukanasal3" id="rujukanasal3" class="form-control form-control-user" title="Pilih Rujukan Asal">
                                                        <option value="">-PILIH-</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Kunjungan</strong></label>
                                                    <select name="jeniskunjungan3" id="jeniskunjungan3" class="form-control form-control-user" title="Pilih Jenis Kunjungan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Kontrol</option>
                                                        <option value="2">Berdasarkan Rujukan</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Permintaan</strong></label>
                                                    <select name="jenispermintaan3" id="jenispermintaan3" class="form-control form-control-user" title="Pilih Jenis Permintaan">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Ambil Antrian Pendaftaran</option>
                                                        <option value="2">Pendaftaran Poli</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control"><strong>Jenis Poli</strong></label>
                                                    <select name="jenispoli3" id="jenispoli3" class="form-control form-control-user" title="Pilih Jenis POli">
                                                        <option value="">-PILIH-</option>
                                                        <option value="1">Eksekutif</option>
                                                        <option value="2">Reguler</option>
                                                    </select>
                                                    <small>Error Message</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex">
                                        <!-- <button id="btncari" name="btncari" type="button" onclick="prosesCari()" class="btn btn-sm btn-primary"><i class="fas fa-search"></i> Cari</button> -->
                                        <button id="btnkembali2" name="btnkembali2" type="button" onclick="prosesKembali()" class="btn btn-sm btn-primary p-2"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
                                        <button id="btnlanjut2" name="btnlanjut2" type="button" onclick="prosesLanjut()" class="btn btn-sm btn-primary ml-auto p-2"><i class="fas fa-arrow-alt-circle-right"></i> Lanjut</button>
                                    </div>

                                </div>
                            </div>
                            <!-- </section> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $("#btnlanjutcarabayar").show();
            hidetab1();
            hidetab2();
            hidetab3();
            getpropinsi();
            GetRujukanAsal();
        });

        function hidetab1() {
            $("#headerreservasi").hide();
            $("#isireservasi").hide();
            $("#headerdatapasien").hide();
            $("#isidatapasien").hide();
            $("#cardfooter").hide();
            $("#btnkembali").hide();
            $("#btnlanjut").hide();
            $("#carddata").hide();
        }

        function hidetab2() {
            $("#pasienlama").show();
            $("#pasienbaru").hide();
            $("#headerdatapasien2").hide();
            $("#isidatapasien2").hide();
            $("#headerreservasi2").hide();
            $("#isireservasi2").hide();
            $("#btnkembali2").hide();
            $("#btnlanjut2").hide();
            $("#carddata2").hide();
        }

        function hidetab3() {
            $("#pasienlama").show();
            $("#pasienbaru").hide();
            $("#isidatapasien3").hide();
            $("#headerreservasi3").hide();
            $("#isireservasi3").hide();
            $("#btnkembali3").hide();
            $("#btnlanjut3").hide();
            $("#carddata3").hide();
        }

        function pasienlamatab1() {
            $("#pasienlama").show();
            $("#pasienbaru").hide();
            $("#headerdatapasien").show();
            $("#isidatapasien").show();
            $("#headerreservasi").hide();
            $("#isireservasi").hide();
            $("#btnkembali").show();
            $("#btnlanjut").show();
            $("#carddata").show();
        }

        function pasienlamatab2() {
            $("#pasienlama2").show();
            $("#pasienbaru2").hide();
            $("#headerdatapasien2").show();
            $("#isidatapasien2").show();
            $("#headerreservasi2").hide();
            $("#isireservasi2").hide();
            $("#btnkembali2").show();
            $("#btnlanjut2").show();
            $("#carddata2").show();
        }

        function pasienlamatab3() {
            $("#pasienlama3").show();
            $("#pasienbaru3").hide();
            $("#headerdatapasien3").show();
            $("#isidatapasien3").show();
            $("#headerreservasi3").hide();
            $("#isireservasi3").hide();
            $("#btnkembali3").show();
            $("#btnlanjut3").show();
            $("#carddata3").show();
        }

        function pasienbarutab1() {
            $("#headerdatapasien").show();
            $("#isidatapasien").show();
            $("#headerreservasi").hide();
            $("#isireservasi").hide();
            $("#pasienbaru").show();
        }

        function pasienbarutab2() {
            $("#headerdatapasien2").show();
            $("#isidatapasien2").show();
            $("#headerreservasi2").hide();
            $("#isireservasi2").hide();
            $("#pasienbaru2").show();
        }

        function pasienbarutab3() {
            $("#headerdatapasien3").show();
            $("#isidatapasien3").show();
            $("#headerreservasi3").hide();
            $("#isireservasi3").hide();
            $("#pasienbaru3").show();
        }

        function checkRadio(value) {
            var idtabs = $(".tab-pane.active").attr("id");

            if (idtabs == 'tab-1') {
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
            } else if (idtabs == 'tab-2') {
                var norm = document.getElementById('norm2');
                if (value == "1") {
                    $("#pasienlama2").show();
                    $("#pasienbaru2").hide();
                    $("#btnlanjut2").html('<i class="fas fa-search"></i> Cari');
                } else {
                    $("#pasienlama2").hide();
                    $("#pasienbaru2").show();
                    $("#btnlanjut2").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }
            } else {
                var norm = document.getElementById('norm3');
                if (value == "1") {
                    $("#pasienlama3").show();
                    $("#pasienbaru3").hide();
                    $("#btnlanjut3").html('<i class="fas fa-search"></i> Cari');
                } else {
                    $("#pasienlama3").hide();
                    $("#pasienbaru3").show();
                    $("#btnlanjut3").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }
            }
            setSuccessFor(norm);
        }

        function prosesLanjutcarabayar() {
            var idtabs = $(".tab-pane.active").attr("id");
            if (idtabs == 'tab-1') {
                var statuspasien = $('input[name="flexRadioDefault"]:checked').val();
                if (statuspasien == '1') {
                    pasienlamatab1();
                } else {
                    pasienbarutab1();
                }
                $("#btnkembali").show();
                $("#btnlanjut").show();
                document.getElementById("nilai").value = "1";
                $("#btnlanjut").html('<i class="fas fa-search"></i> Cari');
                var norm = document.getElementById('norm');
                setSuccessFor(norm);
            } else if (idtabs == 'tab-2') {
                var statuspasien = $('input[name="flexRadioDefault2"]:checked').val();
                if (statuspasien == '1') {
                    pasienlamatab2();
                } else {
                    pasienbarutab2();
                }
                $("#btnkembali2").show();
                $("#btnlanjut2").show();
                document.getElementById("nilai2").value = "1";
                $("#btnlanjut2").html('<i class="fas fa-search"></i> Cari');
                var norm = document.getElementById('norm2');
                setSuccessFor(norm);
            } else {
                var statuspasien = $('input[name="flexRadioDefault3"]:checked').val();
                if (statuspasien == '1') {
                    pasienlamatab3();
                } else {
                    pasienbarutab3();
                }
                $("#btnkembali3").show();
                $("#btnlanjut3").show();
                document.getElementById("nilai3").value = "1";
                $("#btnlanjut3").html('<i class="fas fa-search"></i> Cari');
                var norm = document.getElementById('norm3');
                setSuccessFor(norm);
            }
            $("#carabayar").hide();
            $("#btncarabayar").hide();
            $("#btnlanjutcarabayar").hide();
        }

        function prosesKembali() {
            var idtabs = $(".tab-pane.active").attr("id");

            if (idtabs == 'tab-1') {
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
            } else if (idtabs == 'tab-2') {

                var nilai = $("[name='nilai2']").val();
                var statuspasien = $('input[name="flexRadioDefault2"]:checked').val();
                var norm = document.getElementById('norm2');

                if (nilai == '1') {
                    $("#pasienlama2").hide();
                    $("#btnlanjutcarabayar").show();
                    $("#carabayar").show();
                    $("#headerreservasi2").hide();
                    $("#isireservasi2").hide();
                    $("#headerdatapasien2").hide();
                    $("#isidatapasien2").hide();
                    $("#cardfooter2").hide();
                    $("#btnkembali2").hide();
                    $("#btnlanjut2").hide();
                    $("#carddata2").hide();
                } else {
                    if (statuspasien == '1') {
                        $("#pasienlama2").show();
                        $("#pasienbaru2").hide();
                        $("#headerdatapasien2").show();
                        $("#isidatapasien2").show();
                        $("#headerreservasi2").hide();
                        $("#isireservasi2").hide();
                        $("#btnkembali2").show();
                        $("#btnlanjut2").show();
                        $("#carabayar").hide();
                        $("#btncarabayar").hide();
                        $("#btnlanjutcarabayar").hide();
                        $("#carddata2").show();
                    } else {
                        $("#headerdatapasien2").show();
                        $("#isidatapasien2").show();
                        $("#headerreservasi2").hide();
                        $("#isireservasi2").hide();
                        $("#pasienbaru2").show();
                    }
                    $("#btnkembali2").show();
                    $("#btnlanjut2").show();
                }
                if (nilai == '1') {
                    $("#btnlanjut2").html('<i class="fas fa-save"></i> Simpan');
                } else {
                    $("#btnlanjut2").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }
                document.getElementById("nilai2").value = Number(nilai) - 1;
            } else {
                var nilai = $("[name='nilai3']").val();
                var statuspasien = $('input[name="flexRadioDefault3"]:checked').val();
                var norm = document.getElementById('norm');

                if (nilai == '1') {
                    $("#pasienlama3").hide();
                    $("#btnlanjutcarabayar").show();
                    $("#carabayar").show();
                    $("#headerreservasi3").hide();
                    $("#isireservasi3").hide();
                    $("#headerdatapasien3").hide();
                    $("#isidatapasien3").hide();
                    $("#cardfooter3").hide();
                    $("#btnkembali3").hide();
                    $("#btnlanjut3").hide();
                    $("#carddata3").hide();
                } else {
                    if (statuspasien == '1') {
                        $("#pasienlama3").show();
                        $("#pasienbaru3").hide();
                        $("#headerdatapasien3").show();
                        $("#isidatapasien3").show();
                        $("#headerreservasi3").hide();
                        $("#isireservasi3").hide();
                        $("#btnkembali3").show();
                        $("#btnlanjut3").show();
                        $("#carabayar").hide();
                        $("#btncarabayar").hide();
                        $("#btnlanjutcarabayar").hide();
                        $("#carddata3").show();
                    } else {
                        $("#headerdatapasien3").show();
                        $("#isidatapasien3").show();
                        $("#headerreservasi3").hide();
                        $("#isireservasi3").hide();
                        $("#pasienbaru3").show();
                    }
                    $("#btnkembali3").show();
                    $("#btnlanjut3").show();
                }
                if (nilai == '1') {
                    $("#btnlanjut3").html('<i class="fas fa-save"></i> Simpan');
                } else {
                    $("#btnlanjut3").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }
                document.getElementById("nilai3").value = Number(nilai) - 1;
            }
            setSuccessFor(norm);
        }

        function prosesLanjut() {
            var idtabs = $(".tab-pane.active").attr("id");

            if (idtabs == 'tab-1') {
                var statuspasien = $('input[name="flexRadioDefault"]:checked').val();
                var nilai = $("[name='nilai']").val();
                var hasilnum = Number(nilai) + 1;
                if (nilai > '2') {
                    hasilnum = '2';
                } else {
                    hasilnum = Number(nilai) + 1;
                }

                if (validasi(statuspasien, nilai) == false) {
                    return
                }

                if (nilai == '1') {
                    $("#btnlanjut").html('<i class="fas fa-save"></i> Simpan');
                } else {
                    $("#btnlanjut").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                    // $("norm").attr("required", true);
                }

                $("#headerdatapasien").hide();
                $("#isidatapasien").hide();
                $("#headerreservasi").show();
                $("#isireservasi").show();
                $("#btnkembali").show();
                document.getElementById("nilai").value = hasilnum;
            } else if (idtabs == 'tab-2') {
                var statuspasien = $('input[name="flexRadioDefault2"]:checked').val();
                var nilai = $("[name='nilai2']").val();
                var hasilnum = Number(nilai) + 1;
                if (nilai > '2') {
                    hasilnum = '2';
                } else {
                    hasilnum = Number(nilai) + 1;
                }

                if (validasi(statuspasien, nilai) == false) {
                    return
                }

                if (nilai == '1') {

                    $("#btnlanjut2").html('<i class="fas fa-save"></i> Simpan');
                } else {
                    $("#btnlanjut2").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }

                $("#headerdatapasien2").hide();
                $("#isidatapasien2").hide();
                $("#headerreservasi2").show();
                $("#isireservasi2").show();
                $("#btnkembal2i").show();
                document.getElementById("nilai2").value = hasilnum;
            } else {
                var statuspasien = $('input[name="flexRadioDefault3"]:checked').val();
                var nilai = $("[name='nilai3']").val();
                var hasilnum = Number(nilai) + 1;
                if (nilai > '2') {
                    hasilnum = '2';
                } else {
                    hasilnum = Number(nilai) + 1;
                }

                if (validasi(statuspasien, nilai) == false) {
                    return
                }

                if (nilai == '1') {

                    $("#btnlanjut3").html('<i class="fas fa-save"></i> Simpan');
                } else {
                    $("#btnlanjut3").html('<i class="fas fa-arrow-alt-circle-right"></i> Lanjut');
                }

                $("#headerdatapasien3").hide();
                $("#isidatapasien3").hide();
                $("#headerreservasi3").show();
                $("#isireservasi3").show();
                $("#btnkembali3").show();
                document.getElementById("nilai3").value = hasilnum;
            }

        }

        function validasi(statuspasien, nilai) {
            var idtabs = $(".tab-pane.active").attr("id");
            var numtab = '';
            if (idtabs == 'tab-1') {
                numtab = '';
            } else if (idtabs == 'tab-2') {
                numtab = '2';
            } else {
                numtab = '3';
            }

            if (nilai == '1') {
                if (statuspasien == '1') { //jika pasien lama
                    var norm = document.getElementById('norm' + numtab);
                    var normValue = norm.value.trim();
                    if (normValue === '') {
                        setErrorFor(norm, 'No.RM Tidak Boleh Kosong');
                        return false;
                    } else {
                        setSuccessFor(norm);
                    }
                    var tgllahir = document.getElementById('tgllahir' + numtab);
                    var tgllahirValue = tgllahir.value.trim();
                    if (tgllahirValue === '') {
                        setErrorFor(tgllahir, 'Tgl. Lahir Tidak Boleh Kosong');
                        return false;
                    } else {
                        setSuccessFor(tgllahir);
                    }
                } else { //jika pasien baru
                    var gelar = document.getElementById('gelar' + numtab);
                    var gelarValue = gelar.value.trim();
                    if (gelarValue === '') {
                        setErrorFor(gelar, 'Nama Depan Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(gelar);
                    }
                    var namalengkap = document.getElementById('namalengkap' + numtab);
                    var namalengkap = document.getElementById('namalengkap' + numtab);
                    var namalengkapValue = namalengkap.value.trim();
                    if (namalengkapValue === '') {
                        setErrorFor(namalengkap, 'Nama Lengkap Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(namalengkap);
                    }
                    var kelamin = document.getElementById('kelamin' + numtab);
                    var kelaminValue = kelamin.value.trim();
                    if (kelaminValue === '') {
                        setErrorFor(kelamin, 'Jenis Kelamin Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(kelamin);
                    }
                    var tempatlahir = document.getElementById('tempatlahir' + numtab);
                    var tempatlahirValue = tempatlahir.value.trim();
                    if (tempatlahirValue === '') {
                        setErrorFor(tempatlahir, 'Tempat Lahir Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(tempatlahir);
                    }
                    var noidentitas = document.getElementById('noidentitas' + numtab);
                    var noidentitasValue = noidentitas.value.trim();
                    if (noidentitasValue === '') {
                        setErrorFor(noidentitas, 'No. Identitas Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(noidentitas);
                    }
                    var alamat = document.getElementById('alamat' + numtab);
                    var alamatValue = alamat.value.trim();
                    if (alamatValue === '') {
                        setErrorFor(alamat, 'Alamat Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(alamat);
                    }
                    var rt = document.getElementById('rt' + numtab);
                    var rtValue = rt.value.trim();
                    if (rtValue === '') {
                        setErrorFor(rt, 'RT Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(rt);
                    }
                    var rw = document.getElementById('rw' + numtab);
                    var rwValue = rw.value.trim();
                    if (rwValue === '') {
                        setErrorFor(rw, 'RW Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(rw);
                    }
                    var propinsi = document.getElementById('propinsi' + numtab);
                    var propinsiValue = propinsi.value.trim();
                    if (propinsiValue === '') {
                        setErrorFor(propinsi, 'Propinsi Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(propinsi);
                    }
                    var kota = document.getElementById('kota' + numtab);
                    var kotaValue = kota.value.trim();
                    if (kotaValue === '') {
                        setErrorFor(kota, 'Kota Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(kota);
                    }
                    var kecamatan = document.getElementById('kecamatan' + numtab);
                    var kecamatanValue = kecamatan.value.trim();
                    if (kecamatanValue === '') {
                        setErrorFor(kecamatan, 'Kecamatan Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(kecamatan);
                    }
                    var kelurahan = document.getElementById('kelurahan' + numtab);
                    var kelurahanValue = kelurahan.value.trim();
                    if (kelurahanValue === '') {
                        setErrorFor(kelurahan, 'Kelurahan Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(kelurahan);
                    }
                    var notlp = document.getElementById('notlp' + numtab);
                    var notlpValue = notlp.value.trim();
                    if (notlpValue === '') {
                        setErrorFor(notlp, 'No. Telp Tidak Boleh Kosong.');
                        return false;
                    } else {
                        setSuccessFor(notlp);
                    }

                }

            } else {
                if (idtabs == 'tab-2') {
                    var carabayar = document.getElementById('carabayar' + numtab);
                    var carabayarValue = carabayar.value.trim();
                    if (carabayarValue === '') {
                        setErrorFor(carabayar, 'Cara Bayar Harus Dipilih.');
                        return false;
                    } else {
                        setSuccessFor(carabayar);
                    }
                }
                var poli = document.getElementById('poli' + numtab);
                var poliValue = poli.value.trim();
                if (poliValue === '') {
                    setErrorFor(poli, 'Poli Harus Dipilih');
                    return false;
                } else {
                    setSuccessFor(poli);
                }
                var rujukanasal = document.getElementById('rujukanasal' + numtab);
                var rujukanasalValue = rujukanasal.value.trim();
                if (rujukanasalValue === '') {
                    setErrorFor(rujukanasal, 'Rujukan Asal Harus Dipilih');
                    return false;
                } else {
                    setSuccessFor(rujukanasal);
                }

                if (idtabs == 'tab-1' || idtabs == 'tab-2') {
                    var nopeserta = document.getElementById('nopeserta' + numtab);
                    var nopesertaValue = nopeserta.value.trim();
                    if (nopesertaValue === '') {
                        setErrorFor(nopeserta, 'No. Peserta Tidak Boleh Kosong');
                        return false;
                    } else {
                        setSuccessFor(nopeserta);
                    }
                }

                if (idtabs == 'tab-1') {
                    var nosuratrujukan = document.getElementById('nosuratrujukan' + numtab);
                    var nosuratrujukanValue = nosuratrujukan.value.trim();
                    if (nosuratrujukanValue === '') {
                        setErrorFor(nosuratrujukan, 'No. Surat Rujukan Tidak Boleh Kosong');
                        return false;
                    } else {
                        setSuccessFor(nosuratrujukan);
                    }
                }
                var jeniskunjungan = document.getElementById('jeniskunjungan' + numtab);
                var jeniskunjunganValue = jeniskunjungan.value.trim();
                if (jeniskunjunganValue === '') {
                    setErrorFor(jeniskunjungan, 'Jenis Kunjungan Harus Dipilih.');
                    return false;
                } else {
                    setSuccessFor(jeniskunjungan);
                }
                var jenispermintaan = document.getElementById('jenispermintaan' + numtab);
                var jenispermintaanValue = jenispermintaan.value.trim();
                if (jenispermintaanValue === '') {
                    setErrorFor(jenispermintaan, 'Jenis Permintaan Harus Dipilih.');
                    return false;
                } else {
                    setSuccessFor(jenispermintaan);
                }
                var jenispoli = document.getElementById('jenispoli' + numtab);
                var jenispoliValue = jenispoli.value.trim();
                if (jenispoliValue === '') {
                    setErrorFor(jenispoli, 'Jenis Poli Harus Dipilih.');
                    return false;
                } else {
                    setSuccessFor(jenispoli);
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
                // async: false,
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
                // async: false,
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
                // async: false,
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
                // async: false,
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
                // async: false,
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