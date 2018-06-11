<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'username', 'status'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];
  /*
  * create initial pronostics for user
  *
  */
  public function create_pronostics() {
    for($i =1; $i<65; $i++) {
      $pronostic = Pronostic::firstOrCreate(
        [
          'user_id'=>$this->id,
          'match_id'=>$i
        ]
      );
    }
  }
}
