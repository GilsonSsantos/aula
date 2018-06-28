@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Telefones</h1>
        <p>
            <a class="btn btn-info" href="{{route('telefone.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>ddd</th>
                    <th>Telefone</th>
                    <th>Opções</th>

                </tr>
                </thead>
                <tbody>

                @foreach($telefones as $telefone)
                    <tr>
                        <th><a href="{{ route('telefone.show', $telefone->id  ) }}">
                                {{ $telefone->id }}
                            </a>
                        </th>
                        <td>
                            @foreach($pessoas as $pessoa)
                                @if ($pessoa->id == $telefone->id_pessoa)
                                    {{ $pessoa->nome }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $telefone->ddd }}</td>
                        <td>{{ $telefone->telefone }}</td>

                        <td>
                            <form action="{{ route('telefone.edit', $telefone->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('telefone.destroy', $telefone->id) }}" method="POST">
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