<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $fillable = ['user'];
    protected $table = 'users';

    public function profile(){
        return $this->hasOne('App\Models\Profile', 'user');
    }

    public function type(){
        return $this->hasOne('App\Models\Type', 'user');
    }

    public function points(){
        return $this->hasOne('App\Models\Point', 'user');
    }

    public function location(){
        return $this->hasOne('App\Models\Location', 'user');
    }
}
