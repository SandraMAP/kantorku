@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header"><h5>Edit Jabatan Struktural</h5></div>
        <div class="card-body">
            <form action="{{ route('jabatan-struktural.update', $data->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $data->nama) }}" required>
                    @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="tingkatan" class="form-label">Tingkatan</label>
                    <input type="text" name="tingkatan" id="tingkatan" class="form-control" value="{{ old('tingkatan', $data->tingkatan) }}" required>
                    @error('tingkatan') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $data->keterangan) }}</textarea>
                    @error('keterangan') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <a href="{{ route('jabatan-struktural.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
