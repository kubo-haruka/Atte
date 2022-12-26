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
            'name' => '久保',
            'email' => 'rupixx28@gmail.com',
            'password' => bcrypt('testtest') 
        ];
        User::create($user);
    }
}
