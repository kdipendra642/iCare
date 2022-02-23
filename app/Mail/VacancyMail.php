<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VacancyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

   
    public function __construct($details)
    {
        $this->details = $details;
    }

   
    public function build()
    {
        return $this->subject('Job Application')->view('application-template');
        // return $this->view('view.name');
    }
}
