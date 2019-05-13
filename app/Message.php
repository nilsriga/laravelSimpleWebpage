<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'owner_id');
        // return $this->belongsTo(User::class);
    }

    // public function posts(){
    //     return $this->hasOne('App\User', 'owner_id', 'content', 'title');
    // }
}
