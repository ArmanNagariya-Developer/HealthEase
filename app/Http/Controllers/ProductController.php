<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $medicines = Medicine::paginate(6);
        return view("products.product",compact('medicines'));
    }
    
    public function show($id){
        $medicine = Medicine::findOrFail($id);
        return view('products.product-details', compact('medicine'));

    }
}
