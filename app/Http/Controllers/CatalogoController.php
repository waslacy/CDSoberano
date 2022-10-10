<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::get();

        return view('catalogo/index')->with('categorias', $categorias);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $cat
     * @return \Illuminate\Http\Response
     */
    public function show($cat)
    {
        return view('catalogo/category', ['cat'=>$cat]);
    }

}
