<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Divisions extends Model
{
    protected $fillable = [
        'divisionname', 'City', 'zip code',
    ];

    public function place()
    {
        return $this->hasMany('App\Model\Places');
    }
}
