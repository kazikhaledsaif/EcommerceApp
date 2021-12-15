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
    public function cancelReason(){
        return $this->hasOne('App\CancelReason');
    }
    public function shipping(){
        return $this->hasOne('App\OrderIndex','order_no','id');
    }
//    public function order_details(){
//       return OrderProduct::select('order_products.quantity as amount', 'products.name as productName',
//            'products.slug as slug','order_products.price as rate')
//            ->join('products','order_products.product_id','=','products.id')
//            ->where('order_products.order_id', $this->is)
//            ->get();
//    }

    public function order_details(){
        return $this->hasMany('App\OrderProduct','order_id','id');
    }
}
