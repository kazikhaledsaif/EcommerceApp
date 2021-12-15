<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded  = [ ];
    use Sluggable;
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function hasCategory(){
        return $this->hasOne('App\Category');
    }
    public function hasReview(){
        return $this->hasMany('App\Review');
    }

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
