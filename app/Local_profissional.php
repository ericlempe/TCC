<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Local_profissional extends Model 
{
    protected $table = "local_profissional";

    public function profissional()
    {
    	return $this->hasMany(Profissional::class);
    }

    public function local()
    {
    	return $this->hasMany(Local::class);
    }
}
