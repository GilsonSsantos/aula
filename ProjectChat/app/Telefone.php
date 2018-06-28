<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'id',
        'id_pessoa',
        'ddd',
        'telefone',



    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
        //'pessoa_id');
    }
}
