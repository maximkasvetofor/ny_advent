<?php

namespace App\Mail;

use App\Models\Visit;
use App\Repositories\DayRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class mailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];


    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $view = match ($this->data['type']) {
            'send' => 'email.mailNotify',
            'verify' => 'email.verifyEmail',
            default => 'email.deleteMail',
        };

        $Visit = Visit::count(); // retrieve the visit count instead of creating a new record

        return $this->from('advent.itcube@yandex.ru', 'advent itcube')
            ->subject($this->data['subject'])
            ->view($view, ['data' => $this->data]);
    }
}
