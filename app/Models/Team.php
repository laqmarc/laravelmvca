<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function clubs(){
        return $this->belongsTo('App\Models\Club');
    }

    public function matchs(){
        return $this->hasMany('App\Models\Mat');
    }

}
