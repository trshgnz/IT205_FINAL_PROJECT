<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $summerCollectionProducts = Products::where('category', 'Summer Collection')->get();
        $bestSellerProducts = Products::where('category', 'Best Sellers' )->get();
        $complexGridProducts = Products::where('category', 'Shop')->get();
        return view('welcome')->with([
            'summerCollectionProducts' => $summerCollectionProducts,
            'bestSellerProducts' => $bestSellerProducts,
            'complexGridProducts' => $complexGridProducts
        ]);
    }

    public function show(Products $product)
    {
        return view('view-product')->with('product', $product);
    }
}
