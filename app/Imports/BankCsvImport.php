<?php

namespace App\Imports;

use App\Bank;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BankCsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bank([
            'bcode'     =>  $row[0],
            'bname'      =>  $row[1],
        ]);
    }
}
