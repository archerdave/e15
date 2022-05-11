        @if(session('success'))
            <div class='success'>
                {{session('success')}}
            </div>
        @endif
        @if(session('failure'))
            <div class='failure'>
                {{session('failure')}}
            </div>
        @endif
        @if(!$errors->isEmpty())
            <div class='failure'>
                <p>Errors are present</p>
            </div>
        @endif