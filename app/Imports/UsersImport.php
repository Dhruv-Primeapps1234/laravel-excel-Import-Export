<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    **/
    public function model(array $row){

        return new Product([
            'title'     => $row['title'],
            'description'    => $row['description'], 
            'price' => $row['price'],
        ]);
    }
}
