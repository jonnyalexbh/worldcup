<?php

use App\Team;
use Zttp\Zttp;
use Illuminate\Database\Seeder;

class TeamIsoSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $url = 'https://raw.githubusercontent.com/lsv/fifa-worldcup-2018/master/data.json';
    $response = Zttp::get($url)->json();
    $teams = $response['teams'];

    foreach($teams as $team) {
      Team::find($team['id'])
      ->update(['iso'=>$team['iso2']]);
    }

  }
}
