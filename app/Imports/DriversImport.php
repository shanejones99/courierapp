<?php

namespace App\Imports;

use App\Models\DriverSheet;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DriversImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            $data = [
                'shipment_id' =>$row['shipment_id'],
                'Date of shipment' =>$row['date_of_shipment'],
                'Handler' =>$row['handler'],
                'start_postcode' =>$row['start_postcode'],
                'end_postcode' =>$row['end_postcode'],
                'estimated_start_time' =>$row['estimated_start_time'],
                'estimated_end_time' =>$row['estimated_end_time'],
                'actual_start_time' =>$row['actual_start_time'],
                'actual_end_time' =>$row['actual_end_time'],
                'estimated_miles' =>$row['estimated_miles'],
                'actual_miles_driven' =>$row['actual_miles_driven'],
                'breaks_taken' =>$row['breaks_taken'],
                'arrived_late' =>$row['arrived_late'],
            ];

            DriverSheet::create($data);
        }
    }
}
