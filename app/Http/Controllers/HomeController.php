<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Category::get();
        $depoimentos = Testimonial::get();

        return view('home/index')
        ->with('categorias', $categorias)
        ->with('depoimentos', $depoimentos);
    }

    public function contact(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );

        Mail::to(config('mail.from.address'))
        ->send(new SendContact($data));

        return redirect('/home#contato')
        ->with('success', 'Mensagem enviada com sucesso!');
    }
}
