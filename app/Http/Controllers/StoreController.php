<?php



namespace App\Http\Controllers;
// use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;
use App\Models\Address;
use App\Models\User;

class StoreController extends Controller
{
    /**
     * Show the form for creating a new store.
     *
     * @return \Illuminate\View\View
     */
    public function createForm()
    {   
        // dd( Auth::user());
        $categories = Category::all();



        
        $user = Auth::user();

        // Retrieve the stocks associated with the store owned by the authenticated user
        $stocks = $user->store()->stocks()->with('product')->get();
    
        //  dd($stocks()->product->name ); 


        // return view('inventory', compact('stocks'));
        // compact('categories','stocks')
        return view('acount.create', compact('categories'));
    }

    /**
     * Store a newly created store in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $user = Auth::user();
        // dd($user);
        // $request->validate([
        //     'store_name' => 'required|string|max:255',
        //     'phone_number' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'category' => 'required|exists:categories,id',
        //     'store_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'user_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'description' => 'nullable|string',
        //     'street' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'state' => 'required|string|max:255',
        //     'country' => 'required|string|max:255',
        //     'zip' => 'required|string|max:255',
        // ]);

        // Create a new store
        $store = new Store();
        $store->name = $request->store_name;
        $store->phone_number = $request->phone_number;
        $store->email = $request->email;
        $store->description = $request->description;
        $store->user_id = Auth::id();
        $store->categorie_id = $request->category;
        $store->addres_id =1;

        // Upload store image
        $storeImagePath = 'images/stores/';
        $storeImageName = date('YmdHis') . '.' . $request->file('store_image')->getClientOriginalExtension();
        $request->file('store_image')->move($storeImagePath, $storeImageName);
        $store->image = $storeImageName;

        // Upload store logo
        $storeLogoPath = 'images/logos/';
        $storeLogoName = date('YmdHis') . '.' . $request->file('store_logo')->getClientOriginalExtension();
        $request->file('store_logo')->move($storeLogoPath, $storeLogoName);
        $store->logo = $storeLogoName;

        $store->save();

        // Create a new address
        $address = new Address();
        $address->street = $request->street;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->country = $request->country;
        $address->zip = $request->zip;

        $store->address()->save($address);

        // Upload user image
        $userImagePath = 'images/users/';
        $userImageName = date('YmdHis') . '.' . $request->file('user_image')->getClientOriginalExtension();
        $request->file('user_image')->move($userImagePath, $userImageName);

        // // Update user image

        // Upload user image if provided
        $user = Auth::user();

        // Upload user image if provided
        if ($request->hasFile('user_image')) {
            $userImagePath = 'images/users/';
            $userImageName = date('YmdHis') . '.' . $request->file('user_image')->getClientOriginalExtension();
            $request->file('user_image')->move($userImagePath, $userImageName);
            
            // Update user image
            $user->image = $userImageName;
        
            // Save the updated user record
            $user->save();
        }


      
        // $user->image = $userImageName;
        // // $user->save();
        // $user->update(['image' => $userImageName]);
  
        
        return redirect()->route('profile')->with('success', 'Store created successfully.');
    }

}








// namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use App\Models\Store;
// use App\Models\Category;
// use App\Models\Address;

// class StoreController extends Controller
// {
//     /**
//      * Show the form for creating a new store.
//      *
//      * @return \Illuminate\View\View
//      */
//     public function createForm()
//     {
//         $categories = Category::all();
//         return view('acount.create', compact('categories'));
//     }

//     /**
//      * Store a newly created store in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function create(Request $request)
//     {
//         $request->validate([
//             'store_name' => 'required|string|max:255',
//             'phone_number' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255',
//             'category' => 'required|exists:categories,id',
//             'store_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'user_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'description' => 'nullable|string',
//             'street' => 'required|string|max:255',
//             'city' => 'required|string|max:255',
//             'state' => 'required|string|max:255',
//             'country' => 'required|string|max:255',
//             'zip' => 'required|string|max:255',
//         ]);

//         $store = new Store();
//         $store->name = $request->store_name;
//         $store->phone_number = $request->phone_number;
//         $store->email = $request->email;
//         $store->description = $request->description;
//         $store->category_id = $request->category;

//         // Upload store image
//         $storeImagePath = 'images/stores/';
//         $storeImageName = null;

//         if ($request->hasFile('store_image')) {
//             $uploadedStoreImage = $request->file('store_image');
//             $storeImageName = date('YmdHis') . '.' . $uploadedStoreImage->getClientOriginalExtension();
//             $uploadedStoreImage->move($storeImagePath, $storeImageName);
//         }

//         // Upload store logo
//         $storeLogoPath = 'images/logos/';
//         $storeLogoName = null;

//         if ($request->hasFile('store_logo')) {
//             $uploadedStoreLogo = $request->file('store_logo');
//             $storeLogoName = date('YmdHis') . '.' . $uploadedStoreLogo->getClientOriginalExtension();
//             $uploadedStoreLogo->move($storeLogoPath, $storeLogoName);
//         }




//         $store->save();

//         $address = new Address();
//         $address->street = $request->street;
//         $address->city = $request->city;
//         $address->state = $request->state;
//         $address->country = $request->country;
//         $address->zip = $request->zip;

//         $store->address()->save($address);



//         // Upload user image
//         $userImagePath = 'images/users/';
//         $userImageName = null;

//         if ($request->hasFile('user_image')) {
//             $uploadedUserImage = $request->file('user_image');
//             $userImageName = date('YmdHis') . '.' . $uploadedUserImage->getClientOriginalExtension();
//             $uploadedUserImage->move($userImagePath, $userImageName);
//         }

//         if ($userImageName) {
//             $user = Auth::user();
//             $user->image = $userImageName;
//             $user->save();
//         }

//         return redirect()->route('profile');

//         // return redirect()->back()->with('success', 'Store created successfully.');
//     }
// }
