<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    //Listar as contas
    public function index()
    {
        //Recuperar os registros do banco de dados
        $contas = Conta::orderByDesc('created_at')->get();
        //Carregar a VIEW
        return view('contas.index',['contas' => $contas]);
    }
    
    //Detahles da conta
    public function show(Conta $conta)
    {
        //Carregar a VIEW
        return view('contas.show', ['conta' => $conta]);
    }

    //Carregar o formulário cadastrar nova conta
    public function create()
    {
        //Carregar a VIEW
        return view('contas.create');
    }

    //Cadastrar no banco de dados nova conta
    public function store(ContaRequest $request)
    {
        //Validar Formulário
        $request->validated();


        //Cadastrar no data base na tabela "contas" os valores de todos os campos
      $conta = Conta::create($request->all());

      //Redirecionar o usuário e enviar mensagem de sucesso
      return redirect()->route('contas.show',['conta' => $conta->id])->with('success','Conta cadastrada com sucesso!!');  

    }

    //Carregar o formulário editar a conta
    public function edit(Conta $conta)
    {


        //Carregar a VIEW
        return view('contas.edit', ['conta' => $conta]);
    }

    //Editar no banco de dados a conta
    public function update(ContaRequest $request,Conta $conta)
    {
       //Validar formulário 
       $request->validated(); 

       //Editar as informações do registro no banco de dados
       $conta->update([

        'nome' => $request-> nome,
        'valor' => $request-> valor,
        'vencimento' => $request-> vencimento,
    ]);

     //Redirecionar o usuário e enviar mensagem de sucesso
     return redirect()->route('contas.show',['conta' => $conta->id])->with('success','Conta editada com sucesso!!');  

       
    }

    //Excluira conta no banco de dados
    public function destroy(Conta $conta)
    {
       //Excluir o registro no banco de dados
       $conta->delete(); 

       return redirect()->route('contas.index')->with('success','Conta apagada com sucesso!!');

    }

}
