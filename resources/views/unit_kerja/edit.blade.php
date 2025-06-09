@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header"><h5>Edit Unit atau Lingkup Kerja</h5></div>
        <div class="card-body">
            <form action="{{ route('unit-kerja.update', $data->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
                </div>

                <div class="mb-3">
                    <label>Jenis</label>
                    <select name="jenis" class="form-control" required>
                        <option value="unit" {{ $data->jenis == 'unit' ? 'selected' : '' }}>Unit</option>
                        <option value="lingkup" {{ $data->jenis == 'lingkup' ? 'selected' : '' }}>Lingkup</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control">{{ $data->keterangan }}</textarea>
                </div>

                <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
