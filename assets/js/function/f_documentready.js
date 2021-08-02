$(document).ready(function() {
    var page = $("[name='reservasi']").val();
    var date = new Date().toDateString("yyyy-MM-dd");
    $("#btnlanjutcarabayar").show();
    hidetab1();
    hidetab2();
    hidetab3();
    daycount();
    getpropinsi();
    GetRujukanAsal();
    GetPoli(date);
    GetCarabayar();
    // const content = document.getElementById('content');
    // const bullets = [...document.querySelectorAll('.bullet')];

    // const MAX_STEPS = 4;
    // let currentStep = 1;
    // bullets[currentStep - 1].classList.add('completed');
    // currentStep += 1;

    if (page == null) {
        $("#daftar").show();
        var html = '';
        html += '<li class="active"><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
        html += '<li><a href="#tentangkita"><i class="far fa-list-alt"></i> Visi dan Misi</a></li>';
        html += '<li><a href="#contact"><i class="fab fa-hubspot"></i> Kontak</a></li>';
        html += '<li><a href="#alur"><i class="fas fa-user-md"></i> Alur </a></li>';
        html += '<li><a href="#dokter"><i class="far fa-address-book"></i> Dokter </a></li>';
        html += '<li><a href="#lokasi"><i class="fas fa-map-marked-alt"></i> Lokasi</a></li>';
        $('#myList').html(html);
    } else if (page == '1') {
        $("#daftar").hide();
        var html = '';
        html += '<li><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
        html += '<li><a href="CariReservasi"><i class="fas fa-search"></i> Cari</a></li>';
        html += '<li class="active"><a href="Reservasi"><i class="fas fa-clipboard-list"></i> Daftar</a></li>';
        $('#myList').html(html);
        GetHariLibur();
    } else {
        $("#daftar").hide();
        var html = '';
        html += '<li><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
        html += '<li class="active"><a href="CariReservasi"><i class="fas fa-search"></i> Cari</a></li>';
        html += '<li><a href="Reservasi"><i class="fas fa-clipboard-list"></i> Daftar</a></li>';
        $('#myList').html(html);
    }

    var html = '';
    html = '<li class="breadcrumb-item active" aria-current="page">Cara Bayar</a></li>';
    $('#stepprogress').html(html);
    $('#load').fadeOut();
});