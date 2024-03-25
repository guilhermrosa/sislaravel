@extends('layouts.main')
@section('title', 'Edit Cliente')
@auth
@section('nav-btn')
    
    <form action="/logout" method="POST">
       @csrf 
       <a href="/logout" class="nav-link" 
        onclick="event.preventDefault();
            this.closest('form').submit();">Sair</a>
    </form>
    </ul>
    
@endsection
@endauth
@section('content')

<div id="cliente-add-container" class="col-md-6 offset-md-3 formulario bg-dark">
    <h1>Editar cliente</h1>
    <form action="/cliente/update/{{ $cliente->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" id='nome' name='nome' value='{{ $cliente->nome }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >CPF/CNPJ</label>
            <input type="text" class="form-control" id='cpf_cnpj' name='cpf_cnpj' value='{{ $cliente->cpf_cnpj }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="pf_pj">Pessoa</label>
            <select name="pf_pj" id="pf_pj" class="form-control">
                <option value="F">Física</option>
                <option value="J" {{ $cliente->pf_pj == 1 ? "selected='selected" : "" }}>Jurídica</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >Telefone</label>
            <input type="text" class="form-control" id='telefone' name='telefone' value='{{ $cliente->telefone }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >E-mail</label>
            <input type="text" class="form-control" id='email' name='email' value='{{ $cliente->email }}'>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value='Editar'>
    </form>
</div>

@endsection