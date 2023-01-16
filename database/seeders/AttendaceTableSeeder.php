<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendace;

class AttendaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Attendance = [
            'user_id' => '1',
            'rest_id' => '1',
            'date' => '2022-01-09',
            'start_time' => '10:20:00',
            'end_time' => '18:00:00',
        ];
        Attendace::create($Attendance);

        $Attendance = [
            'user_id' => '2',
            'rest_id' => '2',
            'date' => '2022-01-09',
            'start_time' => '10:00:00',
            'end_time' => '18:20:50',
        ];
        Attendace::create($Attendance);
    }
}
