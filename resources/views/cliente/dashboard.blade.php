@extends('layouts.main')
@section('title', 'Clientes')

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

<div id="search-container" class="col-md-5 offset-md-1 mt-4">
    <form action="/dashboard" method='GET'>
        <input type="text" id="search" name='search' class="form-control" placeholder="Digite o nome do cliente">
        <button type="submit" class="btn btn-dark delete-btn mt-2">Pesquisar</button>
        
    </form>
</div>
<br>

<div class="col-md-10 offset-md-1 dashboard-clientes-container mt-4">
    @if(count($clientes)>0)
    <table class="table ">
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Nome</th>
                <th scope='col'>CPF/CNPJ</th>
                <th scope='col'>Ações</th>
                <th scope='col'>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td scoupe='row'>{{ $loop->index + 1 }}</td>
                    <td><a href="/cliente/{{ $cliente->id }}">{{ $cliente->nome }}</a></td>
                    <td>{{ $cliente->cpf_cnpj }}</td>
                    <td class="d-flex justify-content-start">
                    
                    <a href="/cliente/edit/{{ $cliente->id }}" class="btn btn-success edit-btn">Editar</a>
                    <form action="/cliente/{{ $cliente->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                    </td>
                    <td>
                        <a href="/cliente/{{ $cliente->id }}" class="btn btn-dark enderecos-btn" >Endereços</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhum cliente cadastrado.</p>
    @endif
    <h1> <a href="/cliente/create" class="btn btn-dark cadastrar-btn">Cadastrar cliente</a></h1>
</div>
@endsection