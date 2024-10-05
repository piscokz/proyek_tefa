<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function build()
    {
        return $this->subject('Response to Your Inquiry')
                    ->view('emails.contact_response') // Buat view untuk email ini
                    ->with(['response' => $this->response]);
    }
}
