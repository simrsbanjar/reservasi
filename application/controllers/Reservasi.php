<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('Reservasi');
    }

    function __construct()
    {
        parent::__construct();
        // $this->API = "http://simrs.rsukotabanjar.co.id/ws-rsubanjar";
        $this->API = "http://172.16.0.3/wg-rsubanjar";
        // $this->API = "http://localhost/wg-rsubanjar";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function time_convert($timestamp)
    {
        // $timestamp = '1597078800';
        return date('d-m-Y H:m', $timestamp / 1000);
    }

    function hitung_umur()
    {
        $birthDate = new DateTime($this->input->post('tgllahir'));
        $today = new DateTime("today");
        if (($birthDate > $today) || ($birthDate < new DateTime("1900-01-01"))) {
            $y = '0';
            $m = '0';
            $d = '0';
        } else {
            $y = $today->diff($birthDate)->y;
            $m = $today->diff($birthDate)->m;
            $d = $today->diff($birthDate)->d;
        }
        $data = array(
            'tahun' => $y,
            'bulan' => $m,
            'hari' => $d

        );

        echo json_encode($data);
    }

    function GetToken()
    {
        $parm = array(
            'username'       =>  'registrasionline',
            'password'      =>  'rsu@b4nj4r'
        );

        $hasil = json_decode($this->curl->simple_post($this->API . '/gettoken', $parm, array(CURLOPT_BUFFERSIZE => 10)));
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $data   = array(
            'response' => $response,
            'metadata' => $metadata
        );

        // jika respon 200/sukses maka tidak perlu di balikan namun jika gagal maka balikan gagalnya 
        return $data['response']->token;
    }

    function GetRujukanAsal()
    {
        $token     =  $this->GetToken();
        $url = $this->API . '/getlistrujukanasal';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        // $data = ['name' => 'Hardik', 'email' => 'itsolutionstuff@gmail.com'];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );

        // $lines = file(base_url("assets/file/rujukanasal.txt"));
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdRujukanAsal' => $line->Kode,
                'RujukanAsal' => $line->Nama
            );
        }
        echo json_encode($data);
    }

    function GetPropinsi()
    {
        $token     =  $this->GetToken();
        $url = $this->API . '/getlistpropinsi';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        // $data = ['name' => 'Hardik', 'email' => 'itsolutionstuff@gmail.com'];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );

        // $lines = file(base_url("assets/file/rujukanasal.txt"));
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdPropinsi' => $line->Kode,
                'NamaPropinsi' => $line->Nama
            );
        }
        echo json_encode($data);
    }

    function GetKota()
    {
        $propinsi = $this->input->post('propinsi');

        $token     =  $this->GetToken();
        $url = $this->API . '/getlistkota';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $parm = ['kdPropinsi' => "" . $propinsi . ""];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdKotaKabupaten' => $line->Kode,
                'NamaKotaKabupaten' => $line->Nama
            );
        }
        echo json_encode($data);
    }

    function GetKecamatan()
    {
        $kodekota = $this->input->post('kota');

        $token     =  $this->GetToken();
        $url = $this->API . '/getlistkecamatan';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $parm = ['kdKota' => "" . $kodekota . ""];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdKecamatan' => $line->Kode,
                'NamaKecamatan' => $line->Nama
            );
        }
        echo json_encode($data);
    }

    function GetKelurahan()
    {
        $kodekecamatan = $this->input->post('kecamatan');

        $token     =  $this->GetToken();
        $url = $this->API . '/getlistkelurahan';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $parm = ['kdKecamatan' => "" . $kodekecamatan . ""];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdKelurahan' => $line->Kode,
                'NamaKelurahan' => $line->Nama
            );
        }
        echo json_encode($data);
    }

    function GetPoli()
    {
        $tglregistrasi = $this->input->post('tglregistrasi');
        $token     =  $this->GetToken();
        $url = $this->API . '/getlistpoli';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $parm =  ['tanggalperiksa' => "" . $tglregistrasi . ""];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            $data[] = array(
                'KdPoli' => $line->Kode,
                'NamaPoli' => $line->Nama
            );
        }

        echo json_encode($data);
    }

    function GetCarabayar()
    {
        $token     =  $this->GetToken();
        $url = $this->API . '/getlistjenispasien';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        // $data = ['name' => 'Hardik', 'email' => 'itsolutionstuff@gmail.com'];

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $hasilakhir   = array(
            'response' => $response,
            'metadata' => $metadata
        );

        // $lines = file(base_url("assets/file/rujukanasal.txt"));
        $lines = $hasilakhir['response']->list;
        foreach ($lines as  $line) {

            // selain carabayar umum,bpjs pbi dan bpjs non pbi
            if ($line->Kode != '01' && $line->Kode != '14' && $line->Kode != '15') {
                $data[] = array(
                    'KdCarabayar' => $line->Kode,
                    'NamaCarabayar' => $line->Nama
                );
            }
        }
        echo json_encode($data);
    }

    function GetPasienLama()
    {
        $norm = substr(('000000' . $this->input->post('nocm')), -6);
        $tgllahir = $this->input->post('tgllahir');
        // $norm = '3279040404910001'; //'386123'; //'417191';
        // $tgllahir = '1991-04-04'; //'1961-03-15'; //'1991-04-04';

        $token     =  $this->GetToken();
        if (strlen(trim($norm)) == '6') {
            $url = $this->API . '/getdatapasienbynocm';
            /* Array Parameter Data */
            $parm =  ['nocm' => "" . $norm . "", 'tgllahir' => "" . $tgllahir . ""];
        } else {
            $url = $this->API . '/getdatapasienbynik';
            /* Array Parameter Data */
            $parm =  ['nik' => "" . $norm . "", 'tgllahir' => "" . $tgllahir . ""];
        }

        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $hasil = json_decode($result);
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $data['hasil'] = null;

        if ($metadata->code == '200') {
            if ($response->jeniskelamin == 'L') {
                $jeniskelamin = 'Laki-laki';
            } else {
                $jeniskelamin = 'Perempuan';
            };

            $data['hasil'] = array(
                'nocm' => $response->nocm,
                'namapasien' => $response->namapasien,
                'titlepasien' => $response->titlepasien,
                'tempatlahir' => $response->tempatlahir,
                'tgllahir' =>  date('d-m-Y', strtotime($response->tgllahir)),
                'jeniskelamin' => $jeniskelamin,
                'alamat' => $response->alamat,
                'propinsi' => $response->propinsi,
                'kota' => $response->kota,
                'kecamatan' => $response->kecamatan,
                'kelurahan' => $response->kelurahan,
                'rtrw' => $response->rtrw,
                'kodepos' => $response->kodepos,
                'notelp' => $response->notelp
            );
        }

        $data['codedata'] = array(
            'code' => $metadata->code,
            'message' => $metadata->message
        );

        echo json_encode($data);
    }

    function SimpanRegistrasi()
    {
        // $statuspasien = $this->input->post('statuspasien');
        // $tujuanperiksa = $this->input->post('tujuanperiksa');
        // $jenispasien = $this->input->post('jenispasien');
        // $namapasien = $this->input->post('namapasien');
        // $titlepasien = $this->input->post('titlepasien');
        // $tempatlahir = $this->input->post('tempatlahir');
        // $tgllahir = $this->input->post('tgllahir');
        // $jeniskelamin = $this->input->post('jeniskelamin');
        // $alamat = $this->input->post('alamat');
        // $propinsi = $this->input->post('propinsi');
        // $kota = $this->input->post('kota');
        // $kecamatan = $this->input->post('kecamatan');
        // $kelurahan = $this->input->post('kelurahan');
        // $rtrw = $this->input->post('rtrw');
        // $kodepos = $this->input->post('kodepos');
        // $nocm = substr(('000000' . $this->input->post('nocm')), -6);
        // $nomorkartu = $this->input->post('nomorkartu');
        // $nik = $this->input->post('nik');
        // $notelp = $this->input->post('notelp');
        // $tanggalperiksa = $this->input->post('tanggalperiksa');
        // $kodepoli = $this->input->post('kodepoli');
        // $kdrujukanasal = $this->input->post('kdrujukanasal');
        // $nomorreferensi = $this->input->post('nomorreferensi');
        // $jenisreferensi = $this->input->post('jenisreferensi');
        // $jenisrequest = $this->input->post('jenisrequest');
        // $polieksekutif = $this->input->post('polieksekutif');

        // $token     =  $this->GetToken();
        // $url = $this->API . '/registrasionline';
        // /* Array Parameter Data */
        // $parm =  [
        //     'statuspasien'          => "" . $statuspasien . "",
        //     'tujuanpemeriksaan'     => "" . $tujuanperiksa . "",
        //     'jenispasien'           => "" . $jenispasien . "",
        //     'namapasien'            => "" . $namapasien . "",
        //     'titlepasien'           => "" . $titlepasien . "",
        //     'tempatlahir'           => "" . $tempatlahir . "",
        //     'tgllahir'              => "" . $tgllahir . "",
        //     'jeniskelamin'          => "" . $jeniskelamin . "",
        //     'alamat'                => "" . $alamat . "",
        //     'propinsi'              => "" . $propinsi . "",
        //     'kota'                  => "" . $kota . "",
        //     'kecamatan'             => "" . $kecamatan . "",
        //     'kelurahan'             => "" . $kelurahan . "",
        //     'rtrw'                  => "" . $rtrw . "",
        //     'kodepos'               => "" . $kodepos . "",
        //     'nocm'                  => "" . $nocm . "",
        //     'nomorkartu'            => "" . $nomorkartu . "",
        //     'nik'                   => "" . $nik . "",
        //     'notelp'                => "" . $notelp . "",
        //     'tanggalperiksa'        => "" . $tanggalperiksa . "",
        //     'kodepoli'              => "" . $kodepoli . "",
        //     'kdrujukanasal'         => "" . $kdrujukanasal . "",
        //     'nomorreferensi'        => "" . $nomorreferensi . "",
        //     'jenisreferensi'        => "" . $jenisreferensi . "",
        //     'jenisrequest'          => "" . $jenisrequest . "",
        //     'polieksekutif'         => "" . $polieksekutif . ""
        // ];

        // // var_dump($parm);
        // // die;

        // $headers = array(
        //     'x-token:' . $token . "",
        // );

        // /* Init cURL resource */
        // $ch = curl_init($url);

        // /* pass encoded JSON string to the POST fields */
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $parm);

        // /* set the content type json */
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // /* set return type json */
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // /* execute request */
        // $result = curl_exec($ch);

        // /* close cURL resource */
        // curl_close($ch);
        // $hasil = json_decode($result);
        // $response = $hasil->response;
        // $metadata = $hasil->metadata;

        // $data['hasil'] = null;

        // if ($metadata->code == '200') {
        //     $estimasidilayani   = $this->time_convert($response->estimasidilayani);

        //     $data['hasil'] = array(
        //         "nomorantrean" => $response->nomorantrean,
        //         "kodebooking" => $response->kodebooking,
        //         "nopendaftaran" => $response->nopendaftaran,
        //         "nocm" => $response->nocm,
        //         "jenisantrean" => $response->jenisantrean,
        //         "estimasidilayani" => $estimasidilayani,
        //         "namapoli" => $response->namapoli,
        //         "namadokter" => $response->namadokter,
        //         "statuspasien" => $response->statuspasien
        //     );
        // }

        // $data['codedata'] = array(
        //     'code' => $metadata->code,
        //     'message' => $metadata->message
        // );

        // sementara dummy dulu untuk mmencoba nya dan hasil nya sukses

        $data['hasil'] = array(
            "nomorantrean" => "001",
            "kodebooking" => "2106230001",
            "nopendaftaran" => "2106240001",
            "nocm" => "012987",
            "jenisantrean" => "2",
            "estimasidilayani" => "2021-06-24 07:29",
            "namapoli" => "Poli Jantung",
            "namadokter" => "dr. Asep Sopandiana, Sp.JP., FIHA",
            "statuspasien" => "LAMA"
        );

        $data['codedata'] = array(
            'code' => '200',
            'message' => 'OK'
        );

        echo json_encode($data);
    }
}
