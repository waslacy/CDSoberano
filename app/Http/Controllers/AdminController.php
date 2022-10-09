<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function showEditCategory($cat)
    {
        # code...
    }

    public function listProducts($cat)
    {
        return view('admin/listProducts', ['cat' => $cat]);
    }

    public function showEditProduct($cat, $prod)
    {
        return view('admin/editProduct', ['cat' => $cat, 'prod' => $prod]);
    }
}
