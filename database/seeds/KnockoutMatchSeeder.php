<?php

use App\Match;
use Zttp\Zttp;
use Illuminate\Database\Seeder;

class KnockoutMatchSeeder extends Seeder
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
    $knockout = $response['knockout'];

    foreach(['round_16','round_8','round_4','round_2_loser','round_2'] as $key => $value) {
      foreach($knockout[$value]['matches'] as $match) {
        Match::create([
          'id' => $match['name'],
          'team_h' => null,
          'team_a' => null,
          'date' => Carbon\Carbon::createFromFormat('Y-m-d\TH:i:sO',$match['date'])
          ->setTimezone('Europe/Zurich'),
          'score_h' => $match['home_result'],
          'score_a' => $match['away_result'],
          'pen_h' => $match['home_penalty'],
          'pen_a' => $match['away_penalty'],
          'stadium_id' => $match['stadium'],
          'type' => $match['type'],
          'knockout_id' => $key+1,
          'team_h_description' => $match['home_team'],
          'team_a_description' => $match['away_team'],
        ]);
      }
    }

  }
}
