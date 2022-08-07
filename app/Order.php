<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Order extends Model
{
    Public static function getOrder()
    {
        $records =DB::table('orders')->select("total_price","date","user_id")->orderBy('id','asc')->get()->toArray();
        return $records;
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Order_detail', 'order_id');
    }
}
