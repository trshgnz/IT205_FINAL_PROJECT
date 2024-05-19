<?php

namespace App\Http\Controllers;

use App\Models\Orders;
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

    public function addToCart(Request $request)
    {
        $product = Products::find($request->product_id);
        
        $cart = Orders::where('user_id', auth()->user()->id)
            ->where('status', 'pending')
            ->first();

        if (!$cart) {
            $cart = new Orders();
            $cart->user_id = auth()->user()->id;
            $cart->status = 'pending';
            $cart->total_price = $product->price;
            $cart->save();

            $cart->products()->attach($product->id, [
            'quantity' => 1,
            'price' => $product->price
            ]);
        } else {
            $existingProduct = $cart->products()->where('products_id', $product->id)->first();
            if ($existingProduct) {
            $existingProduct->pivot->quantity += 1;
            $existingProduct->pivot->save();
            } else {
            $cart->products()->attach($product->id, [
                'quantity' => 1,
                'price' => $product->price
            ]);
            }
            $cart->total_price += $product->price;
            $cart->save();
        }

        return redirect()->route('landing-page');
    }

    public function showCart()
    {
        $cart = Orders::where('user_id', auth()->user()->id)
            ->where('status', 'pending')
            ->first();
        return view('checkout')->with('cart', $cart);
    }

    public function checkout(Request $request)
    {
        $cart = Orders::where('user_id', auth()->user()->id)
            ->where('status', 'pending')
            ->first();

        if ($cart) {
            $cart->status = 'processing';
            
            // Adjust quantity based on input
            foreach ($request->product_id as $key =>$productId) {
            $quantity = $request->quantity[$key];
            $existingProduct = $cart->products()->where('products_id', $productId)->first();
            if ($existingProduct) {
                $existingProduct->pivot->quantity = $quantity;
                $existingProduct->pivot->save();
            }
            }
            
            // Update total price
            $totalPrice = 0;
            foreach ($cart->products as $product) {
            $totalPrice += $product->pivot->price * $product->pivot->quantity;
            }
            $cart->total_price = $totalPrice;
            
            $cart->save();
            
            return redirect()->route('landing-page');
        } else {
            return redirect()->route('landing-page')->with('error', 'No items in the cart to checkout.');
        }
        }
}
