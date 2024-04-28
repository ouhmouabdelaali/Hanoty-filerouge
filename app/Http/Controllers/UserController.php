<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use App\Models\Stock;
use App\Models\Product;
use App\Models\Store;

class UserController extends Controller
{
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */ 
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.registration');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
       
            $request->session()->regenerate();
      

            return redirect()->route('profile');
            // return redirect()->intended($this->redirectPath());
        }
 
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        Auth::login($user);

        return redirect()->route('createstoreform');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:commercial,provider'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => ($data['role'] == 'commercial') ? 1 : 2, 
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function profile(){



        // $stocks = Auth::user()->store->stocks()->with('product')->get();
        $stocks = Auth::user()->store->stocks()
        ->whereHas('product') 
        ->with('product')
        ->get();
        $souscategorys = Auth::user()->store->category->sousCategories;
    //   dd($souscategorys);
         return view('acount.profile',compact('stocks','souscategorys'));
      


    }




        // $user = Auth::user();
        
        // $products = Product::where('provider_id', $user->id)->with(['provider', 'provider.store'])->get();
        // // $products =  $user->stocks->product->provider();
        // $stocks = Auth::user()->store->stocks()->with(['product.provider.store'])->get();compact('products','stocks')
    // $products = Product::where('provider_id', $user->id)->with(['provider', 'provider.store'])->get();


    //   dd ($stocks ->product->provider_id); 
//    public function dashborde()  
//    {  
   
                  
//     $user = Auth::user();
        
//     // $products =  $user->stocks->product->provider();
//     $stocks = Auth::user()->store->stocks()->with(['product.provider.store'])->get();
    
//         return view('acount.dashborde',compact('stocks'));
//    }
public function dashborde()
{  
    $user = Auth::user();
    $stocks = Auth::user()->store->stocks()->with(['product.provider.store'])->paginate(1); // Paginate with 10 items per page
    
    return view('acount.dashborde', compact('stocks'));
}

   
 
   public function provadershow()
 {
    
 
 
        $latestProviders = User::where('role_id', 2)   
    ->whereHas('store') 
    ->latest() 
    ->take(3) 
    ->with('store') 
    ->get();

          $providers = User::where('role_id', 2)->whereHas('store')->with('store')->paginate(8);


        return view('main.provaders', compact('providers', 'latestProviders'));

}


public function provaderview(Request $request , $id)
{

    
}

}
