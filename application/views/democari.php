<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header'); ?>

<div class="section-title">
    <h2>PENDAFTARAN ONLINE</h2>
</div>

<div class="container">
    <div class="row justify-content-md-center" style="margin-bottom: 80px;">
        <div class="col-lg-8 mt-3">
            <div class="card">

                <div class="card-header bg-primary text-white">
                    Cari Data Pendaftaran
                </div>
                <div class="card-body card-block">
                    <input type="hidden" name="reservasi" id="reservasi" value="2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label-control">Kode Booking / No. Pendaftaran</label>
                                    <input type="number" name="nopendaftaran" id="nopendaftaran" class="form-control" placeholder="Kode Bookinng / No. Pendaftaran">
                                    <small>Error Message</small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button id="btncari" type="button" onclick="caripasienbooking()" class="btn btn-sm btn-primary ml-auto p-2"><i class="nav-icon fas fa-search"></i> Cari</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <center>Hasil Pencarian </center>
                </div>
                <div class="row">
                    <!-- DOKUMENTASI -->
                    <!-- col-lg-4 tampilan ketika desktop -->
                    <!-- TAMPILAN MOBILE -->
                    <!-- col-7 tampilan extra small <576px -->
                    <!-- col-sm-6 tampilan small ≥576px <768px -->
                    <!-- col-md-5 tampilan medium 720px -->
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Kode Booking</dt>
                            <dd>2003190003</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>No Pendaftaran</dt>
                            <dd>2105100010</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>No. Rekam Medik</dt>
                            <dd>329686</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>No. Antrian</dt>
                            <dd>001</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Jenis Antrian</dt>
                            <dd>Antrian Poli</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Estimasi Dilayani</dt>
                            <dd>24-03-2020 06:03</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Poli Tujuan</dt>
                            <dd>Poli Psikiatri</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Dokter Tujuan</dt>
                            <dd>dr. RR. Dyah Rikayanti N, Sp.KJ</dd>
                        </dl>
                    </div>
                    <div class="col-lg-4 col-7 col-sm-6 col-md-5">
                        <dl>
                            <dt>Status Pasien</dt>
                            <dd>Lama</dd>
                        </dl>
                    </div>
                </div>
                <div class="d-flex justify-content-end card-footer">
                    <button id="btnhapus" type="submit" value="hapus" class="btn btn-sm btn-danger mr-2"><i class="fa fa-trash"></i> Hapus</button>
                    <button id="btncetak" type="submit" value="cetak" class="btn btn-sm btn-danger mr-1"><i class="fas fa-print"></i> Cetak</button>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright dari web -->
    <?php $this->load->view('Template/Footer'); ?>