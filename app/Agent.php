<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['mle','nom', 'prenom', 'affectation', 'diplome', 'observation'];
    //
}
