



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
     

        {{-- <form >
            <input type="datetime-local" class="form-control">
        </form> --}}
    
    
    
    
            <link href="dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
            <script src="dist/js/datepicker.min.js"></script>
    
            <!-- Include English language -->
            <script src="dist/js/i18n/datepicker.en.js"></script>
    
        

        {{-- bootstrap css --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    
    @livewireStyles
    </head>
<body>

    <livewire:crud.add-student-component /> 



    {{-- bootstrap script --}}
{{-- 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> --}}

    <script>
                // Initialization
        $('#datepickerlink').datepicker([options])
        // Access instance of plugin
        $('#datepickerlink').data('datepicker')
    </script>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

    @livewireScripts
</body>


</html>