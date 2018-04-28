<?php

use Illuminate\Database\Seeder;

class InitialUserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      'name'     => str_random(10),
      'email'    => str_random(10).'@gmail.com',
      'username' => 'admin',
      'password' => bcrypt('admin'),
    ]);
  }
}
