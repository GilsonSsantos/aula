<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'id',
        'numero',
        'id_pessoa'
    ];

    public function pessoa() {
        return $this->hasOne(Pessoa::class);
    }
}
