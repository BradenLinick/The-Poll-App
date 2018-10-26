<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    protected $table = 'polls';
    protected $fillable = ['question'];

    public function choices(){
      return $this->hasMany("App\choices");
    }

    public function votes(){
      return $this->hasMany("App\votes");
    }

    public function user(){
      return $this->belongsTo("App\User");
    }
}
