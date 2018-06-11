<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronostic extends Model
{
  protected $fillable = ['user_id', 'match_id', 'team_h', 'team_a', 'score_h', 'score_a', 'pen_h', 'pen_a'];
}
