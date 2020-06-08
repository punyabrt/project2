<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
       
        return view('index')->with('products',Product::all());
     
      
    }
}
