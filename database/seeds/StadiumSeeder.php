<?php

use Zttp\Zttp;
use App\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
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
    $stadiums = $response['stadiums'];

    foreach($stadiums as $stadium) {
      Stadium::create([
        'id' => $stadium['id'],
        'name' => $stadium['name'],
        'city' => $stadium['city'],
        'lat' => $stadium['lat'],
        'lng' => $stadium['lng']]);
      }

    }
  }
