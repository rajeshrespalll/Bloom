<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function list(){
        return Product::all();
        //return view('product.list', ['data' => $data]);
    }
}
