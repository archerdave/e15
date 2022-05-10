<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Score;
use Illuminate\Support\Facades\Validator;

class ScoreController extends Controller
{
    /**
     * GET /scores
     */
    public function index()
    {
        $user = Auth::user();
        $scores = $user->scores()->get();

        return view('score/index', ['user' => $user, 'scores' => $scores]);
    }


    /**
     * GET /scores/{id}/edit
     */
    public function edit($scoreId)
    {
        $score = Score::where('id', $scoreId)->first();

        return view('score/edit', ['score' => $score]);
    }


    /**
     * PUT /scores/{id}
     */
    public function update(Request $request, $scoreId)
    {
        // A custom validator is required to handle the fact that the "points" maximum value varies
        // depending on the "isTimed" value.
        $validator = Validator::make(
            $request->all(),
            //rules
            [
                'date'     => 'required|before_or_equal:'.date('Y-m-d'), //must be today or earlier
                'distance' => 'required|numeric|min:1',
                'isTimed'  => 'nullable|in:on', //must be either "on" or null
                'points'   => 'required|numeric|integer|min:0',
            ],
            //messages
            [
                'date.before_or_equal' => 'The date must be today or earlier.'
            ],
        );

        // If the end is timed, maximum point value is 150.  This would be one arrow per second
        // for 30 seconds, and all of them in the gold.
        $validator->sometimes('points', 'max:150', function ($request) {
            return ($request->isTimed == 'on');
        });

        // If the end is not timed (six arrows), maximum point value is 30
        $validator->sometimes('points', 'max:30', function ($request) {
            return ($request->isTimed != 'on');
        });

        if ($validator->fails()) {
            if ($request->isTimed == 'on' && $request->points > 150) {
                $validator->errors()->add('points', 'A timed end cannot have more than 150 points.');
            } elseif ($request->isTimed != 'on' && $request->points > 30) {
                $validator->errors()->add('points', 'An untimed end cannot have more than 30 points.');
            }
            return redirect('/scores/'.$scoreId.'/edit')->withErrors($validator)->withInput();
        }

        /* END VALIDATION */

        $score = Score::where('id', $request->scoreId)->first();
        $score->date     = $request->date;
        $score->distance = $request->distance;
        $score->isTimed  = $request->boolean('isTimed');
        $score->points   = $request->points;
        $score->save();

        return redirect('/scores/'.$score->id.'/edit');
    }
}