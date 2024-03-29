<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">

        <a class="navbar-brand" href="{{url('/')}}">
            CheapTalk <i class="fad fa-comment-alt-smile"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                @if(Auth::check()) 
                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-th-large"></i> Dashboard</a>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fad fa-th-list"></i> Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(\App\Models\Category::list() as $key => $category)
                                <a class="dropdown-item" href="{{url("/categories/$key")}}">{{$category}}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('authors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/authors')}}"><i class="fad fa-users"></i> Authors</a>
                    </li>

                    <li class="nav-item dropdown" style="cursor: pointer">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="30" height="30" class="rounded-circle"> &nbsp;{{ auth()->user()->name }}</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="{{url("/authors/" . auth()->user()->id)}}"><i class="fas fa-user-cog"></i> My Posts</a>
							<a class="dropdown-item" href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
						</div>
					</li>
                    
                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                @endif
                
            </ul>
        </div>

    </div>
</nav>
