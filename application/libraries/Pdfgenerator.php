<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload dompdf nya
require_once 'dompdf-master/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdfgenerator
{
    public function generate($html, $filename = '', $paper = '', $orientation = '', $stream = TRUE)
    {
        $options = new Options();
        // $options->setChroot(base_url());
        $options->set('isRemoteEnabled', TRUE);
        $options->set('isHtml5ParserEnabled', TRUE);
        $options->set('enable_remote', TRUE);
        $options->set('isFontSubsettingEnabled', TRUE);
        $options->set('isPhpEnabled', TRUE);
        // $options->set('chroot', base_url());
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        file_put_contents('assets/img/cetakan/' . $filename,  $dompdf->output());
        // if ($stream) {
        //     $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
        // } else {
        //     return $dompdf->output();
        // }
    }
}
