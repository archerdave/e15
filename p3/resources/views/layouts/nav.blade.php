        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='mailto:admin@ask.p3.hes.edu'>Contact Us</a></li>
                @if(Auth::user())
                    <li><a href='/users/{{Auth::user()->id}}'>Your account</a></li>
                    <li><a href='/scores'>Scores</a></li>
                    @if(Auth::user()->hasAnyRole(['admin','coach']))
                        <li><a href='/roles'>Manage Roles</a></li>
                    @endif
                    <li><form method='POST' id='logout' action='/logout'>
                        {{ csrf_field() }}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form></li>
                @else
                    <li><a href='/login'>Login</a></li>
                    <li><a href='/register'>Register</a></li>
                @endif                
            </ul>
        </nav>