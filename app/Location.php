<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $table = 'locations';

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];

    // public function locationGallery(){
    //     return $this->hasMany(Gallery::class, 'galleries_id', 'id');
    // }

    public function locationGallery(){
        return $this->belongsTo('App\Gallery');
    }
}
