<?php

namespace ELSENOSY\S3GAuthentication\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class S3gSendInvitation extends Mailable
{
    use Queueable, SerializesModels;
    private $code;
    private $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $url)
    {
        $this->code = $code;
        $this->url  = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('S3GAuthentication::emails.invitation')
                    ->with(['code' => $this->code, 'url' => $this->url]);
    }
}
