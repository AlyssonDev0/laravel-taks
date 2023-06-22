<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use App\Http\Requests\TarefaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class TarefasController extends Controller
{
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

        return redirect(route("cadastrar-tarefa"))->with('msg', 'Tarefa salva com sucesso!');
    }
}
