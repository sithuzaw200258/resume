<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('resume',compact('user'));
    }

    public function viewPdf() {
        $user = Auth::user();
        return view('resume_pdf',compact('user'));
    }

    public function download() {
        $user = Auth::user();
        $pdf = Pdf::loadView('resume_pdf', compact('user'));
        return $pdf->download('resume.pdf');
    }
}
