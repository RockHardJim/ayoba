<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    protected $table = 'locations';
    protected $fillable = ['user', 'latitude', 'longitude'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user');
    }
}
