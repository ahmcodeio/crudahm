<?php

namespace App\Http\Livewire\Crud;

// use App\Http\Livewire\Crud\EditStudentComponent;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;


use Livewire\Component;

class AddStudentComponent extends Component
{
    use WithFileUploads;


    public $student_id, $name, $email, $phone, $birth, $image, $user_id ;

    


    public function field()
    {
       
        $this->validateOnly( [
            'student_id' => 'required|unique:students',
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|numeric|unique:students',
            'image' => 'required|image|:students',
            'birth' => 'required|:students',

        ]);

        dd($this->image);

        if(!empty($this->image)){
            $this->image->store('public/image');

            dd($this->image);
        }

        $user_id = Auth::user()->id;

        $student = new Student();

        $student->student_id = $this->student_id;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->image = $this->image;
        $student->birth = $this->birth;

        $student->save();

        session()->flash('message', 'Student has been added successfully');

        $this->student_id = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->image = '';
        $this->birth = '';

       


    }

    

    public function storeStudent(){

      
       
        $this->validate([
            'student_id' => 'required|unique:students',
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|numeric|unique:students',
            'image' => 'required|unique:students',
            'birth' => 'required|:students',

             
        
             


        ]);
        //

       

        $user_id = Auth::user()->id;

        $student = new Student();

        $student->student_id = $this->student_id;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->image = $this->image;
        $student->birth = $this->birth;

        //

        // if(!empty($this->image)){
        //     $this->image->store('public/image');

        $student->user_id = $user_id;
        //

        $student->image = $this->image->store('image');

        $student->save();

        session()->flash('message', 'Student has been added successfully');

        $this->student_id = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->image = '';
        $this->birth = '';

        

    }

   

    public function render()
    {
        return view('livewire.crud.add-student-component');
    }
}
