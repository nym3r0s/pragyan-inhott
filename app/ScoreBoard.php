<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreBoard extends Model
{
    protected $table = "score_board";

    protected $fillable = ['id', 'first', 'second', 'third'];
}
