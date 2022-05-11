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
                @foreach ($errors->all() as $error)
                    {{$error}}.'<br>'
                @endforeach
            </div>
        @endif