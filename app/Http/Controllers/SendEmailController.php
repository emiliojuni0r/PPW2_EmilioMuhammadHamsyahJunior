<?php

namespace App\Http\Controllers;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class SendEmailController extends Controller
{
    public function index()
    {
        // $content = [
        //     'name' => 'Ini Nama Pengirim',
        //     'subject' => 'Ini Subject email',
        //     'body' => 'Ini adalah isi email yang dikirim dari laravel 10'
        // ];

        // Mail::to('emiliojunior645@gmail.com')->send(new SendEmail($content));
        // return "Email berhasil dikirim";

        return view("emails.kirim-email");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        dispatch(new SendEmailJob($data));

        return redirect()->route('kirim-email')->with('success','Email Berhasil dikirim');
    }
}
