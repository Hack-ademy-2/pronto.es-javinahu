<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Scripts --}}
  <script src="{{asset('js/app.js')}}"></script>


    {{-- Styles --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>Mi wallapop</title>
  </head>
  <body>
    @include('layouts._navbar')

    <div class="container">
     <div class="row">
      <div class="col-12 mt-3 text-right px-3 pb-5 fixed-bottom"><a href="{{url()->previous()}}" class="btn btn-warning"><i class="fas fa-arrow-circle-left"></i></a>
      </div>
      <div class="col-12 mt-3 text-right px-3 pb-1 fixed-bottom"><a href="{{route('home')}}" class="btn btn-info"><i class="fas fa-home"></i></a>
      </div>
        @yield('content')
     </div>
    </div>

  </body>
</html>