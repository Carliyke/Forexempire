<!-- NAVSECTION -->

<!-- Top Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-0 py-0 d-sm-none d-md-block" style="background: black !important; color: white !important;">
    <div class="container my-0">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto mr-3">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light py-0 font-weight-bold" href="{{ route('login') }}">
                            <span class="mr-1">
                                <i class="fas fa-lg fa-user"></i>
                            </span>
                            {{ __('Login') }}
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light bg-primary py-0 font-weight-bold" href="{{ route('register') }}">{{ __('Open Account') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<!-- Main Navbar -->
<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-0 py-4" style="background: #041429 !important; color: white !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>
                <img class="img-fluid col-sm-6 p-1 bg-light" id="logo" src="{{asset('assets/img/favicon.png')}}" style="width: 13%; height: 13%; border: 1px solid black;">
            </span>
            <p class="font-weight-bold text-light logo-text">{{ config('app.name', 'ForexEmpire') }}</p>
        </a>
        <button class="navbar-toggler" style="border: 2px solid red" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto mb-0 collapsis">
                <li class="nav-item ml-0 mr-3">
                <a class="nav-link" href="#" style="font-size: .8em;">
                    <span class="mr-1">
                        <i class="fas fa-lg fa-home"></i>
                    </span>
                    Home
                </a>
                </li>
                
                <li class="nav-item ml-0 mr-3">
                <a class="nav-link" href="#" style="font-size: .8em;">
                    <span class="mr-1">
                        <i class="fas fa-lg fa-globe"></i>
                    </span>
                    About Us
                </a>
                </li>

                <li class="nav-item ml-0 mr-3 dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle" style="font-size: .8em;"> 
                        <span class="mr-1">
                            <i class="fas fa-lg fa-cog"></i>
                        </span>
                        Learn To Trade
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Drafts</a></li>
                        <li><a href="#">Sent Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>

                <li class="nav-item ml-0 mr-3 dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle" style="font-size: .8em;"> 
                        <span class="mr-1">
                            <i class="fas fa-lg fa-helicopter"></i>
                        </span>
                        FXEM Invest
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Drafts</a></li>
                        <li><a href="#">Sent Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>

                <li class="nav-item ml-0 mr-3">
                <a class="nav-link" href="#" style="font-size: .8em;">
                    <span class="mr-1">
                        <i class="fas fa-lg fa-mobile"></i>
                    </span>
                    Contact Us
                </a>
                </li>

                <p class="font-weight-bold mt-3 mb-1 d-sm-none">About Us</p>

                <li class="nav-item mx-3 d-sm-none">
                <a class="nav-link" href="#" style="font-size: .8em;">
                    Company
                </a>
                </li>

                <li class="nav-item mx-3 d-sm-none">
                <a class="nav-link" href="#" style="font-size: .8em;">
                    Our Policy
                </a>
                </li>

                <hr class="d-sm-none" style="height:1px;border:none;color:#333;background-color:#333;" />
                
                <div class="font-weight-light d-sm-none copyright company" id="copyright">
                    &copy; 
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, 
                    Designed by <a href="https://www.tallHOWS.com" target="_blank">Carlyke</a>. Powered by <a href="https://www.forexempire.com" target="_blank">ForexEmpire</a>.
                </div>
            </ul>
            
        </div>
    </div>
</nav>

<!-- END OF NAVSECTION -->