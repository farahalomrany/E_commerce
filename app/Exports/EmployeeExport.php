<?php

namespace App\Exports;

use App\Product;
use App\Order_detail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class EmployeeExport implements FromCollection ,WithHeadings
{   
    public $id;

    function __construct($id) {
            $this->id = $id;
    }
    function headings():array{
     return [
       "id", "name","sell_price","total_q","description","color","size","image","brand_id","category_id","vote_count","vote_average","popularity"
     ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   $id=$this->id;;
        // $order_id=Order_detail::where('product_id','=', $id)->get();
        // return $order_id;

        return collect(Product::getProucts($id));
    }
}
