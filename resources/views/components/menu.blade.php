<nav class="navbar navbar-expand-lg fixed-top " style="background-color: #3764EB;height: 85px;">
        <div class="container">
            <a class="navbar-brand" href="#"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                        @if (Auth::user()->role_id  == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}"> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('settings') }}"> Settings</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}"> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('add') }}">Add Innovations</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Settings</a>
                            </li> -->
                        @endif
                    @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about_us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact_us') }}">Contact Us</a>
                            </li>
                    @endif
                    
                </ul>
                <div class="d-flex">
                    @if (Route::has('register'))
                    @auth
                    @if (Route::has('dashboard'))
                    <a href="{{ url('/logout') }}" class="me-2 btn btn-top"><span> <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </span></a>
                    @else
                    <a href="{{ url('/dashboard') }}" class="me-2 btn btn-top"><span>Dashboard
                        </span></a>
                    @endif
                    @else
                    <a href="{{ url('/search') }}" class="me-2 btn"><span><i class="fa fa-search"></i></span></a>
                    <a href="{{ route('register') }}" class="me-2 btn btn-top"><span><i class="fa fa-user"></i> Register / login
                        </span></a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </nav>