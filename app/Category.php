<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = [
        'category'
    ];

    protected $hidden = [];

    public function categoryGallery(){
        return $this->belongsTo('App\Gallery');
    }
}