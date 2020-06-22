<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create ([
            'name'=> 'Adam',
            'email'=> 'Adam.sandler@gmail.com',
            'password'=> Hash::make('password'),
            'remember_token' => str_random(10),
            'role'=> 'user',

        ]);
    }
}
