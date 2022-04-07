<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class reminderdate extends Notification
{
    use Queueable;

    private $studentData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($studentData)
    {
        //
        $this->studentData= $studentData;
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

        // return $this->view('livewire.crud.reminderdate');


        // return (new MailMessage)
        //             ->line($this->studentData['body'])
        //             ->action($this->studentData['studentText'],
        //             $this->studentData['url'])
        //             ->line($this->studentData['Thank you for using our application!']);
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
