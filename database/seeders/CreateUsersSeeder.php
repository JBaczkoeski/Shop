<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'User',
                'email'=>'admin@exc.com',
                'phone_number'=> '0',
                'postcode' => '0',
                'city' => '0',
                'country' => '0',
                'address' => '0',
                'type'=>1,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'warehouse@exc.com',
                'phone_number'=> '0',
                'postcode' => '0',
                'city' => '0',
                'country' => '0',
                'address' => '0',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@exc.com',
                'phone_number'=> '1234567890',
                'postcode' => '74-506',
                'city' => 'Szczecin',
                'country' => 'Zachodniopomorskie',
                'address' => 'Garnowo 25a',
                'type'=>0,
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
