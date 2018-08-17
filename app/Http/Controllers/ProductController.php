<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
    public function init()
    {
        $products = Product::where('active',1)->orderBy('id')->paginate(100);
        return view('products',['products' => $products]);
    }

    public function GetProducts(){
        $products = Product::where('active',1)->orderBy('id')->paginate(100);
        return $products;
    }

    public function preview($id)
    {
        $products = $id? Product::findOrFail($id) : $_POST;
        return view('product',['product' => $products]);
    }

    public function store()
    {
        //var_dump($_FILES);exit();
        $product = new Product;
        $product->name        = $_POST['name'];
        $product->description = $_POST['description'];
        $product->image       = $_FILES['image']['name'];
        $product->price       = $_POST['price'];
        $product->category    = $_POST['category'];
        $product->save();

        $uploaddir = public_path().'/img/'.$product->id.'/';

        if (!file_exists($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }

        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

        return redirect('products')->with('message', 'Product updated successfully!');
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
        $product->image       = $_FILES['image']['name'];
        $product->price       = $_POST['price'];
        $product->category    = $_POST['category'];
        $product->save();

        $uploaddir = public_path().'/img/'.$product->id.'/';

        if (!file_exists($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }

        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

        return redirect('products')->with('message', 'Product updated successfully!');
    }
  
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->active = false;
        $product->save();
        return redirect('products')->with('alert-success','Product has been deleted!');
    }
}