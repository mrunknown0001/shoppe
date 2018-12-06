<!DOCTYPE html>
<html>
  <head>
    <title>Trendy Shop </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </head>

  <body>
    @yield('nav')
    <div class="container-fluid">
      @yield('content')
    </div>
  </body>
</html>
