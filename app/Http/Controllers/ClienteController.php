<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

class ClienteController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function create() {
        return view('cliente.create');
    }

    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf_cnpj = $request->cpf_cnpj;
        $cliente->pf_pj = $request->pf_pj;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect('/dashboard')->with('msg', 'Cliente cadastrado com sucesso!');
    }

    public function show($id) {
        $cliente = Cliente::findOrFail($id);

        $enderecos = Endereco::where([
            ['cliente_id', '=', $cliente->id]
        ])->get();

        return view('cliente.show', ['cliente' => $cliente, 'enderecos' => $enderecos]);
    }

    public function dashboard() {
        $search = request('search');

        if($search){
            $clientes = Cliente::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else{
        $clientes = Cliente::All();
        }

        return view('cliente.dashboard', ['clientes'=>$clientes, 'search'=>$search]);
    }


    public function destroy($id){

        $cliente = Cliente::findOrFail($id);

        Endereco::where([
            ['cliente_id', '=', $cliente->id]
        ])->delete();

        $cliente->delete();

        return redirect('/dashboard')->with('msg', 'Cliente excluído com sucesso!');
    }

    public function edit($id){

        $cliente = Cliente::findOrFail($id);

        return view('cliente.edit', ['cliente'=>$cliente]);
    }

    public function update(Request $request){

        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Cliente editado com sucesso!');
    }
}
