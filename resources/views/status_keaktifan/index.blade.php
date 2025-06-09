@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Status Keaktifan</h5>
            <div>
                <a href="{{ route('status-keaktifan.create') }}" class="btn btn-primary btn-sm">Tambah Status</a>
                <a href="{{ route('status-keaktifan.export') }}" class="btn btn-success btn-sm">Export Excel</a>
                <form action="{{ route('status-keaktifan.truncate') }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus semua data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus Semua</button>
                </form>
            </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-3">
                <table class="table align-items-center mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Status</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Keterangan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td class="text-sm">{{ $loop->iteration }}</td>
                            <td class="text-sm">{{ $item->nama }}</td>
                            <td class="text-sm">{{ $item->keterangan ?? '-' }}</td>
                            <td class="text-sm">
                                <a href="{{ route('status-keaktifan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('status-keaktifan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        @if ($data->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center text-muted">Belum ada data.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
