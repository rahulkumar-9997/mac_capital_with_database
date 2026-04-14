<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UnlistedSharesEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('frontend.mail.unlisted-shares-enquiry-mail')
		->from('maccapitalindia@gmail.com', 'MAC Capital Services (P) LTD') 
        ->subject($this->data['script_name'], $this->data['name']);
    }
}


