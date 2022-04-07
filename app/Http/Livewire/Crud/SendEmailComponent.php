<?php

// namespace App\Http\Livewire;

namespace App\Http\Livewire\Crud;


use App\Models\Student;
use App\Http\Livewire\Crud\EditStudentComponent;

use Symfony\Contracts\Service\Attribute\Required;


use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Mail;
class SendEmail extends Component
{

// public function cek ()
// {
//     $user = User::first();
//     Mail::to($user)->send(new WelcomeMail);

// }
    
    public function send()
    {
        $student= Student::find('birth')->get();

    }


    public function render()
    {

        
       // $user = User::first();
        // Mail::to($user);

        return view('livewire.crud.send-email');
    }
}
