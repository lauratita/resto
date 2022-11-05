<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GoEmail extends Mailable
{
    public $emailVer;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailVer)
    {
        $this->emailVer = $emailVer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('yeftaocta04@gmail.com')
                    ->subject('Order Verification')
                    ->view('homepage.goEmail');
    }
}