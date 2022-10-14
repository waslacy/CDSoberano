<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login/index');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatória'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $session = [
                'email' => $request->email
            ];

            session(['user_logged' => $session]);

            return redirect('/admin');
        } else {
            return back()->with('danger', 'E-mail ou senha inválidos');
        }
    }
}
