<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class CartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addToCart(Request $request){

      // Add new cart item to the database.
      $newCart = Cart::create([
        'user_id' => 1,
        'product_id' => $request->product_id,
        'product_quantity' => $request->product_quantity
      ]);
;
      return $newCart;
    }

    public function removeFromCart(Request $request){
      $cartItem = Cart::where('product_id', $request->product_id)
                ->where('user_id', $request->user_id)
                ->first();
      
      if($cartItem){
        $cartItem->delete();
        return [
          'message' => 'deleted successfully'
        ];
      } else {
        return [
          'message' => 'failed to delete'
        ];
      }
      
    }

    public function viewCart(){
      return Cart::all();
    }

}






        
       






