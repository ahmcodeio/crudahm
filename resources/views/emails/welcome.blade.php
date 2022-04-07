Welcome to my world!


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>AHM</title>

       
    @livewireStyles
</head>

<body>

  <div class="table table-bordered">
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
    {{$students}}
    <br>

    <tbody>
    

      {{-- {{ $students }} --}}
            {{-- <tr>
                <td>{{ $students->student_id }}</td>
                <td>{{ $students->name }}</td>
                <td>{{ $students->email }}</td>
                <td>{{ $students->phone }}</td>
                <td> --}}
                    {{-- {{ dd($students->image) }} --}}
                    {{-- --<img width="50" src="{{ asset('storage/' . $students->image) }}" alt="">--
                </td>
                <td>{{ $students->birth }}</td>
                <td>
                </td>
            </tr> --}}
    </tbody>
</div>





    @livewireScripts
</body>

</html>
