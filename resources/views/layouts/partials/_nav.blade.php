<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item {{set_active_route('home_path')}} ">
                <a class="nav-link" href="{{route('home_path')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{set_active_route('about')}}">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Laravel.com</a>
                    <a class="dropdown-item" href="#">Laravel.io</a>
                    <a class="dropdown-item" href="#">Laracasts</a>
                    <a class="dropdown-item" href="#">Larajobs</a>
                    <a class="dropdown-item" href="#">Laravel News</a>
                    <a class="dropdown-item" href="#">Larachat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
           <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
           <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
        </ul>
       
    </div>
</nav>