<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
  public $timestamps = false;
  /*
  * relationship
  *
  */
  public function group() {
    return $this->belongsTo('App\Group', 'group_id');
  }

  public function stadium() {
    return $this->belongsTo('App\Stadium', 'stadium_id');
  }

  public function homeTeam() {
    return $this->belongsTo('App\Team', 'team_h');
  }

  public function awayTeam() {
    return $this->belongsTo('App\Team', 'team_a');
  }
}
