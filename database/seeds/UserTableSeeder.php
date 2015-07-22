<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gg.com',
            'password' => bcrypt('123456')
        ]);

        factory(\App\User::class, 9)->create();
    }
}
