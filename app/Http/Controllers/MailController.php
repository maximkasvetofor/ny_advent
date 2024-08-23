<?php

namespace App\Http\Controllers;

use App\Mail\mailNotify;
use App\Models\Mails;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Repositories\DayRepository;
class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'subject' => 'advent.itcube',
            'body'=>'Вы подписались на "Хорошую" рассылку',
            'email' => $request->email,
            'type' => 'send',
             'csrf_token' => csrf_token()
        ];
        $email = $request->input('email');
        $existingMail = Mails::where('mail', $email)->first();
        if (!$existingMail) {
            Mail::to($request->email)->send(new mailNotify($data));
            return view('email.mailNotify', ['data' => $data]);
        }else {
            return response()->json(['error' => 'Почта уже подписанна на рассылку'], 409);
        }
    }
    public function __construct(protected DayRepository $dayRepository)
    {
    }
    public function addMail(Request $request)
    {
        $email = $request->input('email');
        Mails::create(['mail' => $email]);
        $data = [

            'subject' => 'advent.itcube',
            'email'=> $email,
            'type' => 'verify',
            'csrf_token' => csrf_token()
        ];
        Mail::to($email)->send(new mailNotify($data));
        $Days = $this->dayRepository->getAdvents();
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();

        return view('index', ['Days' => $Days, 'Count' => $Visit->Count]);
    }

    public function delete(Request $request)
    {

        $email = $request->input('email');
        $mail = Mails::where('mail', $email)->first();
        if ($mail) {
            $mail->delete();
        }
        $data = [
            'subject' => 'advent.itcube',
            'email'=> $email,
            'type' => 'delete',
            'csrf_token' => csrf_token()
        ];
        Mail::to($email)->send(new mailNotify($data));
        $Days = $this->dayRepository->getAdvents();
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();

        return view('index', ['Days' => $Days, 'Count' => $Visit->Count]);
    }


}
