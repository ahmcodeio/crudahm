<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Livewire\Component;



class Notif extends Model
{
    use HasFactory;

    protected $table='students';



}

// public function nnn($id)
// {
    
//     $student = Student::where('id', $id)->first();

//     return $student;



// };


