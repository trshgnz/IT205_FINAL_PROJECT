<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutShowController extends Controller
{
    public function checkoutshow()
    {
        return view('checkoutshow');
    }
}
