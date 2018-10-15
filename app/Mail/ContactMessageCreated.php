<?php

namespace laracarte\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use laracarte\Models\Message;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;
    //public $name;
    //public $email;
    //public $message;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msg)
    {
       // $this->name = $name;
       // $this->email = $email;
        //$this->message = $message;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
