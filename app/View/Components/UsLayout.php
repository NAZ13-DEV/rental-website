<?php

namespace App\View\Components;

use Closure;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Location;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UsLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $category = Category::all();
        $cart = Cart::all();
        $location = Location::all();


        return view('user.layouts.us',compact('category','cart'));
    }
}
