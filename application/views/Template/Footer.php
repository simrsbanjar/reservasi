<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top" id="footer">
        <div class="container">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; <strong> RSUD KOTA BANJAR </strong> <?= date('Y'); ?>. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


<script>
    $(document).ready(function() {
        var page = $("[name='reservasi']").val();
        $("#btnlanjutcarabayar").show();
        hidetab1();
        hidetab2();
        hidetab3();
        getpropinsi();
        GetRujukanAsal();

        if (page == null) {
            $("#daftar").show();
            var html = '';
            html += '<li class="active"><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
            html += '<li><a href="#tentangkita"><i class="far fa-list-alt"></i> Visi dan Misi</a></li>';
            html += '<li><a href="#alur"><i class="fab fa-hubspot"></i> Alur</a></li>';
            html += '<li><a href="#dokter"><i class="fas fa-user-md"></i> Dokter</a></li>';
            html += '<li><a href="#contact"><i class="far fa-address-book"></i> Kontak</a></li>';
            html += '<li><a href="#lokasi"><i class="fas fa-map-marked-alt"></i> Lokasi</a></li>';
            $('#myList').html(html);
        } else if (page == '1') {
            $("#daftar").hide();
            var html = '';
            html += '<li class="active"><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
            html += '<li><a href="CariReservasi"><i class="fas fa-search"></i> Cari</a></li>';
            $('#myList').html(html);
        } else {
            $("#daftar").hide();
            var html = '';
            html += '<li class="active"><a href="Home"><i class="fas fa-home"></i> Home</a></li>';
            html += '<li><a href="Reservasi"><i class="fas fa-clipboard-list"></i> Daftar</a></li>';
            $('#myList').html(html);
        }

    });

    function HitungUmur(tgllahir) {
        var idtabs = $(".tab-pane.active").attr("id");
        var numtab = '';
        if (idtabs == 'tab-1') {
            numtab = '';
        } else if (idtabs == 'tab-2') {
            numtab = '2';
        } else {
            numtab = '3';
        }
        $.ajax({
            url: "<?= base_url('Reservasi/hitung_umur') ?>",
            method: "POST",
            data: {
                "tgllahir": tgllahir
            },
            // async: false,
            dataType: 'json',
            success: function(data) {
                document.getElementById("tahun" + numtab).value = data.tahun;
                document.getElementById("bulan" + numtab).value = data.bulan;
                document.getElementById("hari" + numtab).value = data.hari;
                // for (i = 0; i < data.length; i++) {
                //     html += "<option value = '" + data[i].KdKotaKabupaten + "'>" + data[i].NamaKotaKabupaten + "</option>";
                // }

            }
        });
    }

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

    function caripasienbooking() {
        var nopendaftaran = $("[name='nopendaftaran']").val();
        if (nopendaftaran == null || nopendaftaran == '') {
            var nopendaftaran = document.getElementById('nopendaftaran');
            var nopendaftaranValue = nopendaftaran.value.trim();
            if (nopendaftaranValue === '') {
                setErrorFor(nopendaftaran, 'No. Pendaftaran Tidak Boleh Kosong');
                return false;
            } else {
                setSuccessFor(nopendaftaran);
            }
        } else {
            var nopendaftaran = document.getElementById('nopendaftaran');
            setSuccessFor(nopendaftaran);
            alert(nopendaftaran);
        }
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
            var tujuanpemeriksaan = document.getElementById('tujuanpemeriksaan' + numtab);
            var tujuanpemeriksaanValue = tujuanpemeriksaan.value.trim();
            if (tujuanpemeriksaanValue === '') {
                setErrorFor(tujuanpemeriksaan, 'Tujuan Pemeriksaan Harus Dipilih');
                return false;
            } else {
                setSuccessFor(tujuanpemeriksaan);
            }
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