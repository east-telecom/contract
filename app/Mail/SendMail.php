<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $title;
    public $content_array;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url, $title, $content_array)
    {
        $this->url = $url;
        $this->title = $title;
        $this->content_array = $content_array;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('sendMailView');
    }
}
