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
        $listaTarefas = Tarefa::where('user_id', Auth::id())->simplePaginate(2);

        return view('dashboard', compact('listaTarefas'));
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

        return redirect(route("cadastrar-tarefa"))->with('status', 'Tarefa salva com sucesso!');
    }
}
