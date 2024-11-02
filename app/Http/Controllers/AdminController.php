<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use RealRashid\SweetAlert\Facades\Alert;

// use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        return view('admin.orders');
    }
    public function ShowOrder()
    {
        return view('admin.order-details');
    }


    public function customers()
    {
        return view('admin.customers');
    }






    public function showAdminRegistrationForm()
    {
        return view(view: 'admin.admin-register'); // Render the Blade file for admin registration
    }







    public function adminRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'admin', // set role to admin
        ]);

        event(new Registered($admin));

        Auth::login($admin);

        return redirect()->route('admin.dashboard'); // Redirect to
    }


    public function showAddCategory()
    {
        return view('admin.add-category');
    }
    public function showAddLocation()
    {
        return view('admin.add-location');
    }
    public function showLocations()
    {
        $locations = Location::all();
        return view('admin.locations', compact('locations'));
    }
    public function storeLocation(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],

        ]);

        $locationName = $request->input('name');
        $locationPrice = $request->input('price');

        // Check if the category already exists
        $location = Location::where('name', $locationName)->first();

        if ($location) {
            // If it exists, set a "category exists" message
            return redirect()->back()->with('error', value: 'Location already exists!');
        }
        Location::create([
            'name' => $locationName,
            'price' => $locationPrice,
        ]);
        // Set a success message
        return redirect()->back()->with('success', value: 'Location created successfully!');

    }

    public function deleteLocation($id)
    {
        $location = Location::find($id);

        if (!$location) {
            return redirect()->back()->with('error', value: 'Location not found.');
        }

        $location->delete();

        return redirect()->back()->with('success', value: 'Location deleted successfully.');
    }

    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function storeCategory(Request $request)
    {
        // Validate product data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categoryName = $request->input('name');

        // Check if the category already exists
        $category = Category::where('name', $categoryName)->first();

        if ($category) {
            // If it exists, set a "category exists" message
            return redirect()->back()->with('error', 'Category already exists!');
        }

        // Create new category
        Category::create([
            'name' => $categoryName,
        ]);

        // Set a success message
        return redirect()->back()->with('success', 'Category created successfully!');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
