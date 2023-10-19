<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand sticky_logo" href="{{route('home')}}">
            <img width="80px" src="{{asset('assets/img/logo-white.png')}}" srcset="{{asset('assets/img/logo-white.png')}}" alt="logo">
            <img width="80px" src="{{asset('assets/img/logo-yellow.png')}}" srcset="{{asset('assets/img/logo-yellow.png')}}" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_toggle">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="hamburger-cross">
                    <span></span>
                    <span></span>
                </span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item dropdown submenu {{isActive('home')}}">
                    <a href="{{route('home')}}" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                @foreach($globalCategories as $key => $cat)
                    <li class="nav-item dropdown submenu {{isActive('category.show',$cat->slug)}}">
                        <a href="{{route('category.show',$cat->slug)}}" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$cat->title}}</a>
                    </li>
                @endforeach
            </ul>
            {{-- <a class="nav_btn" href="blog-grid.html#">About Me</a> --}}
        </div>
    </div>
</nav>
