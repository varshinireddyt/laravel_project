<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $table = 'experience';
    protected $fillable =['month','yearex','company','role','retyperole','description'];
}
