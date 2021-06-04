<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('Reservasi');
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
