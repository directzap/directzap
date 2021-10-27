<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@directzap.com',
            'password'  => bcrypt('102030'),
            'type'      => 'admin',
        ]);
        User::create([
            'name'      => 'user',
            'email'     => 'user@directzap.com',
            'password'  => bcrypt('102030'),
            'type'      => 'user',
        ]);
    }
}
