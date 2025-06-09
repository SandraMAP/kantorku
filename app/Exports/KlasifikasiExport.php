<?php

namespace App\Exports;

use App\Models\Klasifikasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class KlasifikasiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Klasifikasi::select('id', 'nama', 'keterangan')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'Keterangan'];
    }
}
