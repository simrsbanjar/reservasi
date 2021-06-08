<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header'); ?>


<!-- ======= selamatdatang Section ======= -->
<section id="selamatdatang" class="d-flex align-items-center">
    <div class="container">
        <h1>Selamat Datang</h1>
        <h2>Di Pendaftaran Pasien Rawat Jalan</h2>
        <a href="#departments" class="btn-get-started scrollto">Cek Alur</a>
    </div>
</section><!-- End selamatdatang -->

<main id="main">

    <!-- ======= tentangkita Us Section ======= -->
    <section id="tentangkita" class="tentangkita">
        <div class="container">

            <div class="row justify-content-center">
                <!-- <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Kenapa RSUD Kota Banjar?</h3>
                            <p>
                                Under Construction
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Visi</h4>
                                    <p>Menjadi Rumah Sakit Unggulan dan Terpercaya di Priangan Timur</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Misi</h4>
                                    <ol style="text-align: left;">
                                        <li>
                                            Menyelenggarakan Pelayanan Prima
                                        </li>
                                        <li>
                                            Mengupayakan Terpenuhinya Sarana Prasarana sesuai Standar
                                        </li>
                                        <li>
                                            Meningkatkan Kualitas dan Kuantitas SDM
                                        </li>
                                        <li>
                                            Meningkatkan Kesejahteraan karyawan
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Motto</h4>
                                    <p>Pelayanan yang Baik untuk Semua</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End tentangkita Section -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Dine Pad</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>

                    </div>
                </div>

            </div>
        </section> -->
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-doctor-alt"></i>
                            <span data-toggle="counter-up">85</span>
                            <p>Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-patient-bed"></i>
                            <span data-toggle="counter-up">18</span>
                            <p>Departments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-laboratory"></i>
                            <span data-toggle="counter-up">8</span>
                            <p>Research Labs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-award"></i>
                            <span data-toggle="counter-up">150</span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-heart-beat"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-drug"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-dna-alt-2"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-heartbeat"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-disabled"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-autism"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <select name="department" id="department" class="form-control">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <select name="doctor" id="doctor" class="form-control">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Make an Appointment</button></div>
                </form>

            </div>
        </section> -->
    <!-- End Appointment Section -->

    <!-- ======= Departments/alur Section ======= -->
    <section id="alur" class="alur">
        <div class="container align-center">

            <div class="section-title">
                <h2>Alur</h2>
                <p>Sementara ieu mah bari ngantosan proses bisnisna rapih</p>
                <img src="<?= base_url('assets/'); ?>img/construction.png">
            </div>


            <!-- <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Cardiology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Neurology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Hepatology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">Pediatrics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">Eye Care</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiology</h3>
                                        <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Et blanditiis nemo veritatis excepturi</h3>
                                        <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                        <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

        </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="dokter" class="dokter">
        <div class="container">

            <div class="section-title">
                <h2>Dokter</h2>
                <p>Berikut adalah list dokter :</p>
            </div>
            <!-- Buka Row -->
            <div class="row">
                <!-- DOKTER Dalam Eman Sulaeman -->
                <div class="col-lg-6">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/dalam/emansulaeman.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Eman Sulaeman, Sp.PD</h4>
                            <span>Dokter Spesialis Dalam (Internist)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Dalam Siska Dewi Roslani -->
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/dalam/siskadewiroslani.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Siska Dewi Roslani, Sp.PD</h4>
                            <span>Dokter Spesialis Dalam (Internist)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Spesialis Dalam - Mitra RS Julian Karundeng -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/dalam/juliankarundeng.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Julian Karundeng, Sp.D</h4>
                            <span>Dokter Spesialis Dalam - Mitra RS (Internist)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Bedah Saraf Dany Erlangga -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/saraf/danyerlangga.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. R. Dany Erlangga, Sp.BS</h4>
                            <span>Dokter Spesialis Bedah Saraf</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Saraf Fuad Hanif -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/saraf/fuadhanif.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Fuad Hanif, Sp.S.,M.Kes</h4>
                            <span>Dokter Spesialis Saraf (Neurolog)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Saraf Marissa Ayu Anindyta -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/saraf/marisaayu.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Marissa Ayu Anindyta, Sp.S</h4>
                            <span>Dokter Spesialis Saraf (Neurolog)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Anak Mahesa Suryanagara -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/anak/mahesa.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. R.Mahesa Suryanagara, Sp.A.,M.Kes</h4>
                            <span>Dokter Spesialis Anak</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Anak Nia Adriani -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/anak/niaadriani.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Nia Adriani, Sp.A.,M.Kes</h4>
                            <span>Dokter Spesialis Anak</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Jiwa Nunu Nurkholis -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/jiwa/nununurkholis.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Nunu Nurkholis Majid, Sp.KJ</h4>
                            <span>Dokter Spesialis Jiwa (Psikiater)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Jiwa Rara Dyah -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/jiwa/dyah.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. RR Rara Dyah R.N, Sp.KJ</h4>
                            <span>Dokter Spesialis Jiwa (Psikiater)</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Bedah Juliawan Perminanto -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/bedah/juliawan.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Juliawan Perminanto, Sp.B.,M.Si.Med</h4>
                            <span>Dokter Spesialis Bedah</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Bedah Rendy Fitra -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/bedah/rendifitra.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Rendy Fitra, Sp.B</h4>
                            <span>Dokter Spesialis Bedah</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Kulit Kelamin Bowo Wahyudi -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/kulitkelamin/bowo.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Bowo Wahyudi, Sp.KK</h4>
                            <span>Dokter Spesialis Kulit & Kelamin</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Dermatovenereologi Andini Dwikenia Anjani -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/kulitkelamin/andini.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Andini Dwikenia Anjani, Sp.DV</h4>
                            <span>Dokter Spesialis Dermatovenereologi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Anesthesi Doni Arief -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/anestesi/doniarif.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Doni Arief R, Sp.An</h4>
                            <span>Dokter Spesialis Anesthesi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Anesthesi Teguh Budiman -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/anestesi/teguhbudiman.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. M. Teguh Budiman, Sp.An</h4>
                            <span>Dokter Spesialis Anesthesi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Kandungan dan Kebidanan Imam Wahyudi -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/kandungan/imamwahyudi.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. M. Imam Wahyudi, Sp.OG</h4>
                            <span>Dokter Spesialis Kandungan & Kebidanan</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Kandungan dan Kebidanan Dennis Fachmi -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/kandungan/dennis.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Dennis Fachmi A, Sp.OG</h4>
                            <span>Dokter Spesialis Kandungan & Kebidanan</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Kandungan dan Kebidanan Dennis Fachmi -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/kandungan/aguskurnia.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Agus Kurnia, Sp.OG</h4>
                            <span>Dokter Spesialis Kandungan & Kebidanan</span>
                        </div>
                    </div>
                </div>

                <!-- DOKTER Rehabilitasi Medik Tina Susilawati -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/rm/tinasusilawati.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Tina Susilawati, Sp.KFR</h4>
                            <span>Dokter Spesialis Rehabilitasi Medik</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Radiologi Nunu Heryana -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/radiologi/nunuheryana.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Nunu Heryana, Sp.R</h4>
                            <span>Dokter Spesialis Radiologi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Mata Rety Sugiarti -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/mata/retysugiarti.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Rety Sugiarti, Sp.M</h4>
                            <span>Dokter Spesialis Mata</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Orthopedi Isa Ridwan -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/ortopedi/isaridwan.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Isa Ridwan, Sp.OT</h4>
                            <span>Dokter Spesialis Orthopedi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Akupuntur Felicia Adriani -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/akupuntur/feliciaadriani.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Felicia Adriani, Sp.Ak</h4>
                            <span>Dokter Spesialis Akupuntur</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Forensik & Medikolegal Hendrik Septiana -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/forensik/hendrik.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Hendrik Septiana, Sp.F.M</h4>
                            <span>Dokter Spesialis Forensik & Medikolegal</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Paru Dilla Laswantina -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/paru/dilalaswantina.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Dilla Laswantina, Sp.P</h4>
                            <span>Dokter Spesialis Paru</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Patologi Anatomi Yuke Ireka -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/pa/yukeireka.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Yuke Ireka, Sp.PA</h4>
                            <span>Dokter Spesialis Patologi Anatomi</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Patologi Klinis Ade Novita Saragih -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/pk/adenovita.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Ade Novita Saragih, Sp.PK</h4>
                            <span>Dokter Spesialis Patologi Klinis</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Penyakit Mulut Mega Rafika -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/mulut/megarafika.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Mega Rafika, Sp.PM</h4>
                            <span>Dokter Spesialis Penyakit Mulut</span>
                        </div>
                    </div>
                </div>
                <!-- DOKTER Telinga Hidung Tenggorokan Rini Febrianti -->
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-center">
                        <div class="pic"><img src="assets/img/doctors/tht/rini.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>dr. Rini Febrianti, Sp.THT</h4>
                            <span>Dokter Spesialis Telinga Hidung Tenggorokan</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Tutup Row -->



        </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section> -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Kontak</h2>
            </div>
        </div>
        </div>

        <section id="counts" class="counts">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-3 mt-5">
                        <div class="count-box">
                            <i class="icofont-ui-dial-phone"></i>
                            <a href="tel:0265741032">
                                <span>0265-741032</span>
                            </a>
                            <p>Telpon</p>
                        </div>

                    </div>

                    <div class="col-md-auto mt-5">
                        <div class="count-box">
                            <i class="icofont-envelope"></i>
                            <a href="mailto:contact@example.com">
                                <span>rsu_kotabanjar@yahoo.co.id</span>
                            </a>
                            <p>Email</p>
                        </div>

                    </div>

                    <div class="col col-lg-3 mt-5">

                        <div class="count-box">
                            <i class="icofont-ui-dial-phone"></i>
                            <a href="tel:0265741032">
                                <span>0265-7482204</span>
                            </a>
                            <p>Ponek 24 Jam</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col col-lg-2 mt-5">
                        <div class="count-box">
                            <i class="icofont-whatsapp"></i>
                            <a href="https://api.whatsapp.com/send?phone=628112111146" target="_blank">
                                <span>08112111146</span>
                            </a>
                            <p>Whatsapp</p>
                        </div>

                    </div>

                    <div class="col col-lg-2 mt-5">

                        <div class="count-box">
                            <i class="icofont-fax"></i>
                            <a href="tel:02657482204 ">
                                <span>0265744730</span>
                            </a>
                            <p>Fax</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->
    </section><!-- End Contact Section -->

    <section id="lokasi" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Lokasi RSUD Kota Banjar</h2>
            </div>
        </div>
        </div>


        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=RSU%20KOTA%20BANJAR&t=m&z=10&output=embed&iwloc=near" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- End Counts Section -->
    </section><!-- End Contact Section -->


</main><!-- End #main -->

<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>