<?php

namespace App\Http\Controllers;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;
use Illuminate\Support\Facades\DB;
//use Excel;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $response['data'] = $products;
        $response['message'] = "This is all products";
        $response['status_code'] = 200;
        return response()->json($response,200) ;

    }

    public function show($id)
    {
        $products = Product::where('id', $id)->first();
        if(isset($products)){
            $response['data'] = $products;
            $response['message'] = "success";
            $response['status_code'] = 200;
            return response()->json($response,200) ;
        }
        $response['data'] = $products;
        $response['message'] = "erorr not found";
        $response['status_code'] = 404;
        return response()->json($response,404) ;
    }

    public function store(Request $request){
        $product = new Product;
        //$stock =Stock::select('id')->where('product_id',$request->id)->get()->last();
        $product->name = $request->name;
        $product->sell_price = $request->sell_price;
        $product->description = $request->description;
        $product->total_q = $request->total_q;
         //////////////////////////////////////farah////////////////////////
        if (isset($request->image)) {
          $image_name = rand() . "." . $request->image->getClientOriginalExtension();
          $product->image =  $image_name;
          $request->image->move('image', $image_name);
        }
       
        $product->color = $request->color;
        $product->size = $request->size;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->user_id = $request->user_id;
        $product->save();

        $response['data'] = $product;
        $response['message'] = "product created successfully";
        $response['status_code'] = 200;
        return response()->json($response,200) ;
        }

        public function update(Request $request,$id){
            $product = Product::where('id', $id)->first();
            if(isset($product)){
                if(isset($request->name)){ $product->name = $request->name;}
                if(isset($request->sell_price)){  $product->sell_price = $request->sell_price ;}
                if(isset($request->description)){   $product->description = $request->description;}
                if(isset( $request->total_q)){   $product->total_q = $request->total_q;}
                if(isset($request->color)){  $product->color = $request->color;}
                if(isset( $request->size)){  $product->size = $request->size;}
                if(isset($request->brand_id)){  $product->brand_id = $request->brand_id;}
                if(isset($request->category_id)){  $product->category_id = $request->category_id;}
                if(isset( $request->user_id)){   $product->user_id = $request->user_id;}
             //////////////////////////////////////farah////////////
         if (isset($request->image)) {
          $image_name = rand() . "." . $request->image->getClientOriginalExtension();
          $product->image =  $image_name;
          $request->image->move('image', $image_name);
        }
           //    ////////////////////////////////////

            $product->save();
            $response['data'] = $product;
            $response['message'] = "product updated successfully";
            $response['status_code'] = 200;
            return response()->json($response,200) ;
            }
            $response['data'] = '';
            $response['message'] = "erorr not found";
            $response['status_code'] = 404;
            return response()->json($response,404) ;
        }

        public function destroy($id){
            $product= Product::find($id);
            if(isset( $product)){
            $product->delete();
            $response['data'] = '';
            $response['message'] = "product deleted successfully";
            $response['status_code'] = 200;
            return response()->json($response,200) ;
            }
            $response['data'] = '';
            $response['message'] = "erorr not found";
            $response['status_code'] = 404;
            return response()->json($response,404) ;

        }


    public function show_by_category($id)
    {
     $products=Product::select('id','name','image')->where('category_id',$id)->get();
     if(isset($products))
     {
       $response['data']=$products;
       $response['message']="success";
       $response['status_code']=200;
       return response()->json($response,200);
     }
     else if (!isset($products))
     {
       $response['data']=$products;
       $response['message']="error not found";
       $response['status_code']=404;
       return response()->json($response,404);
     }
    }
    public function vote(Request $request)
    {

       $product=Product::where('id',$request->product_id)->first();
       $product->vote_count=$product->vote_count+$request->vote;
       $product->save();
        return $product;
    }

    public function show_by_date(Request $request)
    {   //$date = $mytime =now();
        $date = date($request->date);
        //$date = date(date('Y-m-d', strtotime($date)));
        $mo=\Carbon\Carbon::parse($date)->format('m');
        $da=\Carbon\Carbon::parse($date)->format('d');
        $ye=\Carbon\Carbon::parse($date)->format('Y');
        //return $ye;
        // if($mo==4)
        // $mo=12;
        // else if($mo==3)
        // $mo=11;
        // else if($mo==2)
        // $mo=10;
        // else if($mo==1)
        // $mo=9;
        // else
        // $mo=$mo-4;

        $products = Product::join("stocks", "stocks.product_id", "=","products.id")
        ->whereYear('stocks.date', $ye)
        ->whereMonth('stocks.date', $mo)->whereDay('stocks.date', $da)
        ->get(array(DB::raw('products.*')));
        if(isset($products))
     {
       $response['data']=$products;
       $response['message']="success";
       $response['status_code']=200;
       return response()->json($response,200);
     }


    }
    public function Export_into_exel()
    {
        return Excel::download(new EmployeeExport,'product.csv');
    }

}
