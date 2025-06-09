<?php

namespace App\Exports;

use App\Models\JabatanStruktural;
use App\Models\UnitKerja;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UnitKerjaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UnitKerja::select('id', 'nama', 'jenis', 'keterangan')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'Jenis', 'Keterangan'];
    }
}
