<?php

namespace Cfc\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    protected $fillable = [
        'uName', 
        'uEmail', 
        'uPassword',
    ];



    protected $hidden = [
        'password', 
        'remember_token',
    ];


}
