<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header', array('data' => '2')); ?>

<div class="section-title">
    <h2 class="blink">PENDAFTARAN ONLINE</h2>
</div>

<main id="main">
    <!-- ======= Features Section ======= -->
    <!-- <section id="featuresok" class="featuresok"> -->
    <div class="container">



        <!-- <div class="d-flex justify-content-between">
            <div class="bd-highlight btn bg-primary">Cara Bayar</div>
            <div class="bd-highlight btn bg-primary">Data Pasien</div>
            <div class="bd-highlight btn bg-primary">Data Pendaftaran</div>
            <div class="bd-highlight btn bg-primary">Selesai</div>
        </div> -->


        <!-- <div class="registration_form mt-4">
            <ul class="nav nav-pills registration_form_list" role="tablist" style="background-color: pink;">
                <li class="active">
                    <a class="nav-link active" href="#home" data-toggle="tab" role="tab">
                        Cara Bayar</a>
                </li>
                <li>
                    <a class="nav-link" href="#profile" data-toggle="tab" role="tab">
                        Data Pasien</a>
                </li>
                <li class="">
                    <a class="nav-link" href="#contact" data-toggle="tab" role="tab">
                        Data Pendaftaran</a>
                </li>
                <li class="">
                    <a class="nav-link" href="#contact" data-toggle="tab" role="tab">
                        Selesai</a>
                </li>

            </ul>

            <div class="tab-content registration_body bg-white" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h6 class="text-heading-blue mb-3 pb-2 font-weight-bold">Info</h6>

                    <div class="card-header bg-primary  text-white">
                        Data Pasien
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <label class="label-control"><strong>Status Pasien</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault3" checked onclick="checkRadio(value)">
                                    <label class="form-check-label mr-5" for="flexRadioDefault2">
                                        Pasien Lama
                                    </label>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault4" onclick="checkRadio(value)">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Pasien Baru
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
                </div>

            </div>




        </div> -->
    </div>

</main>
<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>