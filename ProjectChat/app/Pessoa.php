<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'endereco',

    ];


    public function telefones()
    {
    return $this->hasMany(Telefone::class);
    //'pessoa_id');
    }
}
