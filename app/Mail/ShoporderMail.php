<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShoporderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $Shop;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Shop)
    {
        return $this->Shop=$Shop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('porozheshop@gmail.com')->view('mail.shoporder-mail');
    }
}
