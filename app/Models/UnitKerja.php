<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerjas'; // opsional, untuk eksplisit

    protected $fillable = [
        'nama',
        'jenis',
        'keterangan'
    ];
}
