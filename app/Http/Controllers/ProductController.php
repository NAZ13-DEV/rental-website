<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Laravel\Prompts\Note;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create(){
        $categories = Category::all();
        return view('admin.create-product' , compact('categories'));
    }
    public function products(){
        $products = Product::paginate(10);
        return view('admin.products',compact('products'));
    }

    public function edit(Product $product){
        $categories = Category::all();

        return view('admin.edit-product', compact('categories','product') );
    }
    public function ShowProduct(Product $product)
    {
        return view('admin.view-product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function storeProducts(Request $request)
    {
        // Validate input data
        $inputData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'tags' => ['nullable', 'string', 'max:255'],
            'category_id' => 'required|exists:categories,id',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:6144'], // 6MB max size for image
            'price' => ['required', 'numeric', 'min:0', 'max:999999.99'],
            'stock' => ['required', 'integer', 'min:0'],
            'is_out_of_stock' => ['boolean'],
        ]);

        // Save the image if provided
        if ($request->hasFile('image')) {
            $inputData['image'] = $request->file('image')->store('images', 'public');
        }

        // Check if the product already exists by name
        $productName = $request->input('name');
        $existingProduct = Product::where('name', $productName)->first();

        if ($existingProduct) {
            return redirect()->back()->with('error', 'Product already exists!');
        }

        // Create the product with validated input data
        $product = Product::create($inputData); // Add this line to actually create the product

        // Send a success alert (using Alert package)
        Alert::success('Product Added Successfully', 'Product has been added to the inventory.');

        // Redirect to the products page with a success message
        return redirect()->route('admin.products')->with('message', 'Product Added Successfully');
    }




    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $inputData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'tags' => ['nullable', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'], // Correct field name and validation rule
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:6144'], // Image is optional for updates
            'price' => ['required', 'numeric', 'min:0', 'max:999999.99'],
            'stock' => ['required', 'integer', 'min:0'],
            'is_out_of_stock' => ['boolean'],
        ]);

        if($request->hasFile('image')){
            $inputData['image'] = $request->file('image')->store('images', 'public');
        }

        // Check if the product with the same name already exists, excluding the current product
        $existingProduct = Product::where('name', $inputData['name'])->where('id', '!=', $product->id)->first();

        if ($existingProduct) {
            // If it exists, set an "error" message
            return redirect()->back()->with('error', 'Product already exists!');
        }

        $product->update($inputData);

        return redirect()->route('admin.viewProduct', $product)->with('message', 'Product was updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function deleteProduct( $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', value: 'Product not found.');
        }

        $product->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');

    }
}
