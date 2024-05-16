<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JellypopShowController extends Controller
{
    public function jellypopshow(){
        return view('jellypopshow');
    }
}