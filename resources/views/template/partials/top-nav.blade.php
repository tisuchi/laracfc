<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=" {{ route('home') }} ">cFc</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">All Events</a></li>
        <li><a href="#">Events by Category</a></li>
        <li><a href="#">Add New Event</a></li>
      </ul>


      <form class="navbar-form navbar-left" role="search" method="GET" action="{{ route('profileSearch')}}">
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search" value="{{ Request::old('query') }}">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>



      <ul class="nav navbar-nav navbar-right">
      @if (Auth::check() )
        <li><a href=""> {{ Auth::user()->getUsername() }} </a></li>
        <li><a href="{{ route('editProfile') }}">Update Profile</a></li>
        <li><a href="{{ route('logout') }}">Sign Out</a></li>

      @else
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href=" {{ route('join') }} ">Join Now</a></li>

      @endif 

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>