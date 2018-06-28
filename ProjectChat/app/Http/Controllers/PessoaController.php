<?php

namespace Chat\Http\Controllers;

use Chat\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pessoa.index', [
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
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa($request->all());
        if ($pessoa->save()) {
            return redirect()->route('pessoa.index')->with('message', 'Pessoa criada com sucesso!');
        } else {
            return redirect()->route('pessoa.index')->with('message', 'Erro na criação da pessoa!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Chat\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return view('pessoa.show', [
            'pessoa' => $pessoa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Chat\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoa.edit', array('pessoa' => $pessoa));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Chat\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->update($request->all());
        return redirect()->route('pessoa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Chat\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoa.index');
    }
}
