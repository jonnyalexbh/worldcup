<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  public $timestamps = false;
  /*
  * relationship
  *
  */
  public function group() {
    return $this->belongsTo('App\Group', 'group_id');
  }
}
