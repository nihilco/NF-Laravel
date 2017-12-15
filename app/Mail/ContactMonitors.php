<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\ContactRequest;

class ContactMonitors extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $request)
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
        return $this->subject($this->request['name'] . ' Contacted You')
	            ->from(['No-Reply | Maze & Stone' => 'no-reply@mazestonelaw.com'])
	            ->markdown('emails.contact-monitors.html')
	            ->text('emails.contact-monitors.text');
    }
}
