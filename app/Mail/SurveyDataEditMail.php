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
    public function __construct(String $nameUser)
    {
        $this->name = $nameUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->name) {
            return $this->subject('Лантуун Дохио')->view('email.survey_email')->with('name', $this->name);
        } else {
            return redirect()->action('${App\Http\Controllers\HomepageController@index}');
        }
    }
}
