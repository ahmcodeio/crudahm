<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Crud\IndexComponent;
use Illuminate\Http\Request;
use App\Students;
use Illuminate\View\Component;
use App\Http\Livewire\Crud\DeleteStudent;


class StudentsController extends Controller
{
    //

    public function students(){
        return view ('welcome2');
    }

    public function addstudents(){
        return view('addstudents');
    }

    public function editstudents()
    {
        return view('editstudents');
    }


    public function delete()
    {
        return view('deletestudent');
    }


}
