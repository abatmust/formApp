<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['intitule','debut', 'fin', 'observation'];
    
}
