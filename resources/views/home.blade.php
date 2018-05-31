@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Dados do Usuário:</p>
                    <p>Nome: {{ $user->name }}</p>
                    <p>E-mail: {{ $user->email }}</p>
                    <p>Github: {{ $user->github }}</p>
                    <p>Facebook: {{ $user->facebook }}</p>
                    <br>
                    @if($user->github)
                        <a class="btn btn-default disabled">Conectado com o Github</a>
                    @else
                        <a href="{{ url('/entrar/github') }}" class="btn btn-primary">Conectar com o Github</a>
                    @endif

                    @if($user->facebook)
                        <a class="btn btn-default disabled">Conectado com o Facebook</a>
                    @else
                        <a href="{{ url('/entrar/facebook') }}" class="btn btn-primary">Conectar com o Facebook</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
