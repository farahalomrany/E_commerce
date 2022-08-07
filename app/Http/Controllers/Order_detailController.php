<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderDetailExport;
use Illuminate\Support\Facades\Auth;
use App\Order_detail;
use App\Order;
use App\Product;
use Carbon\Carbon;

class Order_detailController extends Controller
{   
  public function __construct()
  {
     // $this->middleware('auth');
  }
    public function store(Request $request)
    {   $users = $request->json()->all();
        $details = new Order_detail;
        $product=Product::where('id',$request->product_id)->first();
        $order =Order::where('id',$request->order_id)->first();
        $order2 =Order::where('id',$request->order_id)->get();
        $count=$order2->count();
        $token = $request -> header('auth-token');
         $user = Auth::guard('user-api')->user();
        $details->price=$request->price;
        $details->quantity=$request->quantity;
        $details->total_price=($request->price * $request->quantity);
        $details->num_stock=$request->num_stock;
        $details->product_id=$request->product_id;
        
        if($count==0)
         {$order = new Order;
          //$order->user_id=Auth::user()->id;
         
          //$name = $user->name;
          $order->user_id=1;
          $order->total_price=$details->total_price;
          $order->date=\Carbon\Carbon::now();
          $order->save();
          $details->order_id=$order->id;
        }
        else
          {$details->order_id=$request->order_id;
           $order->total_price=$order->total_price+($request->price * $request->quantity);
           $order->save();
          }

        $product->popularity=$product->popularity+1;
        $details->save(); 
        $product->save();
        
       //return \Auth::user()->id;
     //   return Auth::guard('user-api');

    }
    public function Export_into_exel()
    {
        return Excel::download(new OrderDetailExport,'details.csv');
    }
        // $price=response()->json((int)$users[0]["price"]);
        // $total_price=response()->json((int)$users[0]["total_price"]);
        // $quantity=response()->json((int)$users[0]["quantity"]);
        // $num_stock=response()->json((int)$users[0]["num_stock"]);
        // $product_id=response()->json((int)$users[0]["product_id"]);
        // $order_id=response()->json((int)$users[0]["order_id"]);
}
