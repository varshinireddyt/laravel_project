<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //
    protected $fillable = ['id','name'];
    
    public function item()
    {
        return $this->belongsTo('App/Home');
    }
}
