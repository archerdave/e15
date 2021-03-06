<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;

    public function archer()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function coach()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function scoreKeeper()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}