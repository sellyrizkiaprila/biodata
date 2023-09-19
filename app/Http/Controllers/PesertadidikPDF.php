<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\PesertadidikM;

class PesertadidikPDF extends Controller
{
    public function pdf(){
        $pesertaM = PesertadidikM::all();
        $pdf = PDF::loadview('pesertadidik_pdf', 
        ['pesertaM' => $pesertaM]);
        return $pdf->stream('pesertadidik.pdf');
    }
}