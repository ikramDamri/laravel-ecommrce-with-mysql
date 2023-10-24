<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productList() {
        //On récupère les products
        $products = Product::all();

        // On transmet les products au view
        return view("products", compact("products"));
        }


    public function show(Product $product)
    {
        return view('show',compact('product'));
    }

}
