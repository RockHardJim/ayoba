<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $table = 'profiles';
    protected $fillable = ['name', 'surname', 'gender'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user');
    }
}
