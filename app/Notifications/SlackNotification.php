<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;    //追記

class SlackNotification extends Notification
{
    use Queueable;

    protected $channel;  //追記
    protected $message; //追記
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this->channel = env('SLACK_CHANNEL'); //追記
        $this->message = $message; //追記
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];    //編集
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\SlackMessage
     */
    public function toSlack($notifiable) //追記
    {
        return (new SlackMessage)
            ->content($this->message);

    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

