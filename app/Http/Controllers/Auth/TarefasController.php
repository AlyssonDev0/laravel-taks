<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use App\Http\Requests\TarefaRequest;
use Illuminate\Support\Facades\Auth;

class TarefasController extends Controller
{

    public function index()
    {
        $listaTarefas = Tarefa::where('user_id', Auth::id())->simplePaginate(3);
        $contadorInicial = ($listaTarefas->currentPage()-1) * $listaTarefas->perPage(); 
        $contadorInicial++;//"Adaptação" para contar itens da paginação kkk
        return view('dashboard', compact('listaTarefas', 'contadorInicial'));
    }

    public function create()
    {
        return view('register-tarefa');
    }   

    public function store(TarefaRequest $request){
        
        $tarefa = new Tarefa;
        $tarefa->nome = $request->nome;
        $tarefa->user_id = Auth::user()->id;
        $tarefa->complete = false;
        $tarefa->save();

        return redirect(route("dashboard"))->with('status', 'Tarefa salva com sucesso!');
    }

    public function destroy($id)
    {
        Tarefa::findOrFail($id)->delete();
        return redirect(route('dashboard'))->with('status', 'Tarefa Excluida com sucesso!');
    }

    public function createUpdateTarefa($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('update-tarefa', compact('tarefa'));
    }

    public function update(TarefaRequest $request)
    {
        Tarefa::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('status', "Tarefa Atualizada com Sucesso!");
    }
}
