<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 29 )->create();

        // el 30 soy yo 
       App\User::create([
       	'name'=> 'Santiago Perez',
       	'email' => 'santiagoperez@live.cl',
       	'password' => bcrypt('1234')
       ]);
    }
}
