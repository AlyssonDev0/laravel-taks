<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlterarSenhaRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function show()
    {
        return view('alterar_senha');
    }

    public function update(AlterarSenhaRequest $request)
    {
        if (!Hash::check($request->senha_atual, auth()->user()->password)) {
            return redirect()->back()->withErrors(['senha_atual' => 'Senha atual não confere!']);
        } else {
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->nova_senha)
            ]);
            return redirect(route('create-update-senha'))->with('status', "Senha Alterada com Sucesso!");
        }
    }
}
