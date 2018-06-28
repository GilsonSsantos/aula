@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Criar Contato</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('telefone.index') }}">Telefones</a></li>
            <li class="breadcrumb-item active">Criar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('telefone.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="pessoaSelect">Nome</label>
                    <select name="id_pessoa" class="form-control" id="pessoaSelect">
                        <option value="empty">Selecione uma Pessoa</option>
                        @foreach($pessoa as $pessoa)
                            <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">ddd</label>
                    <input type="text" class="form-control" name="ddd" placeholder="Ddd">
                </div>

                <div class="form-group">
                    <label for="text">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                </div>

                <button class="btn btn-info">Enviar</button>
            </form>
        </div>

    </div>
@endsection