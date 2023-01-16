<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
