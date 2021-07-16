<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargePrj extends Model
{
    use HasFactory;

    public function users(){
        return $this->morphMany(User::class ,'usertable');
    }

    public function projects()
    {
        return $this->hasMany(Projet::class,'chargePrj_id');
    }
}
