<?php

namespace Chat\Http\Controllers;

use Chat\Pessoa;
use Chat\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Telefone.index', [
            'telefones' => Telefone::all(),
            'pessoas' => Pessoa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telefone.create', [
        'pessoa' => Pessoa::orderBy('nome')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefone = new Telefone($request->all());
        if ($telefone->save()) {
            return redirect()->route('telefone.index')->with('message', 'Telefone criado com sucesso!');
        } else {
            return redirect()->route('telefone.index')->with('message', 'Erro na criação do telefone!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Chat\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show(Telefone $telefone)
    {
        return view('telefone.show', [
            'telefone' => $telefone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Chat\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefone $telefone)
    {
        return view('telefone.edit', array('telefone' => $telefone));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Chat\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefone $telefone)
    {
        $telefone->update($request->all());
        return redirect()->route('telefone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Chat\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefone $telefone)
    {
        $telefone->delete();
        return redirect()->route('telefone.index');
    }
}
