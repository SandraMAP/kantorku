@extends('layouts.app')

@section('content')
    
      @yield('content')

<!-- Table Pegawai -->
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">

        <!-- Heading Label -->
        <div class="card-header py-4">
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="mb-0">Daftar Pegawai</h6>
            <a href="/pegawai/create" class="btn btn-primary btn-sm d-sm-inline-block">Tambah</a>
          </div>
        </div>
        <!-- End Heading Label -->

        <table class="table align-items-center mb-3">
          <thead>
            <tr>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Nama</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Jabatan</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Jenis Kelamin</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Alamat</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">No Telepon</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Email</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Profile</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder "></th>
            </tr>
          </thead>
       
          <tbody>
            @foreach ($pegawais as $item)
              <tr>
                <td class="text-xs text-center text-uppercase font-weight-bold py-3">{{$item->nama}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->jabatan}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->gender}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->alamat}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->no_telepon}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->email}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->foto}}</td>
                <td>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0"  href="/pegawai/{{ $item->id }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="/pegawai/{{ $item->id }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection