<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable=[
        'email',
        'contrasena'
    ];
}
