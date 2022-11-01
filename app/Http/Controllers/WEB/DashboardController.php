<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $active_products = Product::active()->count();
        $products = Product::count();
        $users = User::count();
        return view('admin.dashboard',compact('active_products','products','users'));
    }

    public function login()
    {
        return view('admin.auth.login');
    }


}
