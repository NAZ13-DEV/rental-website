<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // Show the wishlist
    public function wishlist()
    {
        $wishlistItems = Auth::user()->wishlist()->with('product')->get();
        return view('user.wishlist', compact('wishlistItems'));
    }

    // Add an item to the wishlist
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $exists = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->exists();

        if ($exists) {
            return redirect()->back()->with('error', 'Product is already in your wishlist!');
        }

        Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    // Remove an item from the wishlist
    public function remove($id)
    {
        $wishlistItem = Wishlist::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$wishlistItem) {
            return redirect()->back()->with('error', 'Item not found!');
    }

        $wishlistItem->delete();

        return redirect()->back()->with('success', 'Item removed from wishlist!');
    }
}
