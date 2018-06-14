<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronostic extends Model
{
  protected $fillable = ['user_id', 'match_id', 'team_h', 'team_a', 'score_h', 'score_a', 'pen_h', 'pen_a'];
  /*
  * relationship
  *
  */
  public function user() {
    return $this->belongsTo('App\User', 'user_id');
  }

  public function match() {
    return $this->belongsTo('App\Match', 'match_id');
  }

  public function homeTeam() {
    return $this->belongsTo('App\Team', 'team_h');
  }

  public function awayTeam() {
    return $this->belongsTo('App\Team', 'team_a');
  }
}
