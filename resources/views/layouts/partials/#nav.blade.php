<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Home</a></li>
                <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
                <li class="{{ set_active_route('artisan_path') }}"><a href="#artisan">Artisans</a></li>
                <li class="dropdown {{ set_active_route('artisan_path') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Laravel.com</a></li>
                        <li><a href="#">Laravel.io</a></li>
                        <li><a href="#">Laracasts</a></li>
                        <li><a href="#">Larajobs</a></li>
                        <li><a href="#">Laravel New</a></li>
                        <li><a href="#">Larachat</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#login">Login</a></li>
                <li><a href="#register">Register</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>