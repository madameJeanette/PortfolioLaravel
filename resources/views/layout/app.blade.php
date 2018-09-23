<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href= "{{asset('css/app.css')}}">
     <title></title>
      </head>
     <body>
       @include('inc.navbar')
       <div class= "container">
         @yield('content')
       </div>
    </body>
</html>
