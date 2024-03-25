@extends('layouts.main')
@section('title', 'Add Cliente')
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
    <h1>Cadastrar cliente</h1>
    <form action="/clientes" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" id='nome' name='nome'>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >CPF/CNPJ</label>
            <input type="text" class="form-control" id='cpf_cnpj' name='cpf_cnpj'>
        </div>
        <br>
        <div class="form-group">
            <label for="pf_pj">Pessoa</label>
            <select name="pf_pj" id="pf_pj" class="form-control">
                <option value="F">Física</option>
                <option value="J">Jurídica</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >Telefone</label>
            <input type="text" class="form-control" id='telefone' name='telefone'>
        </div>
        <br>
        <div class="form-group">
            <label for="nome" >E-mail</label>
            <input type="text" class="form-control" id='email' name='email'>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection