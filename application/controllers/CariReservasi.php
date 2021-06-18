<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CariReservasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('CariReservasi');
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

    function GetBookingPasienbynoreg($nopendaftaran)
    {
        $token     =  $this->GetToken();

        $url = $this->API . '/getdataregistrasibynoreg';
        $parm =  ['nopendaftaran' => "" . $nopendaftaran . ""];

        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
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
            $estimasidilayani   = $this->time_convert($response->estimasidilayani);
            if ($response->jenisantrean == '1') {
                $jenisantrian = 'Antrian Registrasi';
            } else {
                $jenisantrian = 'Antrian Poli';
            }
            $data['hasil'] = array(
                'kodebooking' => $response->kodebooking,
                'nomorantrean' => $response->nomorantrean,
                'nopendaftaran' => $response->nopendaftaran,
                'jenisantrean' => $jenisantrian,
                'estimasidilayani' => $estimasidilayani,
                'namapoli' => $response->namapoli,
                'namadokter' => $response->namadokter,
                'nocm' => $response->nocm,
                'statuspasien' => $response->statuspasien
            );
        }

        $data['codedata'] = array(
            'code' => $metadata->code,
            'message' => $metadata->message
        );

        return $data;
    }

    function GetBookingPasienbynobooking($nopendaftaran)
    {
        $token     =  $this->GetToken();

        $url = $this->API . '/getdataregistrasibykdbooking';
        $parm =  ['kdbooking' => "" . $nopendaftaran . ""];

        $headers = array(
            'x-token:' . $token . "",
        );

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
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
            $estimasidilayani   = $this->time_convert($response->estimasidilayani);
            if ($response->jenisantrean == '1') {
                $jenisantrian = 'Antrian Registrasi';
            } else {
                $jenisantrian = 'Antrian Poli';
            }
            $data['hasil'] = array(
                'kodebooking' => $response->kodebooking,
                'nomorantrean' => $response->nomorantrean,
                'nopendaftaran' => $response->nopendaftaran,
                'jenisantrean' => $jenisantrian,
                'estimasidilayani' => $estimasidilayani,
                'namapoli' => $response->namapoli,
                'namadokter' => $response->namadokter,
                'nocm' => $response->nocm,
                'statuspasien' => $response->statuspasien
            );
        }

        $data['codedata'] = array(
            'code' => $metadata->code,
            'message' => $metadata->message
        );

        return $data;
    }

    function GetBookingPasien()
    {
        $nopendaftaran = $this->input->post('nopendaftaran');
        // $nopendaftaran = '2007140019';

        $data = $this->GetBookingPasienbynoreg($nopendaftaran);
        if ($data['codedata']['code'] != '200') {
            $data = $this->GetBookingPasienbynobooking($nopendaftaran);
        }

        echo json_encode($data);
    }
}
