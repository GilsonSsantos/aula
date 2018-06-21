<?php

namespace Agenda\Http\Controllers;

use Agenda\Telefone;
use Illuminate\Http\Request;

class TelefonesController extends Controller
{

    public function store(Telefone $telefone)
    {
        try {
            $telefone->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
