@extends('layouts.app') <!-- sesuai dengan layout kamu -->

@section('content')

      @yield('content')

<!-- Table Pegawai -->



    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 text-uppercase">Tambah Pegawai</p>
                <button class="btn btn-primary btn-sm ms-auto">Submit</button>
              </div>
            </div>


            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kota" class="form-control-label">Jenis Kelamin</label>
                    <select class="form-control" >
                      <option selected disabled>Pilih</option>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                    <input class="form-control" type="text"  placeholder="Masukkan No Telepon">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Informasi Kontak</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alamat</label>
                    <input class="form-control" type="text"  placeholder="Masukkan Alamat Lengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email</label>
                    <input class="form-control" type="text"  placeholder="Masukkan Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No Telepon</label>
                    <input class="form-control" type="text" placeholder="Masukkan No Telepon">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              
              <p class="text-uppercase text-sm">Profile Picture</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="photo" class="form-control-label">Upload Foto</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
