<?php

namespace App\Http\Controllers;

use App\Models\StatusKeaktifan;
use Illuminate\Http\Request;
use App\Exports\StatusKeaktifanExport;
use Maatwebsite\Excel\Facades\Excel;


class StatusKeaktifanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = StatusKeaktifan::all();
        return view('status_keaktifan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status_keaktifan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        StatusKeaktifan::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('status-keaktifan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StatusKeaktifan $statusKeaktifan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(StatusKeaktifan $statusKeaktifan)
    public function edit($id)
    {
        $data = StatusKeaktifan::findOrFail($id);
        return view('status_keaktifan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, StatusKeaktifan $statusKeaktifan)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $data = StatusKeaktifan::findOrFail($id);
        $data->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('status-keaktifan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(StatusKeaktifan $statusKeaktifan)
    public function destroy($id)
    {
        $data = StatusKeaktifan::findOrFail($id);
        $data->delete();

        return redirect()->route('status-keaktifan.index')->with('success', 'Data berhasil dihapus.');
    }

    // Hapus semua data
    public function truncate()
    {
        StatusKeaktifan::truncate();
        return redirect()->route('status-keaktifan.index')->with('success', 'Semua data berhasil dihapus.');
    }

    public function export()
    {
        return Excel::download(new StatusKeaktifanExport, 'status_keaktifan.xlsx');
    }


}
