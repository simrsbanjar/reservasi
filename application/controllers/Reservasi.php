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
        // $this->API = "http://172.16.0.3/wg-rsubanjar";
        $this->API = "http://localhost/wg-rsubanjar";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
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
        $parm = ['KdPropinsi' => "" . $propinsi . ""];

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
        $parm = ['KdKota' => "" . $kodekota . ""];

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
        $parm = ['KdKecamatan' => "" . $kodekecamatan . ""];

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
        $norm = $this->input->post('nocm');
        $tgllahir = $this->input->post('tgllahir');
        // $norm = '386123'; //'417191';
        // $tgllahir = '1961-03-15'; //'1991-04-04';

        $token     =  $this->GetToken();
        $url = $this->API . '/getdatapasienbynocm';
        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $parm =  ['nocm' => "" . $norm . "", 'tgllahir' => "" . $tgllahir . ""];
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
                'tgllahir' => $response->tgllahir,
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
}
