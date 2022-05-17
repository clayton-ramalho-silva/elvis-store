<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


class SendMailList implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $user;
    public $subject;
    public $elvismail;

    /**
     * Create a new job instance.
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
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Mail::send(new \App\Mail\SendMailList($this->user, $this->subject, $this->elvismail));
    }
}
