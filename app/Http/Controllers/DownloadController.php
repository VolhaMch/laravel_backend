<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download()
    {
        // Укажите нужный формат файла
        $filePath = public_path(  'CV_Machys.pdf');


            return response()->download($filePath);



    }
}
