<?php

namespace App\Http\Controllers;

use App\Mail\mailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'subject' => 'advent.itcube',
            'body'=>'Вы подписались на "Хорошую" рассылку'
        ];
        Mail::to($request->email)->send(new mailNotify($data));
        return view('email.mailNotify',['data'=>$data]);
    }

}
