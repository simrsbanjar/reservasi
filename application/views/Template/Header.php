<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto">
            <marquee>RSUD Kota Banjar</marquee>
        </h1>

        <nav class="nav-menu d-none d-lg-block mr-auto">
            <ul id="myList">

                <!-- di set di javasvript karena apabila klik daftar maka akan muncul menu yg beda-->
                <?php
                $name = $this->input->get('reservasi');
                // var_dump($name);
                // if ($name == null) {
                //     echo '<li class="active"><a href="Home">Home</a></li>';
                // } else if ($name == 1) {
                //     echo '<li><a href="#tentangkita">Tentang Kita</a></li>';
                // } else {
                //     echo '<li><a href="#tentangkita">Tentang Kita</a></li>';
                // }



                ?>
                <!-- <li class="active"><a href="Home">Home</a></li>
                <li><a href="#tentangkita">Tentang Kita</a></li>
                <li><a href="#alur">Alur</a></li>
                <li><a href="#dokter">Dokter</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#lokasi">Lokasi</a></li> -->


            </ul>
        </nav>

        <!-- .nav-menu -->

        <a href="<?= base_url('Reservasi'); ?>" class="appointment-btn scrollto" id="daftar">Daftar / Cari Pasien</a>

    </div>
</header><!-- End Header -->