<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Rests extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable =
    [
        'user_id',
        'date',
        'start_time',
        'end_time'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function rest_time()
    {
        $start = new Carbon($this->start_time);
        $end = new Carbon($this->end_time);
        $seconds = $end->diffInSeconds($start);
        $minutes = $end->diffInMinutes($start);
        $hours = $end->diffInHours($start);
        echo sprintf("%02d", $hours), ':', sprintf("%02d", $minutes - $hours * 60), ':', sprintf("%02d", $seconds - $minutes * 60);
    }
}
