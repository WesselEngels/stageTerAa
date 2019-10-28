<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function companyImage() 
    {
        $imagePath = ($this->image) ? $this->image : '/default.jpg';
        return 'storage/' . $imagePath;
    }

    public function details() 
    {
        return $this->belongsTo('App\Details');
    }
}
