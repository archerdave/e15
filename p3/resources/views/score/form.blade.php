            <td><input type='date' id='date', name='date' value='{{old('date') ?? (isset($score) ? $score->date : '')}}'></td>
            <td><input type='number' id='distance' name='distance' value='{{old('distance') ?? (isset($score) ? $score->distance : '')}}'></td>
            <td><input type='checkbox' id='isTimed' name='isTimed'
                {{-- If the form has been processed and returned with errors, use the old value.
                Otherwise use the database value. This due to the unchecked checkbox not being listed in the request.--}}
                @if(count($errors) > 0)
                    {{old('isTimed') ? 'checked' : ''}}
                @else
                    {{isset($score) && $score->isTimed ? 'checked' : ''}}
                @endif
                ></td>
            <td><input type='number' id='points' name='points' value='{{old('points') ?? (isset($score) ? $score->points : '')}}'></td>
            