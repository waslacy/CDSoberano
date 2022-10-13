<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

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
        $depoimentos = Testimonial::select('id', 'name')->get();

        return view('admin/index')
        ->with('categorias', $categorias)
        ->with('depoimentos', $depoimentos);
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

    public function showEditTestimonial($testi)
    {
        if ($testi == 'novo'){
            return view('admin/editTestimonial', ['testi' => $testi]);
        } else {
            $testimonial = Testimonial::where('id', $testi)->first();

            return view('admin/editTestimonial', ['testi' => $testi, 'testimonial' => $testimonial]);
        }
    }

    public function listProducts($cat)
    {
        $categoryName = Category::where('id', $cat)->value('name');

        $produtos = Product::where('Category_id', $cat)->get();

        return view('admin/listProducts', ['cat' => $cat, 'categoryName' => $categoryName, 'produtos' => $produtos]);
    }

    public function showEditProduct($cat, $prod)
    {
        if ($prod == 'novo') {
            return view('admin/editProduct', ['cat' => $cat, 'prod' => $prod]);
        } else {
            $produto = Product::where('id', $prod)->first();

            return view('admin/editProduct', ['cat' => $cat, 'prod' => $prod, 'produto' => $produto]);
        }
    }


    /* FUNÇÕES DE ADD DB (POST) */

    public function editCategory(Request $request, $cat) 
    {
        if ($cat == 'novo') {
            $categoria = new Category();
        } else {
            $categoria = Category::where('id', $cat)->first();
        }

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

    public function editProduct(Request $request, $cat, $prod)
    {
        if ($prod == 'novo') {
            $produto = new Product();
        } else {
            $produto = Product::where('id', $prod)->first();
        }

        $productName = $request->name;
        $productDescription = $request->description;
        $productType = $request->tipo;
        $productMarca = $request->marca;

        $image = $request->image;
        $extension = $image->extension();
        $imageName = md5($image->getClientOriginalName() . strtotime("now")) . '.' . $extension;
        $image->move(public_path('src/prod'), $imageName);

        $produto->name = $productName;
        $produto->description = $productDescription;
        $produto->tipo = $productType;
        $produto->marca = $productMarca;
        $produto->image = $imageName;
        $produto->Category_id = $cat;
        $produto->save();

        return redirect('/admin' . '/' . $cat);
    }

    public function editTestimonial(Request $request, $testi)
    {
        if ($testi == 'novo'){
            $depoimento = new Testimonial();
        } else {
            $depoimento = Testimonial::where('id', $testi)->first();
        }

        $depoimento->name = $request->name;
        $depoimento->sigla = $request->sigla;
        $depoimento->empresa = $request->empresa;
        $depoimento->depoimento = $request->depoimento;
        $depoimento->save();

        return redirect('/admin');
    }

    /* FUNÇOES DE REMOVE DB */

    public function removeCategory($cat)
    {
        $categoria = Category::where('id', $cat)->first();

        unlink(public_path('src/cat/' . $categoria->image));

        $categoria->delete();

        return redirect('/admin');
    }

    public function removeProduct($cat, $prod)
    {
        $produto = Product::where('id', $prod)->first();

        unlink(public_path('src/prod' . $produto->image));

        $produto->delete();

        return redirect('/admin' . '/' . $cat);
    }

    public function removeTestimonial($testi)
    {
        $testimonial = Testimonial::where('id', $testi)->first();
        $testimonial->delete();

        return redirect('/admin');
    }
}
