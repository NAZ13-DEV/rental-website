<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

// use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    //
    public function profile(){
        $user= Auth::user();
        return view('admin.profile', compact('user'));
    }
    public function profileUpdate(Request $request)
    {
        try {
            $user = Auth::user();

            // Validation rules
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
                'phonenumber' => 'required|string|max:11',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6144', // 6MB max
            ]);

            // Updating user information
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;

            // If image is uploaded, handle the upload
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($user->image) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $user->image));
                }

                // Store new image
                $imagePath = $request->file('image')->store('profile_images', 'public');
                $user->image = "/storage/" . $imagePath;
            }

            // Save the user with new data
            $user->save();

            Alert::success('Profile Updated', 'Your profile has been updated successfully.');
            return redirect()->route('admin.profile');
        } catch (\Exception $e) {
            // Log the error message for debugging
            Log::error("Profile Update Error: " . $e->getMessage());
            return back()->withErrors(['error' => 'An unexpected error occurred while updating your profile. Please try again later.']);
        }
    }

    public function changePassword(Request $request)
{
    try {
        // Validate input fields
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        Alert::success('Password Changed', 'Your password has been changed successfully.');
        return redirect()->route('admin.profile');

    } catch (\Exception $e) {
        // Log error for debugging
        Log::error("Change Password Error: " . $e->getMessage());
        return back()->withErrors(['error' => 'An unexpected error occurred while changing your password. Please try again later.']);
    }
}

    public function deleteAccount(Request $request)
    {
        try {
            $request->validate([
                'password' => 'required',
            ]);

            $user = Auth::user();

            // Check if the password is correct
            if (!Hash::check($request->password, $user->password)) {
                return back()->withErrors(['password' => 'The password is incorrect.']);
            }

            // Log the user out
            Auth::logout();

            // Delete the user
            $user->delete();

            Alert::success('Account Deleted', 'Your account has been deleted successfully.');
            return redirect('/');
        } catch (\Exception $e) {
            // Log the error message for debugging
            Log::error("Delete Account Error: " . $e->getMessage());
            return back()->withErrors(['error' => 'An unexpected error occurred while deleting your account. Please try again later.']);
        }
    }



    public function index()
    {
        $user= Auth::user();
        $customer= User::where('role', 'user')->get();
        return view('admin.dashboard',compact('user','customer'));
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

        $users = User::where('role', 'user')->paginate(10);
        return view('admin.customers',compact('users'));
    }






    public function showAdminRegistrationForm()
    {
        return view(view: 'admin.admin-registersss'); // Render the Blade file for admin registration
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
