<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Places extends Model
{
    protected $fillable = [
        'division_id', 'placename', 'City', 'township', 'mark'
    ];

    public function division()
    {
        return $this->belongsTo('App\Model\Divisions', 'division_id');
    }
}
