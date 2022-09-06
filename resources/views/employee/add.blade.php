@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
      <div class="col-md-6 m-auto">
          <div class="card mt-5 py-5">
              <div class="card-header">
                  <h2>Employee Form</h2>
                  {{-- <a href="#" id="alert_id"> Sweet Alert</a> --}}
              </div>
               
              <div class="card-body">
                <form  method="POST" autocomplete="off" id="empForm"> 
                  @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control"  name="name" required >
                      
                    </div>

                    <div class="mb-3">
                      <label for="code" class="form-label"> Code<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="code" name="code" required >
                    
                  </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        
                    </div>
                    <div class="mb-3">
                      <label for="datepicker" class="form-label">Joining Date<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="datepicker"  name="joining_date" required>
                     
                  </div>
                  <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="mobile" name="mobile" required >
                   
                </div>
                  
                    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div> 
<script>
 
  $(document).ready(function(){
      $("#submitBtn").click(function(){   
            
          $("#empForm").submit(); 
      });
  });
  </script>
@section('script')

  @if(session('success'))
    {{-- <script>
        Swal.fire(
        'Good job!',
        '{{session('success')}}',
        'success'
      )
    </script> --}}
  @endif
@endsection

{{-- <script>
 
$(document).ready(function(){
    $("#submitBtn").click(function(){   
          
        $("#empForm").submit(); 
    });
});
</script> --}}


