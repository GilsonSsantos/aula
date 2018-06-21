@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Mensagens</h1>
        <p>
            <a class="btn btn-info" href="{{route('message.create')}}">Enviar Mensagem</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Mensagem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th>{{ $message->id }}</th>
                        <td>{{ $message->user_id }}</td>
                        <td>{{ $message->text }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
