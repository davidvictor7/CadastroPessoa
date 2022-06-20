<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePessoa;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Prophecy\Promise\ReturnPromise;

class PessoaController extends Controller
{

    public function Create(){
        return view('admin.pessoa.create');
    }

    public function Index(){
        $pessoa = Pessoa::all();
        return view('admin.pessoa.index', compact('pessoa'));
    }

    public function Store(StoreUpdatePessoa $request){
        Pessoa::create([
            'Nome' => $request->nome,
            'Matricula' => $request->matricula,
            'Nascimento' => $request->nascimento,
            'Email' => $request->email
        ]);

        return redirect()->route('Index')->with('message','Usuario cadastrado');
    }

    public function Destroy($id){
        $dado = Pessoa::find($id);
        $dado->delete();
        return redirect()->route('Index')->with('message', 'Usuario excluido');
    }

    public function Edit($id){
        $pessoa = Pessoa::find($id);
        return view('admin.pessoa.edit', compact('pessoa'));
    }

    public function Update(Request $request, $id){
        $pessoa = Pessoa::find($id);
        $pessoa->update([
            'Nome' => $request->nome,
            'Matricula' => $request->matricula,
            'Nascimento' => $request->nascimento,
            'Email' => $request->email
        ]);

        Return redirect()->route('Index')->with('message','Usuario atualizado com sucesso');;
    }
}
