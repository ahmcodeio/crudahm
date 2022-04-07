<?php

namespace App\Http\Livewire\Crud;

use App\Models\Student;


use Livewire\Component;

class DeleteStudent extends Component
{

    public $deleted;

    public $canceled;

    public function cancel()

    {
        
    }

    // public function confirm()
    // {
    //     $this->delete;
    // }


    public function delete ($id)
    {
        $this->deleted=Student::where('id', $id)->first();

        $student = Student::where('id', $id)->first();
        $student->delete();
        
        session()->flash('message', 'Student has been deleted successfully');
    }


    // public function destroy($id)
    // {
    //   $student = Student::find($id);
  
    //   $student->delete();
  
    //   return response()->json([
    //     'message' => 'Data deleted successfully!'
    //   ]);
    // }
  
  



    public function render()
    {
        return view('livewire.crud.delete-student');
    }
}
