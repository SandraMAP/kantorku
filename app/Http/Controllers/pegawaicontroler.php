<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class pegawaicontroler extends Controller
{
    //
    public function index()
    {
        $pegawais = pegawai::all();

        return view('pages.pegawai.index' , [
            'pegawais' => $pegawais,
        ]);
    }

    public function create()
    {
        return view('pages.pegawai.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'min:8', 'max:100'],
            'jabatan' => ['required', 'max:20', ],
            'jenis kelamin' => ['required', Rule::in(['laki-laki', 'perempuan'])],
            'alamat' => ['required', 'string', ],
            'no_telepon' => ['required', 'max:20', ],
            'email' => 'required|email|unique:users,email',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100|max:2048',

        ]);

        Pegawai::create($request->Validated());
        return redirect('/pegawai')->with('success', 'Database berhasil divalidasi dan disimpan!');
    
    }

    public function edit($id)
    {   

        $pegawais = Pegawai::findOrFail($id);

        return view('pages.pegawai.edit', [
            'pegawai' => $pegawais,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => ['required', 'min:8', 'max:100'],
            'jabatan' => ['required', 'max:20', ],
            'jenis kelamin' => ['required', Rule::in(['laki-laki', 'perempuan'])],
            'alamat' => ['required', 'string', ],
            'no_telepon' => ['required', 'max:20', ],
            'email' => 'required|email|unique:users,email',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100|max:2048',

        ]);

        Pegawai::findOrFail($id)->update($request->Validated());
        return redirect('/pegawai')->with('success', 'Database berhasil mengubah data dan disimpan!');
    
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect('/pegawai')->with('success', 'Data berhasil dihapus');
    }

}
