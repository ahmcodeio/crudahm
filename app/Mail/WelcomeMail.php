<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class WelcomeMail extends Mailable
{
    // public $user, $image;

  


    public $data, $user_id, $user, $students;

    

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($students)
    {
        $this->data = $students;

     

      

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        
        dd($this->data);
        return $this->view('emails.welcome')->with('students', $this->data);

       

    }
}
