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
        //

        App\User::create([
            'name'=>'User 1',
            'email'=>'useremail@gamil.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
