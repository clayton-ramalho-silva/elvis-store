<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailList;

class SendMailList extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subject;
    public $elvismail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $subject, $elvismail)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->elvismail = $elvismail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->subject);
        $this->to($this->user->email, $this->user->name);
        return $this->view('emails.info', [
            'user' => $this->user,
            'elvismail' => $this->elvismail

        ]);
    }
}
