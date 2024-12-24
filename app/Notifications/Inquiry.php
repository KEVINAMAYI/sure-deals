<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Inquiry extends Notification implements ShouldQueue
{
    use Queueable;

    public $sender_email;
    public $sender_name;
    public $subject;
    public $content;


    /**
     * Create a new notification instance.
     */
    public function __construct($sender_name, $sender_email, $subject, $content)
    {
        $this->subject = $sender_name;
        $this->subject = $sender_email;
        $this->subject = $subject;
        $this->subject = $content;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Password Updated')
            ->view('emails.inquiry', [
                'userName' => 'SURE DEALS',
                'sender_name' => $this->sender_name,
                'sender_email' => $this->sender_email,
                'subject' => $this->subject,
                'content' => $this->content
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
