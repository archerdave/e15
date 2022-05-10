    @if(!$errors->isEmpty())
    <tr>
        <td><span class='error'>{{$errors->first('date')}}</span></td>
        <td><span class='error'>{{$errors->first('distance')}}</span></td>
        {{-- We want the second message (the custom message) for the "points" field --}}
        <td colspan=2><span class='error'>{{$errors->get('points')[1] ?? ''}}</span></td>
        <td></td>
    </tr>
    @endif