
<div>
    {{-- The Master doesn't talk, he acts. --}}
    
    {{-- <h1>IndexComponent</h1> --}}

    <div class="cotainer">
        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Students</h5>
                        <a href="{{ route('addstudents') }}" class="btn btn-sm btn-primary" style="float:right;">Add New Student</a>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session()->has('message'))
                                <div class="alert alert-success text-center">{{ session('message') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <input type="text"  class="form-control" placeholder="Search..." wire:model="search" />
                                <br>
                            </div>
                            
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Birth</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <img src="  " alt="">

                            <tbody>
                                @if ($students->count() >0)
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->student_id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>

                                    
                                        <td>
                                            <img width="50" src="{{ asset('storage/' . $student->image) }} " alt="">

                                          
                                            
                                           </td>
                                        <td>{{ $student->birth }}</td>
                                        <td>
                                            


                                            <a href="{{ route ('editstudents', ['id' => $student->id]) }}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;">Edit</a>

                                            
                                             <a href="javascript:void(0)" onclick="confirmDelete({{ $student->id }})"
                                              class="btn btn-sm btn-danger"  style="padding: 1px 8px;">Delete</a>




                                            
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                    
                                @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;">No students found!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>

