<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class choices extends Model
{
    protected $table = 'choices';
    protected $fillable = ['choice', 'poll_id'];

    public function poll(){
      return $this->belongsTo("App\poll");
    }

    public function votes(){
      return $this->hasMany("App\votes");
    }
}
