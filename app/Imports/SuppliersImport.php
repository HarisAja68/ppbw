<?php

namespace App\Imports;

use App\Models\suppliersModel;
use Maatwebsite\Excel\Concerns\ToModel;

class SuppliersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new suppliersModel([
            'kode' => $row[1],
            'nama' => $row[2],
            'alamat' => $row[3],
            'no_hp' => $row[4],
        ]);
    }
}
