<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Appointment;

class PdfController extends Controller
{
    public function criaPdf(){
    
        $funcionario = Auth::user()->id;
        $dataHora = now()->format('d/m/Y H:i:s');
        $appointments = Appointment::all();

        $pdf = Pdf::loadView('pdf.pdf-template', compact('appointments', 'funcionario', 'dataHora'));

        return $pdf->setPaper('A4')->stream('relatorioConsultas');
    }
}
