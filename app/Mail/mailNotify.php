<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class mailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private $data = [];
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('advent.itcube@yandex.ru', 'advent itcube')
            ->subject($this->data['subject'])->view('email.mailNotify', ['data' => $this->data]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Notify',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.mailNotify',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
