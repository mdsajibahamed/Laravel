
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">

  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url("home")}}">Home</a>
              </li>
             @auth
             <li class="nav-item">
                <a class="nav-link" href="{{url("about")}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("product")}}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("dashboard")}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("category")}}">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("subcategory")}}">SubCategory</a>
              </li>



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->name}} 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route("profile.edit")}}">Profile</a></li>
                  <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="#" onclick="event.preventDefault();
                this.closest('form').submit();">Logout</a>
                  </form>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="nav-link"  href="https://laravel.com/" target="_blank">Something Wrong</a></li>
                </ul>

              </li>
                 
              {{-- <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="nav-link" href="#" onclick="event.preventDefault();
                  this.closest('form').submit();">Logout</a>
              </form> 
              </li>
               --}}
             @endauth
             @guest
             <li class="nav-item">
                <a class="nav-link" href="{{url("login")}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("register")}}">Registration</a>
              </li>
              
             @endguest
              
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
             </div>
          </div>
       </nav>
      {{-- nav end  --}}

      {{-- row  --}}
      <div class="row">
        <div class="col-9">
          {{-- successfullay message  --}}

          {{-- @include('partials.flash') --}}

          {{-- successfullay message end --}}

            @yield('content')


        </div>
        <div class="col-3">
            @yield('sidebar')


        </div>
      </div>

      <div class="row">
        <div class="col-9">
          @yield('down')
        </div>
      </div>

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
      </div>
      

     <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
     <script src="{{asset("assets/js/jquery-3.7.0.min.js")}}"></script>
     @yield('script')
     
    </div>
</body>
</html>
