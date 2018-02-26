

<header role="banner">
    <div id="map">
    <a href="/">
    <img src="http://nabucco.arts.kuleuven.be/nabucco/themes/Nabucco/images/Logo_NaBuCCo.jpg">
    </a></div>
<img style="float:left" src=""/>
    
<div id="header-wrapper">
<div id="site-title">
N<span class="smallcaps">a</span>B<span class="smallcaps">u</span>CC<span class="smallcaps">o</span>
</div>

</div>

</header>

<nav class="navbar navbar-default nav-border " style="margin-bottom:10px;">
            <div class="container">
                
                <div class="navbar-header">
                        
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Nabucco') }}
                        
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

 <ul class="nav navbar-nav line active-topnav">

    <li>
        <a href="{{ url('/tablets') }}">TABLETS</a>
    </li>
		
			
		
           
         
            </ul>
                    <!-- Right Side Of Navbar -->
                     
                    {{--  <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    <li><a href="/manage">Management</a></li>
                                    
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
                                </ul>
                            </li>
                        @endguest
                    </ul>  --}}
                </div>
            </div>
        </nav>