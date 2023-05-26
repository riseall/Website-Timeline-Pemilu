<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function administrasi(){
        return view("pelanggaran.administrasi");
    }
    public function pidana(){
        return view("pelanggaran.pidana");
    }
    public function etik(){
        return view("pelanggaran.etik");
    }
    public function peraturan(){
        return view("pelanggaran.peraturan");
    }
}
