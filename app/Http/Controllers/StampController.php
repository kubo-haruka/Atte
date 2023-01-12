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
        $users = User::all();
        $attendances = Attendace::all();
        $rests = Rests::all();
        $param = ['users' => $users, 'attendances' => $attendances, 'rests' => $rests];
        return view('attendace',$param);
    }
}
