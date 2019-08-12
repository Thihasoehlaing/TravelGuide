<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
