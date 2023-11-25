<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index() {
        $data['email'] = auth()->user()->email;
        $data['title'] = "Report Catatan Makanan";
    }
}
