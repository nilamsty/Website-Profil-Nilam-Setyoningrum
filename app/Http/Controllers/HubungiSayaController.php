<?php

namespace App\Http\Controllers;

use App\Mail\HubungiSayaMail;
use Illuminate\Http\Request;
use Mail;

class HubungiSayaController extends Controller
{
    public function index()
    {
        return view('hubungisaya', [
            "title" => "Hubungi Saya"
        ]);
    }

    public function kirimEmail(Request $request)
    {
        $details =[
            'nama' => $request->nama,
            'email' => $request->email,
            'nomorhp' => $request->nomorhp,
            'pesan' => $request->pesan
        ];

        Mail::to('nilamsetyoningrum4@gmail.com')->send(new HubungiSayaMail($request));
        return back()-with('pesan_dikirim', 'Pesan Anda telah dikirim dengan sukses!');
    }
}
