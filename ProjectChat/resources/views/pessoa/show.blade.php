@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Pessoas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('pessoa.index') }}">Pessoas</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $pessoa->id }}</p>
            <p><b>Nome: </b>{{ $pessoa->nome }}</p>
            <p><b>Cidade: </b>{{ $pessoa->cidade }}</p>
            <p><b>Endereço: </b>{{ $pessoa->endereco }}</p>


        </div>
        <a href="{{ route('pessoa.index') }}">Voltar</a>    {{--volta para compo fornecedores--}}
    </div>
@endsection