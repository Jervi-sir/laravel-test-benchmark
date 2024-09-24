<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['store', 'saves'])
            ->inRandomOrder()
            ->paginate(10);

        return response()->json($products);
    }
}
