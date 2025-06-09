<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KlasifikasiExport;

class KlasifikasiController extends Controller
{
    public function index()
    {
        $data = Klasifikasi::all();
        return view('klasifikasi.index', compact('data'));
    }

    public function create()
    {
        return view('klasifikasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        Klasifikasi::create($request->all());
        return redirect()->route('klasifikasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = Klasifikasi::findOrFail($id);
        return view('klasifikasi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $data = Klasifikasi::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('klasifikasi.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        Klasifikasi::destroy($id);
        return redirect()->route('klasifikasi.index')->with('success', 'Data berhasil dihapus.');
    }

    public function truncate()
    {
        Klasifikasi::truncate();
        return redirect()->route('klasifikasi.index')->with('success', 'Semua data berhasil dihapus.');
    }

    public function export()
    {
        return Excel::download(new KlasifikasiExport, 'klasifikasi.xlsx');
    }
}
