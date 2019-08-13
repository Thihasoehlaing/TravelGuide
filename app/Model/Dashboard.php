<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'admin_id', 'division_id', 'place_id',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Model\Admin', 'admin_id');
    }

    public function division()
    {
        return $this->belongsTo('App\Model\Division', 'division_id');
    }

    public function place()
    {
        return $this->belongsTo('App\Model\Place', 'place_id');
    }
}
