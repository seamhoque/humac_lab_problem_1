<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'username', 'email', 'password','birthdate','city','country'
    ];
}
