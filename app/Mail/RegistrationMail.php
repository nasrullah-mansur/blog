<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user_info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_info)
    {
        return $this->user_info = $user_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.register')->subject('Registration confirmation')->with('user_info', $this->user_info);
    }
}
