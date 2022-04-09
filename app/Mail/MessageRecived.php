<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageRecived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Mensaje Recibido";
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mesg)
    {
        //
        $this->msg = $mesg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-recived');
    }
}
