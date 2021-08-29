{{-- <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="#">Bloodbank Management system </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-sm" href="#">Home</a>
            </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">  
                    <a href="{{ url('/home') }}" class="nav-link text-md">Home</a>
                </li> 
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link text-sm underline">Log in</a>
                </li>  
                @if (Route::has('register'))
                <li class="nav-item">  
                    <a href="{{ route('register') }}" class="nav-link text-sm underline">Register</a>
                </li>    
                @endif
             @endauth
        @endif 
          </ul>
        </div>
      </nav>
</div> --}}

<div class="wrapper row1">
  <header id="header" class="full_width clear">
    <div id="hgroup">
      <h1><a href="index.html">RS-1200 Prototype 22</a></h1>
      <h2>Free Responsive Template</h2>
    </div>
    <div id="header-contact">
      <ul class="list none">
        <li><span class="icon-envelope"></span> <a href="#">info@domain.com</a></li>
        <li><span class="icon-phone"></span> +xx xxx xxxxxxxxxx</li>
      </ul>
    </div>
  </header>
</div>