<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Client;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(array(
            'name'     => 'Jamie Shepherd',
            'email'    => 'hello@jamie.sh',
            'password' => Hash::make('password')
        ));
    }
}