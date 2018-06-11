<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    // $this->call(UsersTableSeeder::class);
    $this->call(TeamsSeeder::class);
    $this->call(TeamIsoSeeder::class);
    $this->call(StadiumSeeder::class);
    $this->call(GroupSeeder::class);
    $this->call(KnockoutSeeder::class);
    $this->call(GroupMatchSeeder::class);
    $this->call(KnockoutMatchSeeder::class);
    $this->call(KnockoutUpdate::class);
    $this->call(MatchDateSeeder::class);
  }
}
