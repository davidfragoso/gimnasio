<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $fillable = ['id_membership', 'importe', 'date'];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
