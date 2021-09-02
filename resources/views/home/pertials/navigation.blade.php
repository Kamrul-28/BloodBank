<div class="wrapper row2">
     <nav id="topnav">
       <ul class="clear">
         @if (Route::has('login'))
            @auth
                    <li class="nav-item" title="Home">  
                        <a href="{{ route('homepage')}}" class="nav-link text-md">Homepage</a>
                    </li> 
                    <li><a href="{{route('posted-requests')}}" class="nav-link" title="All Requests">All Requests</a></li>
                    <li><a href="{{route('manage-blood')}}" class="nav-link" title="manage-blood">Send Blood Request</a></li>
                    <li><a href="{{route('donor')}}" class="nav-link" title="About Us">Donors</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link" title="About Us">Contact</a></li>
                    <li><a href="{{route('about')}}" class="nav-link" title="About Us">About Us</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>  {{ Auth::user()->name }}</a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        
                          <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>
          
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>
                          </li>
                      </ul>

                  </li>
                @else
                <li><a href="{{route('homepage')}}" title="Homepage">Homepage</a></li>
                <li><a href="{{route('posted-requests')}}" title="Homepage">All Requests</a></li>
                <li><a href="{{route('manage-blood')}}" class="nav-link title="manage-blood">Send Blood Request</a></li>
                <li><a href="{{route('donor')}}" class="nav-link title="About Us">Donors</a></li>
                <li><a href="{{route('contact')}}" class="nav-link title="About Us">Contact</a></li>
                <li><a href="{{route('about')}}" class="nav-link title="About Us">About Us</a></li>
                    <li class="nav-item" title="Login">
                        <a href="{{ route('login') }}" class="nav-link text-sm underline">Log in</a>
                    </li>  
                @if (Route::has('register'))
                    <li class="nav-item" title="Register">  
                        <a href="{{ route('become-a-hero') }}" class="nav-link text-sm underline">Become A Hero</a>
                    </li>    
                @endif
              @endauth
          @endif 
       </ul>
     </nav>
</div>
