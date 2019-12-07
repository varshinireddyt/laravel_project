<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $table = 'works';
    protected $fillable =['image','input1','input2'];

}
