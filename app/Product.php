<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Order_detail;
class Product extends Model
{
    Public static function getProucts($id)
    {  
        
        $order_d=Order_detail::where('product_id',$id)->get();
        foreach ($order_d as $o)
          {$item=Order::where('id',$o->order_id)->get();
        foreach ($item as $o1)
        {
         $detail=Order_detail::where('order_id',$o1->id)->get();
          foreach ($detail as $o2)
          $product[]=Product::where('id',$o2->product_id)->where('id','!=',$id)->orderBy('id','asc')->get()->toArray();}}
      // return $product;
        
        $records = DB::table('products')->select("id","name","sell_price","total_q","description","color","size","image","brand_id","category_id","vote_count","vote_average","popularity")->where('id','=', $id)->orderBy('id','asc')->get()->toArray();
         return $product;
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function company()
    {
        return $this->belongsTo('App\company', 'company_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock', 'product_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Order_detail', 'product_id');
    }
}
