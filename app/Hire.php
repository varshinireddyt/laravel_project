<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    //
    protected $table = 'hires';
    protected $fillable =['name','rate','input1','input2','input3','input4','input5'];

   
}
