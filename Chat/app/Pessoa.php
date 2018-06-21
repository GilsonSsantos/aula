<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'id',
        'nome'
    ];

    public function telefones() {
        return $this->hasMany(Telefone::class);
    }
}
