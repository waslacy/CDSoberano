<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOrcamento;

class OrcamentoController extends Controller
{
    public function index()
    {
        $categorias = Category::get();

        return view('orcamento/index')
        ->with('categorias', $categorias);
    }

    public function orcamento(Request $request)
    {
        if ($request->arquivo){
            $arquivo = $request->arquivo;
            $extension = $arquivo->extension();
            $arquivoName = md5($arquivo->getClientOriginalName() . strtotime("now")) . '.' . $extension;
            $arquivo->move(public_path('src/orcamentos'), $arquivoName);
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'cat' => $request->cat,
            'arquivo' => $arquivoName ?? null,
            'message' => $request->message
        );

        Mail::to(config('mail.from.address'))
        ->send(new SendOrcamento($data));

        return back()
        ->with('success', 'Mensagem enviada com sucesso!');
    }
}
