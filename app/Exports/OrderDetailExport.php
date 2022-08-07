<?php

namespace App\Exports;

use App\Order_detail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderDetailExport implements FromCollection,WithHeadings
{
    function headings():array{
        return [
            "price","total_price","quantity","num_stock","product_id","order_id"
        ];
       }
       /**
       * @return \Illuminate\Support\Collection
       */
       public function collection()
       {
           return collect(Order_detail::getOrder_details());
       }
}
