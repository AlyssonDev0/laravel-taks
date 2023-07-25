<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\AlterarSenhaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function show()
    {
        return view('alterar_senha');
    }

    public function update(AlterarSenhaRequest $request)
    {
        $user = Auth::user();
        Auth::user()->name;
        if (Hash::check($request->senha_atual, $user->password)) {
            Auth::user->update(['password' => Hash::make($request->password)]);
            return redirect()->route('home')->with('success', 'Senha alterada com sucesso!');
        } else {
            return back()->withErrors(['current_password' => 'A senha atual está incorreta.']);
        }
    }
}

