@extends('layouts.main')
@section('title', 'Cliente')
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

    <div class="col-md-10 offset-md-1 mt-4">
        <div class="card user-card-full">
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-6 " align="center">
                    <h3>Nome: </h3><p>{{ $cliente->nome }}</p>
                    @if($cliente->pf_pj == 'F')
                    <h3>CPF: </h3><p>{{ $cliente->cpf_cnpj }}</p>
                    @else
                    <h3>CNPJ: </h3><p>{{ $cliente->cpf_cnpj }}</p>
                    @endif
                    </div>
                    <div class="col-sm-6" align="center">
                    <h3>Telefone: </h3><p>{{ $cliente->telefone }}</p>
                    <h3>E-mail: </h3><p>{{ $cliente->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-enderecos-container">
    @if(count($enderecos)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Rua</th>
                <th scope='col'>Nº</th>
                <th scope='col'>Complemento</th>
                <th scope='col'>Bairro</th>
                <th scope='col'>Cidade</th>
                <th scope='col'>UF</th>
                <th scope='col'>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enderecos as $endereco)
                <tr>
                    <td scoupe='row'>{{ $loop->index + 1 }}</td>
                    <td>{{ $endereco->rua }}</td>
                    <td>{{ $endereco->numero }}</td>
                    <td>{{ $endereco->complemento }}</td>
                    <td>{{ $endereco->bairro }}</td>
                    <td>{{ $endereco->cidade }}</td>
                    <td>{{ $endereco->uf }}</td>
                    <td class="d-flex justify-content-start">
                    <a href="/endereco/edit/{{ $endereco->id }}" class="btn btn-success edit-btn">Editar</a>
                    <form action="/endereco/{{ $endereco->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhum endereço cadastrado.</p>
    @endif
    <a href="/endereco/create/{{$cliente->id}}" class="btn btn-dark edit-btn">Adicionar endereço</a>
    </div>
   
@endsection