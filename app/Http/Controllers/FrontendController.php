<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;

class FrontendController extends Controller
{
    public function getProduct($url)
    {
        $producto = Producto::with('categoria', 'tipo', 'marca')->where('url', $url)->first();

        return View('frontend.single-product', compact('producto'));
    }
}
