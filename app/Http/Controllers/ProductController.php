<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function create()
    {        
        return view('products.create');
    }
    
    public function store(ProductRequest $request)
    {        
        $product = new Product;

        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();
        return redirect()->route('products.index')
                         ->with('info', 'El producto fue guardado');
    }

    public function edit($id)
    {   
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(ProductRequest $request, $id)
    {        
        $product = Product::find($id);

        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();
        return redirect()->route('products.index')
                         ->with('info', 'El producto fue actualizado');
    }
    
    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show', compact('products'));
    }
    
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return back()->with('info', 'El producto fue eliminado');
    }

}
