{{-- <div> --}}
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    {{-- <h1>check edit</h1> --}}


    

{{-- </div> --}}



<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
{{-- 

    <h1>apakah akan tampil?</h1> --}}
        
    <div>

        {{-- <h1>add students</h1> --}}
    
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Student</h5>
                            <a href="{{ route('students') }}" class="btn btn-sm btn-primary" style="float:right;">All Students</a>
                        </div>

    
                        <div class="card-body"> 
                            @if (session()->has('message'))
                                <div class="alert alert-success text-center">{{ session ('message') }}</div>
                                
                            @endif

                            <form wire:submit.prevent="updatestudent">
                                <div class="form-group">
                                    <label for="student_id">Student ID</label>
                                    <input type="number"  name="student_id" wire:model="student_id" class="form-control" >
                                    
                                    {{-- this is  validation --}}
                                    @error('student_id')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                              <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" wire:model="name"/>
                                    {{-- this is  validation --}}
                                    @error('name')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" wire:model="email"/>
                                    {{-- this is  validation --}}
                                    @error('email')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control"  wire:model="phone"/>
                                    {{-- this is  validation --}}
                                    @error('phone')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control"  wire:model="image"/>
                                    {{-- this is  validation --}}
                                    @error('image')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="birth">Birth</label>
                                    <input type="datetime" class="form-control"  wire:model="birth"/>
                                    {{-- this is  validation --}}
                                    @error('birth')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-sm w-50">Update Student</button>
                                </div>

                                


                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                                

                        <script>
                         flatpickr("input[type='datetime']", {});

                        </script>


                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    
    </div>


    </div>


</div>
