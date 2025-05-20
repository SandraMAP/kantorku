@extends('layouts.app')

@section('content')

      <!-- Blok -->
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <p class="text-sm text-uppercase font-weight-bold mb-1">Pengguna</p>
                  <h5 class="font-weight-bolder mb-1">+3,462</h5>
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                </div>
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <p class="text-sm text-uppercase font-weight-bold mb-1">Pengguna</p>
                  <h5 class="font-weight-bolder mb-1">+3,462</h5>
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                </div>
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <p class="text-sm text-uppercase font-weight-bold mb-1">Pengguna</p>
                  <h5 class="font-weight-bolder mb-1">+3,462</h5>
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                </div>
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- End Blok -->


<!-- Table Pegawai -->
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">

        <!-- Heading Label -->
          <div class="card-header py-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-0">Absensi Pegawai</h6>
            </div>
          </div>
        <!-- End Heading Label -->

        
        <table class="table align-items-center mb-3">
          <thead>
            <tr>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Nama</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Unit</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Waktu Masuk</th>
              <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">Status</th>
            </tr>
          </thead>
          
          <tbody>


            <tr class="py-3">
              <td class="text-center py-3">
                <h6 class="text-xs  mb-0 ">Alexa Liras</h6>
              </td>
              <td>
                <p class="text-xs text-center font-weight-bold mb-0 py-3">Programator</p>
              </td>
              <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold py-3">07:05:56</span>
              </td>
              <td class="align-middle text-center py-3">
                <span class="badge bg-gradient-success ">Hadir</span>
              </td>
            </tr>

            <tr>
              <td class="text-center py-3">
                <h6 class="text-xs  mb-0 ">Hello Bianca</h6>
              </td>
              <td>
                <p class="text-xs text-center font-weight-bold mb-0 py-3">FrondEnd</p>
              </td>
              <td class="align-middle text-center text-sm py-3">
              <span class="text-secondary text-xs font-weight-bold">07:05:56</span>
              </td>
              <td class="align-middle text-center py-3">
                <span class="badge bg-gradient-success">Hadir</span>
              </td>
            </tr>

            
            <tr class="py-3">
              <td class="text-center py-3">
                <h6 class="text-xs  mb-0 ">Aca</h6>
              </td>
              <td>
                <p class="text-xs text-center font-weight-bold mb-0 py-3">Develop</p>
              </td>
              <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold py-3">07:05:56</span>
              </td>
              <td class="align-middle text-center py-3">
                <span class="badge bg-gradient-success ">Hadir</span>
              </td>
            </tr>

            <tr>
              <td class="text-center py-3">
                <h6 class="text-xs  mb-0 ">Callista Arum</h6>
              </td>
              <td>
                <p class="text-xs text-center font-weight-bold mb-0 py-3">Programator</p>
              </td>
              <td class="align-middle text-center text-sm py-3">
              <span class="text-secondary text-xs font-weight-bold">07:05:56</span>
              </td>
              <td class="align-middle text-center py-3">
                <span class="badge bg-gradient-secondary">Izin</span>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>


@endsection