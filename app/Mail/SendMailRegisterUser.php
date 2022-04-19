<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailRegisterUser extends Mailable
{
    use Queueable, SerializesModels;

 
    private $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Registro');
        $this->to($this->user['email'], $this->user['name']);
        return $this->from('victor--edu@gmail.com')->view('emails.register', [
            'user' => $this->user
        ]);
    }
}
