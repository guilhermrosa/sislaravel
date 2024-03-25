@extends('layouts.main')
@section('title', 'Add Endereço')
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
    <h1>Cadastrar endereço</h1>
    <form action="/endereco" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id" >ID do cliente</label>
            <input type="text" class="form-control" id='cliente_id' name='cliente_id' value='{{ $cliente->id }}' readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="rua" >Rua</label>
            <input type="text" class="form-control" id='rua' name='rua'>
        </div>
        <br>
        <div class="form-group">
            <label for="numero" >Número</label>
            <input type="text" class="form-control" id='numero' name='numero'>
        </div>
        <br>
        <div class="form-group">
            <label for="complemento" >Complemento</label>
            <input type="text" class="form-control" id='complemento' name='complemento'>
        </div>
        <br>
        <div class="form-group">
            <label for="bairro" >Bairro</label>
            <input type="text" class="form-control" id='bairro' name='bairro'>
        </div>
        <br>
        <div class="form-group">
            <label for="cidade" >Cidade</label>
            <input type="text" class="form-control" id='cidade' name='cidade'>
        </div>
        <br>
        <div class="form-group">
            <label for="uf">UF</label>
            <select name="uf" id="uf" class="form-control">
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection