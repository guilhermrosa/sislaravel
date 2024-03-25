<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Cliente;

class EnderecoController extends Controller
{
    
    public function create($id) {
        $cliente = Cliente::findOrFail($id);
        return view('endereco.create', ['cliente' => $cliente]);
    }

    public function store(Request $request){
        $endereco = new Endereco;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->cliente_id = $request->cliente_id;

        $endereco->save();

        return redirect('/dashboard')->with('msg', 'Endereço cadastrado com sucesso!');
    }

    public function destroy($id){

        Endereco::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Endereco excluído com sucesso!');
    }

    public function edit($id){

        $endereco = Endereco::findOrFail($id);

        return view('endereco.edit', ['endereco'=>$endereco]);
    }

    public function update(Request $request){

        Endereco::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Endereco editado com sucesso!');
    }
    
}
