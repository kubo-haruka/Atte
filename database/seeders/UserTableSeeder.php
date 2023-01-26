<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => '山田',
            'email' => 'test@example.com',
            'password' => bcrypt('testtest') 
        ];
        User::create($user);

        $user = [
            'name' => '田中',
            'email' => 'aaaa@example.com',
            'password' => bcrypt('testaaaa')
        ];
        User::create($user);
    }
}
