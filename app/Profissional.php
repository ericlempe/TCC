<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Profissional extends Model
{
    protected $table = "profissionais";
    protected $fillable = ['nome', 'cargo', 'ativo', 'foto'];

    public function locais()
    {
    	return $this->belongsToMany(Local::class);
    }

    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }
}
