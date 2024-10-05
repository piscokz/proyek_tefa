<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactResponseMail extends Mailable
{
    public $contact;
    public $response;

    public function __construct(Contact $contact, $response)
    {
        $this->contact = $contact;
        $this->response = $response;
    }

    public function build()
    {
        return $this->view('emails.contact_response')
                    ->with([
                        'contactName' => $this->contact->name,
                        'response' => $this->response,
                    ]);
    }
}
