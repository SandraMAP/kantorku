<?php

namespace App\Http\Controllers;

use App\Models\JabatanStruktural;
use Illuminate\Http\Request;
use App\Exports\JabatanStrukturalExport;
use Maatwebsite\Excel\Facades\Excel;

class JabatanStrukturalController extends Controller
{
    /**
     * Menampilkan semua data jabatan struktural.
     */
    public function index()
    {
        $data = JabatanStruktural::all();
        return view('jabatan_struktural.index', compact('data'));
    }

    /**
     * Menampilkan form untuk membuat data baru.
     */
    public function create()
    {
        return view('jabatan_struktural.create');
    }

    /**
     * Menyimpan data baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tingkatan' => 'required',
            'keterangan' => 'nullable',
        ]);

        JabatanStruktural::create($request->all());

        return redirect()->route('jabatan-struktural.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Menampilkan form untuk mengedit data.
     */
    public function edit($id)
    {
        $data = JabatanStruktural::findOrFail($id);
        return view('jabatan_struktural.edit', compact('data'));
    }

    /**
     * Memperbarui data di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tingkatan' => 'required',
            'keterangan' => 'nullable',
        ]);

        $data = JabatanStruktural::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('jabatan-struktural.index')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Menghapus data dari database.
     */
    public function destroy($id)
    {
        $data = JabatanStruktural::findOrFail($id);
        $data->delete();

        return redirect()->route('jabatan-struktural.index')->with('success', 'Data berhasil dihapus.');
    }

    /**
     * Menghapus semua data (truncate).
     */
    public function truncate()
    {
        JabatanStruktural::truncate();
        return redirect()->route('jabatan-struktural.index')->with('success', 'Semua data berhasil dihapus.');
    }

    /**
     * Mengekspor data ke file Excel.
     */
    public function export()
    {
        return Excel::download(new JabatanStrukturalExport, 'jabatan-struktural.xlsx');
    }
}
