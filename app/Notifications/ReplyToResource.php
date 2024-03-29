<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReplyToResource extends Notification
{
    use Queueable;

    protected $reply;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reply)
    {
        //
	$this->reply = $reply;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
	if($this->reply->resource_type == \App\Models\Thread::class) {
	    $message = $this->reply->owner->name . ' replied to the thread ' . $this->reply->resource->title . '.';
	} else {
	    $message = $this->reply->owner->name . ' replied to the ' . $this->reply->resource_type . ' [' . $this->reply->resource_id  . '] resource.';
	} 
	
        return [
            'message' => $message,
	    'link' => $this->reply->path(),
        ];
    }
}
