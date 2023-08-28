<div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="{{ url('/') }}"><img src="{{ URL::asset('public/') }}/images/logo.png" alt="" style="width: 360px;height: 72px;"></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            @auth
                            @if (Auth::user()->role_id  == 1) 
                            <ul class="navigation clearfix">
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li> 
                                    <li><a href="{{ route('settings') }}">Settings</a></li>      
                                    <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i></a></li>                              
                            </ul> 
                            @else
                            <ul class="navigation clearfix">
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li> 
                                    <li><a href="{{ route('add') }}">Add Innovations</a></li>  
                                    <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i></a></li>                                  
                            </ul> 
                            @endif
                            @else
                               <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li> 
                                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                                    <li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
                                    <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i></a></li>
                                </ul>
                            @endif
                            </div>
                        </nav>
                        @if (Route::has('register'))
                        @auth
                        @if (Route::has('dashboard'))
                        <div class="btn-box"><a href="{{ url('/logout') }}" class="theme-btn style-one">Logout</a></div>
                        @else
                        <div class="btn-box"><a href="{{ url('/dashboard') }}" class="theme-btn style-one">Dashboard</a></div>
                        @endif
                        @else
                        <div class="btn-box"><a href="{{ route('register') }}" class="theme-btn style-one">Register / login</a></div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

