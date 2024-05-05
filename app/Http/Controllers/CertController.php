<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\ClaimedBadge;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Auth;

class CertController extends Controller
{
    public function generatePDF($id)
    {
        $data = ClaimedBadge::where('user_id', Auth::user()->id)
        ->where('language', $id)->first();
        $fullname = Auth::user()->fname . ' ' . Auth::user()->lname;
       return view('frontend.cert', compact('data', 'fullname'));
    }
    // public function editPDF()
    // {
    //     // Path to the existing PDF file
    //     $existingPdfPath = public_path('cert.pdf');
        
    //     // Create instance of FPDI
    //     $pdf = new \FPDI();
        
    //     // Add a page
    //     $pdf->AddPage();
        
    //     // Import the existing PDF
    //     $pdf->setSourceFile($existingPdfPath);
        
    //     // Import the first page of the existing PDF
    //     $tplIdx = $pdf->importPage(1);
        
    //     // Use the imported page as a template
    //     $pdf->useTemplate($tplIdx, 0, 0, 210);
        
    //     // Add your modifications
    //     $pdf->SetFont('Arial');
    //     $pdf->SetFontSize(12);
    //     $pdf->SetTextColor(0, 0, 0);
    //     $pdf->SetXY(20, 20);
    //     $pdf->Write(0, 'Edited content');
        
    //     // Output the modified PDF
    //     $pdf->Output('example_modified.pdf', 'D');
    // }
}
