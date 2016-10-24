<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rating',
        'comments'
    ];
    //As we have already declared propertu() on image model so different here
    public function property(){
        return $this->belongsTo('App\Property');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
