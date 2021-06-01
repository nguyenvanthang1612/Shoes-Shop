<?php

namespace App\Mail;

use App\Models\SubcribeEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubcribeMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $subcribe;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SubcribeEmail $subcribe)
    {
        $this->subcribe = $subcribe;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('frontend.mail.sendSubcribeMail')
                    ->with([
                        'name' => $this->subcribe->name,
                        'email' => $this->subcribe->email,
                    ]);
    }
}
