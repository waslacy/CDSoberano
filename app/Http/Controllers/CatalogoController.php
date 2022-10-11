<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
     * Display the specified category.
     *
     * @param  int  $cat
     * @return \Illuminate\Http\Response
     */
    public function show($cat)
    {
        $categoria = Category::where('name', $cat)->first();
        $produtos = Product::where('Category_id', $categoria->id)->get();

        return view('catalogo/category')
        ->with('cat', $cat)
        ->with('produtos', $produtos);
    }

}
