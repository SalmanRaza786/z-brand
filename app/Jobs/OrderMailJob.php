<?php

namespace App\Jobs;
use Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
       protected $details;

    public function __construct($details)
    {
        $this->details = $details;

    }


    public function handle()
    {
       //  Mail::to('zeebrandstore@gmail.com')->send(new \App\Mail\NewOrderNotifiction($this->details));
         Mail::to('salmanrazabwn@gmail.com')->send(new \App\Mail\NewOrderNotifiction($this->details));
    }
}
