<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catalogo/index');
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
