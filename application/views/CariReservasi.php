<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?= base_url('assets/img/logo rsu.png'); ?>" type="image/png" sizes="16x16">
    <title>PENDAFTARAN ONLINE</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand">PENDAFTARAN ONLINE RSU BANJAR</a>
    </nav>
    <br>
    <div class="row">
        <!-- row satu  -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Form</strong> Cari Data Reservasi
                </div>
                <!--id formfilter adalah nama form untuk filter-->
                <form id="formfilter">
                    <div class="card-body card-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group"><label class="label-control">Nomor Rekam Medik</label>
                                        <div class="input-group"><input type="text" name="nomor_rekam_medik" required="required" class="form-control">
                                            <div class="invalid-feedback">A valid RM is required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="label-control">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="mx-datepicker" required="required">
                                                <input name="tanggallahir" value="<?= date('Y-m-d') ?>" type="date" class="form-control" placeholder="Inputkan Tanggal Lahir" id="tanggallahir" required="">
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">Isi Tanggal Lahir</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="label-control">Tanggal Kunjungan</label>
                                        <div class="input-group">
                                            <div class="mx-datepicker" not-after="05/31/2021" required="required">
                                                <input name="tanggalkunjungan" value="<?= date('Y-m-d') ?>" type="date" class="form-control" placeholder="Inputkan Kunjungan" id="tanggalawal" required="">
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">Isi Tanggal Kunjungan</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label>Poliklinik Tujuan</label>
                                        <select name="tahun1" id="tahun1" class="form-control form-control-user" title="Pilih Tahun" required oninvalid="this.setCustomValidity('Tahun Harus Dipilih.')" oninput="this.setCustomValidity('')">
                                            <option value="">-PILIH-</option>
                                            <?php foreach ($tahun as $thn) : ?>
                                                <option value="<?php echo $thn->tahun; ?>"><?php echo $thn->tahun; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button id="btnproses" type="button" onclick="prosesPeriode()" class="btn btn-sm btn-primary"><i class="nav-icon fas fa-search"></i> Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>


</html>