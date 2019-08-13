<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Places extends Model
{
    protected $fillable = [
        'division_id', 'placename', 'city',  'township', 'fileimage','placetype_id', 'note', 'lat', 'long',
    ];

    public function division()
    {
        return $this->belongsTo('App\Model\Divisions', 'division_id');
    }

    public function Dashboard()
    {
        return $this->hasMany('App\Model\Dashboard');
    }

    public function placetype(){
        return $this->belongsTo('App\Model\Placetype', 'placetype_id');
    }
}
