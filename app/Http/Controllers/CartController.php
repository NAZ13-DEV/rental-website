<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

     // Add item to cart
     public function addToCart(Request $request)
     {
         $request->validate([
             'product_id' => 'required|exists:products,id',
             'quantity' => 'required|integer|min:1',
             'rental_days' => 'required|integer|min:1',
         ]);
 
         $cart = Cart::updateOrCreate(
             [
                 'user_id' => Auth::id(),
                 'product_id' => $request->product_id,
             ],
             [
                 'quantity' => DB::raw('quantity + ' . $request->quantity),
                 'rental_days' => $request->rental_days,
             ]
         );
 
         return response()->json(['message' => 'Item added to cart', 'cart' => $cart]);
     }
 
     // Fetch cart items
     public function getCart()
     {
         $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
         return view('user.cart', compact('cartItems'));
     }
 
     // Increment quantity
     public function incrementQuantity(Request $request)
     {
         $request->validate([
             'cart_id' => 'required|exists:carts,id',
             'quantity' => 'required|integer|min:1',
         ]);
 
         $cart = Cart::find($request->cart_id);
         $cart->increment('quantity', $request->quantity);
 
         return response()->json(['message' => 'Quantity updated', 'cart' => $cart]);
     }
 
     // Remove item from cart
     public function removeFromCart($id)
     {
         $cart = Cart::where('id', $id)->where('user_id', Auth::id())->first();
         if ($cart) {
             $cart->delete();
             return response()->json(['message' => 'Item removed from cart']);
         }
 
         return response()->json(['message' => 'Item not found'], 404);
     }
}
