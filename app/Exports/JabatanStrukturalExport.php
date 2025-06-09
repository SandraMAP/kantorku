<?php

namespace App\Exports;

use App\Models\JabatanStruktural;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JabatanStrukturalExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JabatanStruktural::select('id', 'nama', 'tingkatan', 'keterangan')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'Tingakatan', 'Keterangan'];
    }
}
