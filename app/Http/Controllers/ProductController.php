<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
    public function init()
    {
        $products = Product::orderBy('id')->paginate(100);
        return view('products',['products' => $products]);
    }

    public function store()
    {
        $product = new Product;
        $product->name        = $_POST['name'];
        $product->description = $_POST['description'];
        $product->image       = $_POST['image'];
        $product->price       = $_POST['price'];
        $product->category    = $_POST['category'];
        $product->save();
        return redirect()->route('products')->with('message', 'Product created successfully!');
    }
  
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit-product',compact('product'));
    }
  
    public function update($id)
    {
        $product = Product::findOrFail($id);
        $product->name        = $_POST['name'];
        $product->description = $_POST['description'];
        $product->image       = $_POST['image'];
        $product->price       = $_POST['price'];
        $product->category    = $_POST['category'];
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }
  
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        redirect(route('products')->with('alert-success','Product has been deleted!'));
    }
}