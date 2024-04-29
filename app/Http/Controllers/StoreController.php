<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;
use App\Models\Address;
use App\Models\User;
// use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function createForm()
    {   

      
        $categories = Category::all();
        $addresses = Address::all();
        return view('acount.create', compact('categories','addresses'));    
    }


            
public function createstore(Request $request)
{
    // Validate incoming request
    // $validatedData = $request->validate([
    //     'store_name' => 'required|string|max:255',
    //     'category' => 'required|exists:categories,id',
    //     'email' => 'required|email',
    //     'phone_number' => 'required|string',
    //     'street' => 'required|string',
    //     'city' => 'required|string',
    //     'state' => 'required|string',
    //     'country' => 'required|string',
    //     'description' => 'nullable|string',
    //     'store_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB limit
    //     'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB limit
        
    // ]);


    // Create a new store
    $store = new Store();
    $store->name = $request->store_name;
    $store->phone_number = $request->phone_number;
    $store->email = $request->email;
    $store->description = $request->description;
    $store->user_id = Auth::id();
    $store->categorie_id = $request->category;


 
    $storeImagePath = 'images/stores/';
    $storeImageName = date('YmdHis') . '.' . $request->file('store_image')->getClientOriginalExtension();
    $request->file('store_image')->move($storeImagePath, $storeImageName);
    $store->image = $storeImageName;

    
    $storeLogoPath = 'images/logos/';
    $storeLogoName = date('YmdHis') . '.' . $request->file('store_logo')->getClientOriginalExtension();
    $request->file('store_logo')->move($storeLogoPath, $storeLogoName);
    $store->logo = $storeLogoName;

    

    $address = Address::where('street', $request->street)
                      ->where('city', $request->city)
                      ->where('state', $request->state)
                      ->where('country', $request->country)
                      ->first();

               
   
    if ($address) {
        $store->address()->associate($address);
       
    }else {
    //    dd('holla'); 
    }
    $store->save();

    return redirect()->route('profile')->with('success', 'Store created successfully.');
}

}
