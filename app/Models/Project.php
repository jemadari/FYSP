<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopes() {
        return $this->hasMany('App\Models\Scope');
    }

    public function specificobjectives() {
        return $this->hasMany('App\Models\SpecificObjective');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
