@include('layout.app')

@section('content')
    
      @yield('content')

<!-- Table Pegawai -->
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">

        <!-- Heading Label -->
          <div class="card-header py-4">
            <div class="d-flex justify-content-between">
              <h6 class="mb-0"> Akun Pengguna</h6>
            </div>
          </div>
        <!-- End Heading Label -->

        <table class="table align-items-center mb-3">
          <thead>
            <tr>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Nama</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Email</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Password</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Role</th>
              <th class="text-center text-uppercase text-primary text-xs font-weight-bolder ">Aksi</th>
            </tr>
          </thead>
       
          <tbody>
            @foreach ($pegawais as $item)
              <tr>
                <td class="text-xs text-center text-uppercase font-weight-bold py-3">{{$item->nama}}</td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->Email}}</td>
                <td class="text-xs text-center font-weight-bold py-3">
                    {{ str_repeat('*', strlen($item->Password)) }}
                </td>
                <td class="text-xs text-center font-weight-bold py-3">{{$item->Role}}</td>
                <td>
                  <div class="d-flex py-3">
                    <a href="/pegawai/{{ $item->id }}" class="d-inline-block mr-2 btn btn-sm btn-warning ">
                      <i class="fas fa-pen"></i>
                    </a>
                    <a href="/pegawai/{{ $item->id }}" class="btn btn-sm btn-danger text-white">
                      <i class="fas fa-eraser"></i>
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection