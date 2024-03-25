@extends('layouts.main')
@section('title', 'Edit Endereco')

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

<div id="endereco-add-container" class="col-md-6 offset-md-3 formulario bg-dark">
    <h1>Editar endereço</h1>
    <form action="/endereco/update/{{ $endereco->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id" >ID do cliente</label>
            <input type="text" class="form-control" id='cliente_id' name='cliente_id' value='{{ $endereco->cliente_id }}' readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="rua" >Rua</label>
            <input type="text" class="form-control" id='rua' name='rua' value='{{ $endereco->rua }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="numero" >Número</label>
            <input type="text" class="form-control" id='numero' name='numero' value='{{ $endereco->numero }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="complemento" >Complemento</label>
            <input type="text" class="form-control" id='complemento' name='complemento' value='{{ $endereco->complemento }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="bairro" >Bairro</label>
            <input type="text" class="form-control" id='bairro' name='bairro' value='{{ $endereco->bairro }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="cidade" >Cidade</label>
            <input type="text" class="form-control" id='cidade' name='cidade' value='{{ $endereco->cidade }}'>
        </div>
        <br>
        <div class="form-group">
            <label for="uf">UF</label>
            <select name="uf" id="uf" class="form-control">
            <option value="AC" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>AC</option>
            <option value="AL" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>AL</option>
            <option value="AP" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>AP</option>
            <option value="AM" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>AM</option>
            <option value="BA" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>BA</option>
            <option value="CE" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>CE</option>
            <option value="DF" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>DF</option>
            <option value="ES" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>ES</option>
            <option value="GO" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>GO</option>
            <option value="MA" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>MA</option>
            <option value="MT" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>MT</option>
            <option value="MS" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>MS</option>
            <option value="MG" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>MG</option>
            <option value="PA" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>PA</option>
            <option value="PB" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>PB</option>
            <option value="PR" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>PR</option>
            <option value="PE" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>PE</option>
            <option value="PI" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>PI</option>
            <option value="RJ" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>RJ</option>
            <option value="RN" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>RN</option>
            <option value="RS" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>RS</option>
            <option value="RO" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>RO</option>
            <option value="RR" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>RR</option>
            <option value="SC" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>SC</option>
            <option value="SP" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>SP</option>
            <option value="SE" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>SE</option>
            <option value="TO" {{ $endereco->pf_pj == 1 ? "selected='selected" : "" }}>TO</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Editar">
    </form>
</div>
@endsection