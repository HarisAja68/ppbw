<?php

namespace App\Exports;

use App\Models\suppliersModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuppliersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return suppliersModel::all();
    }

    public function map($suppliers): array
    {
        return [
            $suppliers->kode,
            $suppliers->nama,
            $suppliers->barang,
            $suppliers->alamat,
            $suppliers->no_hp,
        ];
    }

    public function headings(): array
    {
        return [
            'Kode Suppliers',
            'Nama suppliers',
            'Nama barang',
            'Alamat suppliers',
            'No Hanphpne',
        ];
    }
}
