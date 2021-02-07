<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function buku(){
        return $this->belongsTo('App\Buku');
    }
}
