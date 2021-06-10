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
        $this->API = "http://simrs.rsukotabanjar.co.id/ws-rsubanjar";
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
            'password'      =>  'RSU@B4nj4r'
        );

        $hasil = json_decode($this->curl->simple_post($this->API . '/gettoken', $parm, array(CURLOPT_BUFFERSIZE => 10)));
        $response = $hasil->response;
        $metadata = $hasil->metadata;

        $data   = array(
            'response' => $response,
            'metadata' => $metadata
        );
        // var_dump($data['metadata']->code);
        // die;
        echo json_encode($data);
    }

    function GetRujukanAsal()
    {
        $lines = file(base_url("assets/file/rujukanasal.txt"));
        foreach ($lines as  $line) {
            $kdrujukanasal = substr($line, 0, 2);
            $nmrujukanasal = substr($line, 3);

            $data[] = array(
                'KdRujukanAsal' => $kdrujukanasal,
                'RujukanAsal' => $nmrujukanasal
            );
        }
        echo json_encode($data);
    }

    function GetPropinsi()
    {
        $lines = file(base_url("assets/file/propinsi.txt"));
        foreach ($lines as  $line) {
            $kdpropinsi = substr($line, 0, 2);
            $nmpropinsi = substr($line, 3);

            $data[] = array(
                'KdPropinsi' => $kdpropinsi,
                'NamaPropinsi' => $nmpropinsi
            );
        }
        echo json_encode($data);
    }

    function GetKota()
    {
        $propinsi = $this->input->post('propinsi');
        $lines = file(base_url("assets/file/kota.txt"));
        foreach ($lines as  $line) {
            $kdpropinsi = substr($line, 0, 2);
            $kdkodya = substr($line, 3, 4);
            $nmkodya = substr($line, 8);

            if ($propinsi == $kdpropinsi) {
                $data[] = array(
                    'KdKotaKabupaten' => $kdkodya,
                    'NamaKotaKabupaten' => $nmkodya
                );
            };
        }
        echo json_encode($data);
    }

    function GetKecamatan()
    {
        $kodekota = $this->input->post('kota');
        $lines = file(base_url("assets/file/kecamatan.txt"));
        foreach ($lines as  $line) {
            $kdkota = substr($line, 0, 4);
            $kdkecamatan = substr($line, 5, 6);
            $nmkecamatan = substr($line, 11);

            if ($kodekota == $kdkota) {
                $data[] = array(
                    'KdKecamatan' => $kdkecamatan,
                    'NamaKecamatan' => $nmkecamatan
                );
            };
        }
        echo json_encode($data);
    }

    function GetKelurahan()
    {
        $kodekecamatan = $this->input->post('kecamatan');
        $lines = file(base_url("assets/file/kelurahan.txt"));
        foreach ($lines as  $line) {
            $kdkecamatan = substr($line, 0, 6);
            $kdkelurahan = substr($line, 7, 9);
            $nmkelurahan = substr($line, 17);

            if ($kodekecamatan == $kdkecamatan) {
                $data[] = array(
                    'KdKelurahan' => $kdkelurahan,
                    'NamaKelurahan' => $nmkelurahan
                );
            };
        }
        echo json_encode($data);
    }
}
