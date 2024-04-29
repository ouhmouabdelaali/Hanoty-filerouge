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
 
public function makeorder(Request $request)
{
   

 $user = Auth::user();
$product = Product::findOrFail($request->id);

$subtotal = $product->price * $request->quantity;

$invalidOrders = $user->invalidOrders->get()->last();

if ($invalidOrders->isEmpty()) {
   

$order = Order::create([
    'total_price'=> 0,
    'status' => 'invalid' ,
    'user_id'=>$user->id,
]);

$order_Id= $order->id;

} else {

$order_Id=$invalidOrders->id;
}

$miniorder =OrderProduct::create([


    'order_id'=>$order_Id,
    'product_id'=>$product->id,
    'quantity'=>$request->quantity, 
    'unit_price'=>$product->price, 
    'subtotal'=>$subtotal

]);

}
  
public function 

$orders = $user->invalidOrders->get()->last();
  

return view('.orders',compact('orders'));
}
