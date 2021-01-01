<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    //protected $table = 'galleries';

    protected $fillable = [
        'image', 'description', 'categories_id', 'locations_id','most'
    ];

    protected $hidden = [];

    public function categories(){
        return $this->belongsTo('App\Category');
    }

    public function locations(){
        return $this->belongsTo('App\Location');
    }

    // public function categories(){
    //     return $this->hasMany('App\Category');
    // }

    // public function locations(){
    //     return $this->hasMany('App\Location');
    // }

}
