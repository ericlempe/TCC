<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Profissional extends Model
{
     protected $table = "profissionais";
     protected $fillable = ['nome', 'cargo', 'ativo'];
}
