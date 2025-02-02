<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    // public function index()
    // {
    //     // Retrieve all cart items for the authenticated user
    //     $cartItems = Cart::with('product') // Ensure product details are loaded
    //         ->where('user_id', operator: Auth::id())
    //         ->get();

    //     // Calculate cart total
    //     $cartTotal = $cartItems->sum(function ($item) {
    //         return $item->product->price * $item->quantity;
    //     });

    //     // Pass the cart items and total to the view
    //     return view('user.cart', compact('cartItems'));
    // }

    // public function addToCart($id)
    // {
    //     $product = Product::findOrFail($id);

    //     $cart = session()->get('cart', []);

    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         $cart[$id]['rental_days']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => 1,
    //             "rental_days" => 1,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }

    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }


    //  public function updateCart(Request $request)
    //  {
    //     if($request->id & $request->quantity & $request->rental_days){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         $cart[$request->id]["rental_days"] = $request->rental_days;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    //  }






    //  public function cartDelete(Request $request)
    //  {

    // if($request->id) {
    //     $cart = session()->get('cart');
    //     if(isset($cart[$request->id])) {
    //         unset($cart[$request->id]);
    //         session()->put('cart', $cart);
    //     }
    //     session()->flash('success', 'Product removed successfully');
    // }


    //  }





    public function index()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $cartTotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity * $item->rental_days);

    $location = Location::all();

        return view('user.cart', compact('cartItems', 'cartTotal','location'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $userId = Auth::id();

        $cartItem = Cart::where('user_id', $userId)->where('product_id', $id)->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
            // $cartItem->increment('rental_days');
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $id,
                'quantity' => 1,
                'rental_days' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $request->id)->first();

        if ($cartItem) {
            $cartItem->update([
                'quantity' => $request->quantity,
                'rental_days' => $request->rental_days,
            ]);
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Cart item not found.');
    }

    public function cartDelete(Request $request)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $request->id)->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Product removed successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }

}
