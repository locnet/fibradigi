<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    // mass asignement

    protected $fillable = ['first_name','phone','post_code','email','message'];
}
