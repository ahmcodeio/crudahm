<?php


namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithFileUploads;


class EditStudentComponent extends Component

{
    use WithFileUploads;

    
    public $updatestudent, $update, $birth, $image;

    public $student, $student_id, $name, $email, $phone, $student_edit_id;
    
    public function update ()
    {
        

    }

    public function mount($id)
    {
        $student= Student::find($id);

    
        $this->student = $student;
        $this->fill([
            'student_id' => $this->student->student_id,
            'name' => $this->student->name,
            'email' => $this->student->email,
            'phone' => $this->student->phone,
            'image' => $this->student->image,
            'birth' => $this->student->birth,
        ]);
    }

    public function updatestudent()
    {

        
        $validatedata = $this->validate([
            'student_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'birth' => 'required'
            
        ]);

        $data = $validatedata;

        $studentData = [
            'student_id' => $data['student_id'],
            'name'=> $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'image' => $data['image'],
            'birth' => $data['birth']

        ];

        $this->student->update($studentData);

       

        //
        // $this->image->update($studentData);
        //
        $datavalidate = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'birth' => 'required',



        ]);

        

        //this that was original code
        
        //

     

        

        //this for testing image update
        $this->student->image = $this->image->store('image');

        $this->student-> save();


        // $this->image->update('image');
        // $this->student->update();

        //
        // Sudah selesai

        session()->flash('message', 'Student has been updated successfully');

    }

    public function render()
    {

        return view('livewire.crud.edit-student-component');
    }
}

