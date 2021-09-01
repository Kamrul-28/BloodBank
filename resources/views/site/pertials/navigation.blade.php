<div class="wrapper row2">
     <nav id="topnav">
       <ul class="clear">
         @if (Route::has('login'))
            @auth
                    <li class="nav-item" title="Home">  
                        <a href="{{ url('/home') }}" class="nav-link text-md">Homepage</a>
                    </li> 
                    <li><a href="{{route('manage-blood')}}" class="nav-link title="manage-blood">Manage Blood</a></li>
                    <li><a href="{{route('donor')}}" class="nav-link title="About Us">Donors</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link title="About Us">Contact</a></li>
                    <li><a href="{{route('about')}}" class="nav-link title="About Us">About Us</a></li>
                @else
                    <li class="active"><a href="{{route('homepage')}}" title="Homepage">Homepage</a></li>
                    <li><a href="{{route('manage-blood')}}" class="nav-link title="manage-blood">Manage Blood</a></li>
                    <li><a href="{{route('donor')}}" class="nav-link title="About Us">Donors</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link title="About Us">Contact</a></li>
                    <li><a href="{{route('about')}}" class="nav-link title="About Us">About Us</a></li>
                    <li class="nav-item" title="Login">
                        <a href="{{ route('login') }}" class="nav-link text-sm underline">Log in</a>
                    </li>  
                @if (Route::has('register'))
                    <li class="nav-item" title="Register">  
                        <a href="{{ route('register') }}" class="nav-link text-sm underline">Register</a>
                    </li>    
                @endif
              @endauth
          @endif 
       </ul>
     </nav>
</div>

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