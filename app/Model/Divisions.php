<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Divisions extends Model
{
    protected $fillable = [
        'divisionname', 'city', 'fileimage' , 'zip_code', 'lat', 'long',
    ];

    public function place()
    {
        return $this->hasMany('App\Model\Places');
    }

    public function Dashboard()
    {
        return $this->hasMany('App\Model\Dashboard');
    }
}
