<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TarefaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userId = auth()->user()->id; // Obtém o ID do usuário autenticado  
        return [
                'nome' => ['required','string','max:100','min:3',
                Rule::unique('tarefas')->where(function ($query) use ($userId) {
                    return $query->where('user_id', $userId);
                })],
            ];
    }

     /* Alterando Mensagens de Erro do Request*/
     public function messages()
     {
         return [
             'nome.unique' => 'Já existe uma tarefa com essa descrição.',
             'max' => 'Número máximo de caracteres permitido é: 100.',
             'min' => 'Número minimo de caracteres permitido é: 3.',
         ];
     }
}
