<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); 
        $response['data']=$categories;
        $response['message']="this is all categories";
        return response()->json($response,200);
        
    }
    
    public function show($id)
    {   
        $categories=Category::find($id);
        if(isset($categories))
        {
          $response['data']=$categories;
          $response['message']="success";
          $response['status_code']=200;
          return response()->json($response,200);
        }
        else
        {
          $response['data']=$categories;
          $response['message']="error not found";
          $response['status_code']=404;
          return response()->json($response,404);
        }

    }

    public function store(Request $request)
    {
        $categories = new Category;
        $categories->name=$request->name;
        $categories->save();
        return $categories;
    }

    public function update(Request $request,$id)
    {   $categories = Category::where('id',$id)->first(); 
        if(isset($categories))
        {
        $categories->name=$request->name;
        $categories->save();
        }
        return $categories;
    }

    public function delete($id)
    {
        $categories = Category::where('id',$id)->first(); 
        if(isset($categories))
            {
                
             $categories->delete();
             return "deleted";
                
            }

    }
}
