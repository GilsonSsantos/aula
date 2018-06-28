@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Pessoas</h1>
        <p>
            <a class="btn btn-info" href="{{route('pessoa.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Opções</th>

                </tr>
                </thead>
                <tbody>

                @foreach($pessoas as $pessoa)
                    <tr>
                        <th><a href="{{ route('pessoa.show', $pessoa->id  ) }}">
                                {{ $pessoa->id }}
                            </a>
                        </th>
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->endereco }}</td>
                        <td>{{ $pessoa->cidade }}</td>
                        <td>
                            <form action="{{ route('pessoa.edit', $pessoa->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('pessoa.destroy', $pessoa->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                    Excluir
                                </button>
                            </form>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection