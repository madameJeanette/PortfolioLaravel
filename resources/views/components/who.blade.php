@if(Auth::guard('customer')->check()) 
  <p class="text-success">

    You are logged in as an USER

  </p>

  @else
  <p class="text-danger">

        You are logged out as an USER
    
      </p>

@endif

@if(Auth::guard('admin')->check())
  <p class="text-success">

    You are logged in as an ADMIN

  </p>

  @else
  <p class="text-danger">

        You are logged out as an ADMIN
    
      </p>

@endif