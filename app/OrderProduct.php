<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = ['order_id','product_id','quantity','price'];

    public function item(){
        return $this->hasOne('App\Product','id','product_id');
    }
}
