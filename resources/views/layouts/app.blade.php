
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Employee CRUD')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datepicker/jquery-ui.min.css') }}" rel="stylesheet">
    {{-- sweet alert css --}}
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

 
  </head>
 
  
  

    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
         @yield('content')
    </div>

  <body>
   
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>
    <script src="{{asset('datepicker/jquery-ui.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      $(function(){
        $("#datepicker").datepicker({
          dateFormat:"dd-mm-yy",
          changeMonth:true,
          changeYear:true,
        });
      })
    </script>
   
      @yield('script')

  </body>
  </html>
  