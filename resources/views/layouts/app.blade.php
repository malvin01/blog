<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('Semantic/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
      <!-- Scripts -->
     <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
      <script src="{{ asset('Semantic/semantic.min.js') }}"></script>
      <script src="{{ asset('js/all.js') }}"></script>
</head>


<body>
   <header>
   <div class="aa" style="background-color:#24292E;">
     <div class="ui main text container">
        <center>
        <br>
                <img class="ui small circular image" src="https://scontent-sit4-1.cdninstagram.com/vp/b1e1edaf40a8e830f2aee00e1c2e6a3a/5C02FB43/t51.2885-19/s150x150/38080800_218024632198611_8947837519605530624_n.jpg">
               <br>
               <div style="color:white;">
              <a href="https://www.instagram.com/malvinn.s" target="_blank"><i class="instagram icon"></i></a>
               <a href="https://www.facebook.com/muhammadmalvin.saputra" target="_blank"> <i class="facebook icon"></i></a>
                <i class="google plus square icon"></i>
                <i class="github icon"></i> 
               </div>
                
        </center>

    </div>
    </div>
    <center>
            <div class="ui divider a"></div>
            
    </center>
   
  <div class="ui stackable borderless main menu" style="margin-top: -2px;  background-color:#FAFAFA;"> 
        <div class="ui text container">

          <a href="#" class="active item">Home</a>
         
          <div class="ui search" style="margin-left:150px;">
                <div class="ui icon input">
                  <input class="prompt" type="text" placeholder="Cari..">
                  <i class="search icon"></i>
                </div>
                <div class="results"></div>
              </div>
              @if(Auth::guest())
              <a href="#" class="ui right floated item">Login</a>
              @else
             <div class="ui right floated dropdown item">
              Hey Alvin <i class="dropdown icon"></i>
             <div class="menu">
              <div class="item">Profile</div>
              <div class="item">Settings</div>
              <div class="divider"></div>
              <a class="item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout
              </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
               </form>                  
            </div>
          </a>
          @endif
        </div>
      
    </div>
      <div class="ui divider b"></div>
   </header>

    <main>
       @yield('content')
    </main>
     
    <footer>
       <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
    </footer>
    
   
</body>
</html>
                                {{--  <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>  --}}