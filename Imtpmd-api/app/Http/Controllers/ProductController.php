<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($ean_code)
    {
      $ean_code = Product::where('ean_code', '=', $ean_code)->first();

    return response()->json([
      "ean_code" => $ean_code,
    ]);
    }
}
