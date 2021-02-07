<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }

    public function genre(){
        return $this->belongsToMany(
            'App\Genre',
            'genre_buku',
            'buku_id',
            'genre_id'
        );
    }
}
