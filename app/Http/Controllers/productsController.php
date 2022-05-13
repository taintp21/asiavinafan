<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){
        $data = products::all();
        $count = count($data);
        return view('backend.products.index', compact('data', 'count'));
    }
}
