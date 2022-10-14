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

        $tipos = Product::where('Category_id', $categoria->id)->select('tipo')->distinct()->get();
        $marcas = Product::where('Category_id', $categoria->id)->select('marca')->distinct()->get();

        return view('catalogo/category')
            ->with('cat', $cat)
            ->with('tipos', $tipos)
            ->with('marcas', $marcas)
            ->with('produtos', $produtos);
    }

    public function showFilteredProducts(Request $request, $cat)
    {
        $categoria = Category::where('name', $cat)->first();

        $marca = $request->marca;
        $tipo = $request->tipo;
        $name = $request->name ?? 'all';

        $produtos = Product::where([
            ['Category_id', $categoria->id],
            ($marca != 'all') ? ['marca', $marca] : ['Category_id', $categoria->id],
            ($tipo != 'all') ? ['tipo', $tipo] : ['Category_id', $categoria->id],
            ($name != 'all') ? ['name', 'LIKE', '%' . $name . '%'] : ['Category_id', $categoria->id]
        ])->get();

        $tipos = Product::where('Category_id', $categoria->id)->select('tipo')->distinct()->get();
        $marcas = Product::where('Category_id', $categoria->id)->select('marca')->distinct()->get();

        return view('catalogo/category')
            ->with('cat', $cat)
            ->with('tipos', $tipos)
            ->with('marcas', $marcas)
            ->with('produtos', $produtos);
    }
}
