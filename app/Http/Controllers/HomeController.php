<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class HomeController extends Controller
{
    public function init()
    {
        $products = app('App\Http\Controllers\ProductController')->GetProducts();
        //var_dump($products);
        return view('home',['products' => $products, 'x' => null]);
    }
}