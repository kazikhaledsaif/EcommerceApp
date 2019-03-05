<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderIndex extends Model
{
    protected $fillable = ['user_id','order_no','order_code','tracker'];
}
