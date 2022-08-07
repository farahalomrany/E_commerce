<?php

namespace App\Exports;

use App\Order;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
class OrderExport implements FromCollection,WithHeadings
{
    function headings():array{
        return [
            "total_price","date","user_id"
        ];
       }
       /**
       * @return \Illuminate\Support\Collection
       */
       public function collection()
       {
           return collect(Order::getOrder());
       }
}
