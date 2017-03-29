      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Loginin</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              {{-- About --}}
              @if (!empty($halaman) && $halaman == 'about')
                <li class="active"><a href="{{ url('about') }}">About <span class="sr-only">(current)</span></a></li>
              @else
                <li><a href="{{ url('about') }}">About</a></li>
              @endif

              {{-- User --}}
              @if (Auth::check() && Auth::user()->level == 'admin')
                @if (!empty($halaman) && $halaman == 'user')
                  <li class="active"><a href="{{ url('user') }}">User <span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('user') }}">User</a></li>
                @endif
              @endif
            </ul>

            {{-- Link Login --}}
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
                <li><a href="{{ url('logout') }}">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>
              @else
                <li><a href="{{ url('login') }}">Login</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
