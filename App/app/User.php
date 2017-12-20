<?php

namespace terramovil;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Password\CanResetPassword;

class User extends Model
{
    //use Authenticatable, CanResetPassword, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identi','name', 'last_name', 'user_name', 'password','email', 'adress','celphone','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
