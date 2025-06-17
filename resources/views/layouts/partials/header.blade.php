
    <nav  class="navbar navbar-expand-lg navbar-dark bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="{{url('/dashboard')}}">Dashboard</a>

            <div >
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item nav-margin">
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-dark">Logout</button>
                    </form>
                </li>
            </ul>  
    </nav>

