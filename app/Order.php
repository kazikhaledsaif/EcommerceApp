<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'billing_email','billing_first_name','billing_last_name','billing_phone_no','billing_address','billing_town',
        'billing_city','billing_zip_code','billing_id','billing_discount','billing_discount_code','billing_subtotal','billing_shipping_fee'
        ,'billing_total','billing_payment_gateway',
        'shipped','status'
    ];

    public function user(){
        return $this->belongsTo('app\User');
    }
    public function products(){
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
