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

<div class="row justify-content-md-center">
    <!-- row satu  -->
    <div class="col-lg-5">
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
                                <label class="label-control">No. Pendaftaran</label>
                                <input type="text" name="nopendaftaran" id="nopendaftaran" class="form-control" placeholder="No. Pendaftaran">
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
    </div>
</div>
<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>