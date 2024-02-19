<?php

namespace App\Notifications;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendStatusRequestEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
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
        $pdf = PDF::loadView('requests/pdfs/request_status');
        $mail = (new MailMessage)
            ->subject('Your Subject Here')
            ->greeting('Hello!' . $this->data['name'])
            ->line($this->data['body']);

        if (isset($this->data['status'])
            && $this->data['status'] == 'approved') {
            $mail->attachData($pdf->output(), 'request_status.pdf');
        }

        return ($mail);
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
