    @if(!$errors->isEmpty())
    <tr>
        <td><span class='errorMessage'>{{$errors->first('date')}}</span></td>
        <td><span class='errorMessage'>{{$errors->first('distance')}}</span></td>
        {{-- We want the second message (the custom message) for the "points" field --}}
        <td colspan=2><span class='errorMessage'>{{$errors->get('points')[1] ?? ''}}</span></td>
        <td></td>
    </tr>
    @endif