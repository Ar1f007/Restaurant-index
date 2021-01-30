<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css and js bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- font-awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <style>
      h1, h2, h3, h4{
        color:rgba(0, 0, 0, 0.5);
      }
    </style>


    <title>Restaurant App</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/"><img src="{{URL('images/logo.png')}}" alt="" class="rounded-circle" width="120px;"></a>
          @if (Session::get('user'))
          <i class="nav-item nav-link" style="font-weight: 400"">Welcome, {{Session::get('user')}}!</i> 
          @endif

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul style="margin-left: 17.5rem; font-weight: 500; " class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/list">Lists</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/add">Add</a>
                </li>
                @if (Session::get('user'))
                
                <li class="nav-item">
                  <a class="nav-link" href="/logout">Logout</a>
                </li>
  
                <form style="margin-left: 12.5rem;" class="form-inline my-2 my-lg-0" action='/search' method="get"  role="search">
                    @csrf
                  <input style="padding: 0.200rem .75rem;" class="form-control mr-sm-2" type="text" placeholder="Search" id = "term" name="isSearched" aria-label="Search">
                  <button style="padding: 0.200rem .75rem;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
  
  
                @else
                <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">Register</a>
                </li>
                    
                @endif
            </ul>
            
          </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>