<nav class="navbar navbar-inverse navbar-expand-md">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/blog3">Home</a></li>
            <li><a href="/blog3/about">About</a></li>
            <li><a href="/blog3/contact">Contact</a></li>
            <li><a href="/blog3/student">Student</a></li>
            <li><a href="/blog3/blog">Blog</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/blog3/dashboard">Dashboard</a></li>
                        <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                          </form>
                        </li>
                    </ul>
                </li>
                @endif
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>