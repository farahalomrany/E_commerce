<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
class brandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        $response['data'] = $brands;
        $response['message'] = "This is all brands";
        $response['status_code'] = 200;
        return response()->json($response,200) ;
    }
    public function store(Request $request)
    {
       $brand =new Brand;
         
     $brand->name = $request->name;
       $brand->save();

        $response['data'] = $brand;
        $response['message'] = "store success";
        $response['status_code'] = 200;
        return response()->json($response,200) ;   
    }

}


    