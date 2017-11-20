<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    use Queueable;
    protected $my_notification; 

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
         $this->my_notification = $msg; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {        
        return $this->toTelegram();
    }
    
    public function toTelegram()
    {
        $url = 'https://integram.org/c0yciNXebPH';
        $data = array('text' => 'Olá Admin Caveiras, são: ' . date('d/m/Y H:i') . ' <br>' . $this->my_notification);
        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\n",
                'method' => 'POST',
                'content' => json_encode($data),
            )
        );

        $context = stream_context_create($options);
        return file_get_contents($url, false, $context);
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
        return [
            //
        ];
    }
}
