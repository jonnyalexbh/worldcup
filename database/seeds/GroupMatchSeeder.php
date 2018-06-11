<?php

use App\Match;
use Zttp\Zttp;
use Illuminate\Database\Seeder;

class GroupMatchSeeder extends Seeder
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
    $groups = $response['groups'];

    foreach(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'] as $key => $value) {
      foreach($groups[$value]['matches'] as $match) {
        Match::create([
          'id' => $match['name'],
          'team_h' => $match['home_team'],
          'team_a' => $match['away_team'],
          'date' => Carbon\Carbon::createFromFormat('Y-m-d\TH:i:sO',$match['date'])
          ->setTimezone('Europe/Zurich'),
          'score_h' => $match['home_result'],
          'score_a' => $match['away_result'],
          'stadium_id' => $match['stadium'],
          'type' => $match['type'],
          'group_id' => $key + 1,
        ]);
      }
    }

  }
}
