<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product; 
use  App\Models\SousCategory;
use  App\Models\Image;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
        /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function productpage()
    {
        $categories = Category::paginate(4 ) ;
        $products = Product::paginate(4);
        return view('main.products', compact('products', 'categories'));

    }




    public function createForm()
    {
        $categories = SousCategory::all();
        return view('product.create', compact('categories'));
    }
    
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sous_category_id' => 'required|exists:sous_categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 

           
        ]);
    

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->sous_category_id = $request->sous_category_id;
        $product->provider_id = Auth::user()->id;
        $product->save();
        $stock = new Stock();
        $stock->quantity = $request->quantity;
        $stock->store_id =Auth::user()->store->id ;
        $stock->save();
    
        foreach ($request->file('images') as $index => $image) {
         
            $imageName = date('YmdHis') . '_' . $index . '.' . $image->getClientOriginalExtension();
            
          
            $image->storeAs('images/products', $imageName);
            
            
            Image::create([
                'image_name' => $imageName,
                'product_id' => $product->id // Assuming $productId holds the ID of the product
            ]);
        }
        
    
        return redirect()->route('createproduct')->with('success', 'Product created successfully.');
    }

    public function editForm($id)
    {
        $product = Product::findOrFail($id);
        $categories = SousCategory::all();
        return view('edit-product-form', compact('product', 'categories'));
    }
    
    // Function to update a product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $stock = Stock::where('stor_id',Auth::user()->stor->id);
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sous_category_id' => 'required|exists:sous_categories,id',
             'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
    
        ]);
    

        
        $product->name = $request->name;
        $product->price = $request->price;
        $product->sous_category_id = $request->sous_category_id;
        $product->provider_id = Auth::user()->id;
        $product->save();
       

        $stock->quantity = $request->quantity;
        $stock->store_id =Auth::user()->store->id ;
        $stock->save();
    
        foreach ($request->file('images') as $index => $image) {
       
            $imageName = date('YmdHis') . '_' . $index . '.' . $image->getClientOriginalExtension();
            
         
            $image->storeAs('images/products', $imageName);
            
            // Create a new image record in the database
            Image::create([
                'image_name' => $imageName,
                'product_id' => $product->id
            ]);
        }
        
       
        return redirect()->route('product.edit', $id)->with('success', 'Product updated successfully.');
    }
    



    public function productshow($id)
    {
        $product = Product::findOrFail($id);

        return view('main.productview', compact('product'));
    }



//     public function productsfunction()
// {
//            // You can add logic here if needed
//     return view('dashboard.provaders');
// }



// public function create()
// {
//     // Fetch providers and sous categories for dropdown selection
//     $providers = User::where('role_id', 2)->get(); // Assuming provider role_id is 2
//     $sousCategories = SousCategory::all();

//     return view('products.create', compact('providers', 'sousCategories'));
// }

public function delete($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
}

//    /**
//      * Search for products based on the given query.
//      *
//      * @param  Request  $request
//      * @return \Illuminate\Http\JsonResponse
//      */
//     public function searchforproduct(Request $request)
//     {
       
//         $request->validate([
//             'query' => 'required|string',
//         ]);

      
//         $query = $request->input('query');

      
//         $products = Product::where('name', 'like', "%$query%")->get();

      
//         return response()->json($products);
//     }



// public function search(Request $request)
// {
//     $query = $request->input('query');

//     // Perform the search query
//     $results = Product::where('name', 'like', "%$query%")->get();

//     // Return the search results to the view
//     return view('search-results', compact('results'));
// }


}






