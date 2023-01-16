<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rests;

class RestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Rest = [
            'user_id' => '1',
            'date' => '2022-01-09',
            'start_time' => '15:00:30',
            'end_time' => '15:50:00',
        ];
        Rests::create($Rest);

        $Rest = [
            'user_id' => '2',
            'date' => '2022-01-09',
            'start_time' => '',
            'end_time' => '',
        ];
        Rests::create($Rest);
    }
}
