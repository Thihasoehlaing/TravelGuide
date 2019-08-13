<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Placetype extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function place()
    {
        return $this->hasOne('App\Model\Places');
    }
}
