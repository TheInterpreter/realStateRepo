<?php

namespace App\Notifications;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


class InboxMessage extends Notification
{
    use Queueable;

    protected $message;
    public function __construct(ContactFormRequest $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->subject(config('admin.name') . ", Notification from Instant Mobile House!")
            ->greeting('Information')
            ->from("mobilehouse@instantmobilehouse.com", "Instant Mobile House")
            ->line("---Contact Info---")
            ->line($this->message->name)
            ->line($this->message->email)
            ->line($this->message->city)
            ->line($this->message->state)
            ->line($this->message->Zip)
            ->line($this->message->phone)
            ->line("---Reason---")
            ->line($this->message->reason)
            ->line("---Manufactured Home---")
            ->line($this->message->homes)
            ->line("---Interested Floorplan---")
            ->line($this->message->address)
            ->line("---Interested Home---")
            ->line($this->message->address2)
            ->line("---Message---")
            ->line($this->message->message);
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
