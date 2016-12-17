<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    
    public function orders(){
      return $this->hasMany('App\Order');
    }
    public function products(){
      return $this->belongsTo('App\User');
    }
}
