<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
 
public function stororder(Request $request,$id)
{
   

 $user = Auth::user();
$product = Product::findOrFail($id);

$subtotal = $product->price * $request->quantity;

// $invalidOrders = $user->invalidOrders->get()->last();

// if (!$invalidOrders) {
   

// $order = Order::create([
//     'total_price'=> 0,
//     'status' => 'invalid' ,
//     'user_id'=>$user->id,
// ]);

// $order_Id= $order->id;

// } else {

// $order_Id=$invalidOrders->id;
// }

// $miniorder =

$invalidOrders = $user->invalidOrders;

if (!$invalidOrders->isEmpty()) {
    $order_Id = $invalidOrders->last()->id;
} else {
    // Create a new invalid order as before
    $order = Order::create([
        'total_price' => 0,
        'status' => 'invalid',
        'user_id' => $user->id,
    ]);

    $order_Id = $order->id;
}

OrderProduct::create([


    'order_id'=>$order_Id,
    'product_id'=>$product->id,
    'quantity'=>$request->quantity, 
    'unit_price'=>$product->price, 
    'subtotal'=>$subtotal

]);
return redirect()->back()->with('success', 'your Order stored successfully!');
}




// public function stororder(Request $request, $id)
// {     
//     // dd($request,$id);
//     $user = Auth::user();
//     $product = Product::findOrFail($id);

//     $subtotal = $product->price * $request->quantity;

//     // Find the last invalid order for the user
//     $lastInvalidOrder = $user->orders->where('status', 'invalid')->latest()->first();

//     if (!$lastInvalidOrder) {
//         // Create a new order if there are no invalid orders
//         $order = Order::create([
//             'total_price' => 0,
//             'status' => 'invalid',
//             'user_id' => $user->id,
//         ]);

//         $order_Id = $order->id;
//     } else {
//         // Use the last invalid order
//         $order_Id = $lastInvalidOrder->id;
//     }

//     // Create the order product
//     $orderProduct = OrderProduct::create([
//         'order_id' => $order_Id,
//         'product_id' => $product->id,
//         'quantity' => $request->quantity,
//         'unit_price' => $product->price,
//         'subtotal' => $subtotal,
//     ]);

//     return redirect()->back()->with('success', 'Your order has been stored successfully!');
// }




  
public function  displyorders()
{

$orders = Auth::user()->invalidOrders->get()->last();
  

return view('dashborde.orders',compact('orders'));

}


public function validateorder(){
// ->last()
$invalidOrders = Auth::user()->invalidOrders->orderProducts->with(['product'])->get();
       

    // foreach ($products as $productData) {


    //  $order->total_price += $subtotal;
    // }

}

}