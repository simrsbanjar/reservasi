<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header', array('data' => '1')); ?>


<!-- ======= selamatdatang Section ======= -->
<section id="selamatdatang" class="d-flex align-items-center">
    <div class="container">
        <h1>Selamat Datang</h1>
        <h2>Di Pendaftaran Pasien Rawat Jalan</h2>
        <a href="#alur" class="btn-get-started scrollto">Cek Alur</a>
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


    <!-- ======= Departments/alur Section ======= -->
    <section id="alur" class="alur">
        <div class="container align-center">

            <div class="section-title col-md-12 col">
                <h2>Alur</h2>
                <p>Sementara ieu mah bari ngantosan proses bisnisna rapih</p>
                <img src="<?= base_url('assets/'); ?>img/construction.png" width="75%">
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
    <section class="slidedokter" id="dokter">
        <div class="container">
            <div class="slidersection">
                <h2>Dokter Spesialis</h2>
                <p>Berikut adalah list dokter spesialis :</p>
            </div>

            <div class="slidercuy">
                <div>
                    <a href="">
                        <img src="assets/img/doctors/dalam/emansulaeman.jpg" alt="Eman Sulaeman">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/dalam/juliankarundeng.jpg" alt="Julian Karundeng">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/dalam/siskadewiroslani.jpg" alt="Siska Dewi Rosalani">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/anak/mahesa.jpg" alt="Mahes">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/anak/niaadriani.jpg" alt="Nia Adriani">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/bedah/juliawan.jpg" alt="Juliawan">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/bedah/rendifitra.jpg" alt="Rendifitra">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/jantung/asepsopandiana.jpg" alt="Rendifitra">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/kulitkelamin/andinidwi.jpg" alt="Andini Dwi">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/kulitkelamin/bowo.jpg" alt="Bowo">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/anestesi/doniarif.jpg" alt="Doni Arif">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/anestesi/teguhbudiman.jpg" alt="Teguh Budiman">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/kandungan/aguskurnia.jpg" alt="Agus Kurnia">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/kandungan/dennis.jpg" alt="Dennis">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/kandungan/imamwahyudi.jpg" alt="Imam Wahyudi">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/mata/retysugiarti.jpg" alt="Rety Sugiarti">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/radiologi/nunuheryana.jpg" alt="Nunu Heryana">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/rm/tinasusilawati.jpg" alt="Tina Susilawati">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/saraf/danyerlangga.jpg" alt="Dany Erlangga">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/saraf/fuadhanif.jpg" alt="Fuad Hanif">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/saraf/marisaayu.jpg" alt="Marisa Ayu">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/ortopedi/isaridwan.jpg" alt="Isa Ridwan">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/tht/rini.jpg" alt="Rini">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/forensik/hendrik.jpg" alt="Hendrik">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/paru/dilalaswantina.jpg" alt="Dila Laswantina">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/jiwa/nununurkholis.jpg" alt="Nunu Nur Kholis">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/jiwa/dyah.jpg" alt="Dyah">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/akupuntur/feliciaadriani.jpg" alt="Felicia Adriani">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/mulut/megarafika.jpg" alt="Mega Rafika">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/pa/yukeireka.jpg" alt="Yuke Ireka">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="assets/img/doctors/pk/adenovita.jpg" alt="Ade Novita">
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- End Doctors Section -->

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

</main><!-- End #main -->

<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>