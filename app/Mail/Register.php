<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Register extends Mailable
{
    use Queueable, SerializesModels;

    protected $user_profile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_profile)
    {
        //

        $this->user_profile = $user_profile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('mail.register')->with([
                        'name' => $this->user_profile->name,
                        'lname' => $this->user_profile->lname,
                        'url'  => 'http://jkinnovation.in'
                    ]);
    }
}
