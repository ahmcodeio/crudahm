<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <title>AHM</title>


        {{-- bootstrap css --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script> 





    @livewireStyles
    </head>
<body>

    <livewire:crud.index-component id="{{ request()->id }}" /> 

    
    <script>

       

        function confirmDelete(id) {
            const result = confirm('Do you want to delete ID:' + id + '?')

            
            if (result) {
                Livewire.emit('deleteconfirmed', id)

                console.log(confirmDelete);
            }
        }

    </script>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    

    @livewireScripts
</body>
</html>