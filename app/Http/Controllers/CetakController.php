<?php

namespace App\Http\Controllers;

use App\Models\Datdiv;
use App\Models\datpeg;
use App\Models\Datpeng;
use App\Models\Rekdat;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use TCPDF;
use Illuminate\Http\Request;


class CetakController extends Controller
{
    public function cetakToPdf($table, $view)
    {
        switch ($table) {
            case 'Datadivisi':
                $data = Datdiv::all();
                break;
            case 'Datapegawai':
                $data = datpeg::all();
                break;
            case 'Datapengirim':
                $data = Datpeng::all();
                break;
            case 'User':
                $data = User::all();
                break;
            default:
                $data = Rekdat::all();
                break;
        }


        // Membuat objek Dompdf
        $dompdf = new Dompdf();

        // Mengatur opsi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('size', 'A4');
        $dompdf->setOptions($options);

        // Menghasilkan HTML yang akan dicetak ke PDF
        $html = view("cetak/" . $view, compact('data'))->render();

        // Memasukkan HTML ke dalam Dompdf
        $dompdf->loadHtml($html);

        // Merender HTML ke PDF
        $dompdf->render();

        // Mengirimkan PDF sebagai response ke browser
        $dompdf->stream('data_user.pdf', ['Attachment' => false]);
    }

    public function cetakLangsung($table, $view)
    {
        switch ($table) {
            case 'Datadivisi':
                $data = Datdiv::all();
                $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
                break;
            case 'Datapegawai':
                $data = datpeg::all();
                $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
                break;
            case 'Datapengirim':
                $data = Datpeng::all();
                $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
                break;
            case 'User':
                $data = User::all();
                $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
                break;
            default:
                $data = Rekdat::all();
                $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
                break;
        }

        // Membuat objek TCPDF

        // Menyiapkan halaman
        $pdf->AddPage();

        // Menghasilkan HTML yang akan dicetak
        $html = view("cetak/" . $view, compact('data'))->render();

        // Menulis HTML ke dalam PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF langsung ke browser
        $pdf->Output('data_user.pdf', 'I');
    }
}
