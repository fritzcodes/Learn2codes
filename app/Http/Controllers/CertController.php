<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;



class CertController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'My PDF Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ];

        $pdf = Pdf::loadView('frontend.cert')->setPaper('a4', 'landscape');
      
        // Edit the PDF if needed
        // Example: $pdf->getDomPDF()->getCanvas()->text(72, 144, 'Edited text');

        return $pdf->download('example.pdf');
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
