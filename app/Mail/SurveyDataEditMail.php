<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SurveyDataEditMail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url_Name)
    {
        $this->name = $url_Name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Лантуун Дохио')->view('email.survey_email')->with('data', $this->name);
    }
}
