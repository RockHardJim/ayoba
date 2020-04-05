<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    //

    protected $table = 'points';
    protected $fillable = ['user', 'points'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user');
    }
}
