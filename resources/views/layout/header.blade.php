
<!-- START Jobseeker's essential info -->    
@if(Session::get('User') === 'semi')
    
    <script>location.href="{{route('User-reg-complete')}}";</script>

<!-- END Jobseeker's essential info -->   


<!-- START Client Based -->    
@elseif(Session::get('User') === 'CLi')

    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <a class="navbar-brand pt-0 waves-effect" href="{{ route('Home') }}">
                    <h5>WorkPortal</h5>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="#">Profile
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Hire Now</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="jobSeekers.php">Search List</a>
                            <a class="dropdown-item" href="">My Collections</a>
                            <a class="dropdown-item" href="">New</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Link</a>
                    </li>
                </ul>

                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        <a href="PostJob.php" class="nav-link border border-light rounded waves-effect btn btn-success btn-sm">
                        Post A Job
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link border border-light rounded waves-effect btn btn-primary btn-sm"
                        target="_blank">
                        Need Support
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('Logout') }}" class="nav-link border border-light rounded waves-effect btn btn-danger btn-sm">
                        Logout
                        </a>
                    </li>
                </ul>

            </div>

            </div>
    </nav>      

<!-- END Client Based -->    


<!-- START User Based -->    
@elseif(Session::get('User') === 'user')

    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <a class="navbar-brand pt-0 waves-effect" href="{{ route('Home') }}">
                    <h5>WorkPortal</h5>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Profile</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">My Options<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="jobposts.php">Search Now</a>
                            <a class="dropdown-item" href="">My Applies</a>
                            <a class="dropdown-item" href="">Boost my CV</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link border border-light rounded waves-effect btn btn-primary btn-sm"
                        target="_blank">
                        Need Support
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('Logout') }}" class="nav-link border border-light rounded waves-effect btn btn-danger btn-sm">
                        Logout
                        </a>
                    </li>
                </ul>

            </div>

            </div>
    </nav>

<!-- END User Based -->    


<!-- START No User -->  
@else

    <script> location.href="{{ route('Logout') }}"; </script>
      
@endif
<!-- END No User -->  