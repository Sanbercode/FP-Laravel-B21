<?php

namespace App\Http\Controllers;

use App\Buku;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function cetak_pdf($id){
        $post = Buku::find($id);
        $pdf = PDF::loadview('partials.post_pdf', compact('post'));
        return $pdf->download($post->judul.'.pdf');
    }
}
