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
        return view('attendace');
    }

    public function create(Request $request)
    {
        $name = User::all();
        $startattendace = Attendace::start_time();
        $stopattendace = Attendace::end_time();
        $rest = 
        $attendace = 
        return redirect('/');
    }
}
