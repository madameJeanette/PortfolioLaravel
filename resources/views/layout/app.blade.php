<!doctype html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Portfolio')}}</title>
      </head>
     <body>
       @include('inc.navbar')
      <br>
       <div class= "container">
           @include('inc.message') 
            @yield('content')
       </div>
    </body>
</html>
