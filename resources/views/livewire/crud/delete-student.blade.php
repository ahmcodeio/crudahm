<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}


   {{-- <script>
       alert('cek');
   </script> --}}

    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
    <button type="button" class="btn btn-danger" wire:click="delete">Oke</button>
    
    <h1>{{ $deleted }}</h1> 

  
  <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

           <img src="/asset/sukses.png" width="" height="" alt="...">
        </div>
      </div>
    </div>
  </div>





</div>







  {{-- <form  method="post">
        <div class="modal-body">
          
           
            <h5 class="text-center">Are you sure you want to delete {{ $student->id }} ?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
        </div>
    </form>

  --}}