@extends('layouts.main')
@section('title', 'Welcome')
@auth 
@section('nav-btn')
        <a href="/dashboard" class="nav-link">Clientes</a>
@endsection
@endauth
@guest
@section('nav-btn')
        <a href="/register" class="nav-link">Register</a>
@endsection
@endguest
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 welcome bg-dark">

                    <h1 class="display-3">Desafio</h1>

                    <p class="display-6">Sistema de autenticação de usuário, CRUD de clientes e CRUD de endereços de clientes.</p>
                    <a href="/login" class="btn btn-secondary">Login</a>

                    <a href="/register" class="btn btn-secondary">Register</a>

                </div>

            </div>

        </div>
@endsection