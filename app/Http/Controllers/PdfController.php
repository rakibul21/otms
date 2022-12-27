<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function download()
    {
        $pdf = PDF::loadView('admin.enroll.invoice', [
            'title' => 'CodeAndDeploy.com Laravel Pdf with Image Example',
            'description' => 'This is an example Laravel pdf with Image tutorial.',
            'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
        ]);

        return $pdf->download('sample-with-image.pdf');
    }
}
