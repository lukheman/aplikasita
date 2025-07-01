<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    protected $dates = ['paid_at'];

    public function project() { 
        return $this->belongsTo(Project::class);
    }
}
