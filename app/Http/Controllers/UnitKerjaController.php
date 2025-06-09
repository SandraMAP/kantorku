<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;
use App\Exports\UnitKerjaExport;
use Maatwebsite\Excel\Facades\Excel;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data = UnitKerja::all();
        return view('unit_kerja.index', compact('data'));
    }

    public function create()
    {
        return view('unit_kerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required|in:unit,lingkup',
            'keterangan' => 'nullable'
        ]);

        UnitKerja::create($request->all());
        return redirect()->route('unit-kerja.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(string $id)
    {
        $data = UnitKerja::findOrFail($id);
        return view('unit_kerja.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required|in:unit,lingkup',
            'keterangan' => 'nullable'
        ]);

        $data = UnitKerja::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('unit-kerja.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(string $id)
    {
        $data = UnitKerja::findOrFail($id);
        $data->delete();

        return redirect()->route('unit-kerja.index')->with('success', 'Data berhasil dihapus.');
    }

    public function truncate()
    {
        UnitKerja::truncate();
        return redirect()->route('unit-kerja.index')->with('success', 'Semua data berhasil dihapus.');
    }

    public function export()
    {
        return Excel::download(new UnitKerjaExport, 'unit-kerja.xlsx');
    }
}
