 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="/">Start a Blog with Bootstrap</a>
        </div>
        
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
               @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="/posts/create">Create Post</a>
            </li>
             @endif
            @if(!Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="/register">Registration</a>
            </li>
            @endif
          </ul>
             <ul class="nav navbar-nav navbar-right">
             @if(Auth::check())
            <li >
              <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>{{Auth::user()->name}}</a>
            </li>            
            @endif
            @if(!Auth::check())
            <li >
              <a class="nav-link" href="/login"><span class="glyphicon glyphicon-log-in"></span>Login</a>
            </li>
            @endif
             @if(Auth::check())
            <li>
              <a class="nav-link" href="/logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
            </li>
            @endif
          </ul>
        </div>
      
</nav>