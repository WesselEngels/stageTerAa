<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function details() {
        return $this->belongsTo('App\Details');
    }
}
