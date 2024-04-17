<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'id_user', 
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
