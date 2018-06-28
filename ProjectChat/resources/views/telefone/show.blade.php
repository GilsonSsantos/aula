@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Telefones</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('telefone.index') }}">Telefones</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $telefone->id }}</p>
            {{--<p><b>Nome: </b>{{ $pessoa->nome }}</p>--}}
            {{-- <p><b>Telefone: </b>{{ $pessoa->nome }}</p>--}}

        </div>
        <a href="{{ route('telefone.index') }}">Voltar</a>    {{--volta para compo fornecedores--}}
    </div>
@endsection