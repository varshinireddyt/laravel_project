<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //
    protected $table = 'education';
    protected $fillable =['monthone','monthtwo','year','qualification','heading','university'];
    
}
