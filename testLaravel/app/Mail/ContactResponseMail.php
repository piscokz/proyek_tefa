<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;
    protected $response;

    // Update the constructor to accept the correct types
    public function __construct(Contact $contact, string $response)
    {
        $this->contact = $contact;
        $this->response = $response;
    }

    public function build()
    {
        return $this->view('emails.contactResponse')
                    ->with([
                        'contactName' => $this->contact->name,
                        'responseMessage' => $this->response,
                    ]);
    }
}
