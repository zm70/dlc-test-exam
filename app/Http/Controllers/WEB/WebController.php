<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function apiDoc()
    {
        return view('api-doc');
    }
}
