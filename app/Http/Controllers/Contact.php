<?php

namespace App\Http\Controllers;

use Session;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function sendEmail(Request $req){
    if($this->isOnline()){
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'comments'=>$req->comments
        ];
        Mail::to('Bawasluoganilir.SS.08@gmail.com')->send(new ContactMail($data));

        return redirect('/#kontak')->with('success','Saran & Kritik berhasil terkirim');
    }else{
                return redirect('/#kontak')->withInput()->with('error', 'Cek kembali koneksi internet Anda');
    }
    }
    public function isOnline($site="https://google.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}

