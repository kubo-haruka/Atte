<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendace;
use App\Models\Rests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AttendaceRequest;
use App\Http\Requests\RestRequest;

class StampController extends Controller
{
    public function attendace()
    {
        $attendances = Attendace::all();
        $attendances = Attendace::Paginate(2);
        return view('attendace',['attendances' => $attendances]);
    }

    public function index()
    {
        $users = Auth::user();
        return view('home',['users' => $users]);
    }

    public function startAttendace(AttendaceRequest $request)
    {
        Attendace::create([
            'date' => $request->date,
            'start_time' => $request->start_time
        ]);
        return redirect('/home');
    }

    public function stopAttendace(AttendaceRequest $request)
    {
        $userid = Attendace::find($request->user_id);
        $attendance = $request->all();
        unset($attendance['_token']);
        Attendace::where('id', $request->user_id)->update($attendance);
        return redirect('/home', ['user_id' => $userid]);
    }

    public function startRest(RestRequest $request)
    {
        $rest = $request->all();
        Rests::create($rest);
        return redirect('/home');
    }

    public function stopRest(RestRequest $request)
    {
        $userid = Rests::find($request->user_id);
        $rest = $request->all();
        unset($rest['_token']);
        Rests::where('user_id', $request->user_id)->update($rest);
        return redirect('/home', ['user_id' => $userid]);
    }

}
