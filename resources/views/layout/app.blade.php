<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href= "{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Portfolio')}}</title>
      </head>
     <body>
       @include('inc.navbar')
      <br>
       <div class= "container">
            
            @yield('content')
       </div>
    </body>
</html>
