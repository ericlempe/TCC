<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Local extends Model 
{
    protected $table = "locais";
    protected $fillable = ['nome', 'bloco', 'latitude', 'longitude'];

    public function profissionais()
    {
    	return $this->belongsToMany(Profissional::class);
    }
}
