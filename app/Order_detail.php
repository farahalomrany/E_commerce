<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Order_detail extends Model
{

    Public static function getOrder_details()
    {
        $records =DB::table('order_details')->select("price","total_price","quantity","num_stock","product_id","order_id")->orderBy('id','asc')->get()->toArray();
        return $records;
    } 
    
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }
}
