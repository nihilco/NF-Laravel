<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\DonationRequest;

class DonationMonitors extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DonationRequest $request)
    {
        //
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->request['name'] . ' Made a Donation')
            //->from(['No-Reply | The Taraloka Foundation' => 'no-reply@taraloka.org'])
                    ->markdown('emails.donation-monitors.html')
                    ->text('emails.donation-monitors.text');
    }
}
