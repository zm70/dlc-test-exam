<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $categories = Category::with('products')->paginate(10);
        return view('product.index',compact('categories'));
    }

}
