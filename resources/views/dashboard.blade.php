@extends('layouts.main')
@section('title', 'Dashboard')

@section('navitem')
    @auth
    <ul class="navbar-item">
        <a href="/cliente/create" class="nav-link">Cadastrar</a>
    </ul>
    <ul class="navbar-item">
    <form action="/logout" method="POST">
       @csrf 
       <a href="/logout" class="nav-link" 
        onclick="event.preventDefault();
            this.closest('form').submit();">Sair</a>
    </form>
    </ul>
    @endauth
@endsection

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-clientes-container">
    @if(count($clientes)>0)
    @else
        <p>Nenhum cliente cadastrado. <a href="/cliente/create">Cadastrar cliente.</a></p>
    @endif
</div>

@endsection