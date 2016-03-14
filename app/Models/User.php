<?php

namespace Cfc\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    
    protected $table = 'Users';

    protected $fillable = [
        'uName', 'uEmail', 'uPassword', 'uActivationCode', 'uFlag', 'uType'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function getAuthPassword()
    {
        return $this->uPassword;
    }



    public function getUsername(){
        if ($this->uName ) {
            return $this->uName;
        }
    }



    public function getAvatarURL(){
        return "https://www.gravatar.com/avatar/".md5($this->uEmail)."?d=mm";
    }


    
}
