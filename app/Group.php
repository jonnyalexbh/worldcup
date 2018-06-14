<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public $timestamps = false;
  /*
  * relationship
  *
  */
  public function teams() {
    return $this->hasMany('App\Team');
  }

  public function matches() {
    return $this->hasMany('App\Match')->orderBy('id');
  }
}
