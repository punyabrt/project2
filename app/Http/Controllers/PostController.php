<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;
class PostController extends Controller
{
    public function index()
    {
       
        return view('post')->with('products',Product::all());
     
      
    }
     
      
    
}
