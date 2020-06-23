<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //Mass assign
    protected $fillable = [
        'product_id',
        'title',
        'body'
    ];

    //Relations
    public function product(){
        return $this->belongsTo('App\Product');
    }

    
}
