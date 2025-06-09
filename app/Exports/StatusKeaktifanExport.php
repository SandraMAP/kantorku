<?php

namespace App\Exports;

use App\Models\StatusKeaktifan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StatusKeaktifanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return StatusKeaktifan::select('id', 'nama')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Status',
        ];
    }
}
