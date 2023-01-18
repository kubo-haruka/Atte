<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendace extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable =
    [
        'user_id',
        'rest_id',
        'date',
        'start_time',
        'end_time'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function rest()
    {
        return $this->belongsTo('App\Models\Rests');
    }

    public function attendance_time()
    {
        $start = new Carbon($this->start_time);
        $end = new Carbon($this->end_time);
        $seconds = $end->diffInSeconds($start);
        $minutes = $end->diffInMinutes($start);
        $hours = $end->diffInHours($start);
        echo $hours,':',$minutes,':',$seconds;
    }
}
