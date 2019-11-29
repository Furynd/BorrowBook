<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

    protected $fillable = ['book_name', 'author', 'summary', 'price', 'cover_pictures', 'user_id'];
}
