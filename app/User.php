<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active', 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    #User belongs to A Role
    public function role() {
        return $this->belongsTo('App\Role');
    }

    #User belongs to a photo
    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }

    #Check user if is Admin
    public function isAdmin() {
        if ($this->role->name == 'administrator' && $this->is_active == 1) {
            return true;
        }
        return false;
    }

}
