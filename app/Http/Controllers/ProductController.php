<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewAllProducts(){
      return Product::all();
    }

    public function viewMyCart(){
        return Cart::with('product')->get();
    }

    public function viewCatalogue(){
        // session(['name' => 'Victor']);
        \Log::info('testing sessions in catalogue');
        \Log::info(session('name'));

        // Fetch Products from database
        $products = $this->viewAllProducts();
        $myCart = $this->viewMyCart();

        // return $myCart;
        return view('catalogue', compact('products', 'myCart'));
    }

}