<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display the specified resource.
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        return view('produto/index', ['slug' => $slug]);
    }
}
