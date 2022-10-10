<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    /* FUNÇÕES DE VIEWS (GET) */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::select('id', 'name')->get();

        return view('admin/index', ['categorias' => $categorias]);
    }

    public function showEditCategory($cat)
    {
        if ($cat == 'novo') {
            return view('admin/editCategory', ['cat' => $cat]);
        } else {
            $categoria = Category::where('id', $cat)->first();

            return view('admin/editCategory', ['cat' => $cat, 'categoria' => $categoria]);
        }
    }

    public function listProducts($cat)
    {
        return view('admin/listProducts', ['cat' => $cat]);
    }

    public function showEditProduct($cat, $prod)
    {
        return view('admin/editProduct', ['cat' => $cat, 'prod' => $prod]);
    }


    /* FUNÇÕES DE DB (POST) */

    public function editCategory(Request $request, $cat) 
    {
        if ($cat == 'novo') {
            $categoria = new Category();

            $categoryName = $request->name;
            $image = $request->image;
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime("now")) . '.' . $extension;
            $image->move(public_path('src/cat'), $imageName);

            $categoria->name = $categoryName;
            $categoria->image = $imageName;
            $categoria->save();

            return redirect('/admin');
        }
    }
}
