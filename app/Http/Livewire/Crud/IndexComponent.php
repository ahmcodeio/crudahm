<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Student;
use App\Http\Livewire\Crud\EditStudentComponent;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class IndexComponent extends Component
{

    public $search, $delete, $image, $confirmdel, $user_id;
    public $sure = null;

    protected $queryString = [
        'search'
    ];


    protected $listeners = ['deleteconfirmed' => 'deleteaccount'];


    public function deleteaccount($id)
    {

        $student = Student::where('id', $id)->first();
        $student->delete();
        session()->flash('message', 'Student has been deleted successfully');
    }


    public $studentconfirmed = null;

    public function confirm($studentconfrim)
    {
        $this->studentconfirmed = $studentconfrim;

        $this->dispatchBrowserEvent('showconfirm');
    }

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $user_id = Auth::user()->id;

        $students = Student::where('user_id', $user_id);

        $students->when($this->search, function ($query, $search) use ($user_id) {
            
            return  $query->where('name', 'like', "%$search%",)
                        ->orWhere('email', 'like', "%$search%")
                        ->Where('user_id', '=', $user_id)
                        ->orWhere('birth', 'like', "%$search%")
                        ->Where('user_id', '=', $user_id)
                        ->orWhere('phone', 'like', "%$search%")
                        ->Where('user_id', '=', $user_id)
                        
                ;
        });

        return view('livewire.crud.index-component', [
            'students' => $students->paginate(5),
        ]);


        return view('livewire.crud.index-component', [
            'students' => Student::where('user_id', $user_id)->get()


            

        ]);

    }

    public function editstudent()
    {

        dd('cek');
        return view('livewire.crud.index-component', [
            'editstudents' => Student::find($this->id),
        ]);
    }


}
