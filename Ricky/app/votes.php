<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class votes extends Model
{
    protected $table = "votes";
    // protected $primaryKey = ['user_id', 'poll_id'];
    // protected $autoincrement = false;
    protected $fillable = ['choice_id', 'user_id', 'poll_id'];

    public function user(){
      return $this->belongsTo("App\User");
    }

    public function choices(){
      return $this->hasMany("App\choices");
    }

    public function polls(){
      return $this->hasOne("App\poll");
    }
}
