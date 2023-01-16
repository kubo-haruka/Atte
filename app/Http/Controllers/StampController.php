<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendace;
use App\Models\Rests;

class StampController extends Controller
{
    public function attendace()
    {
        $attendances = Attendace::all();
        return view('attendace',['attendances' => $attendances]);
    }
}
