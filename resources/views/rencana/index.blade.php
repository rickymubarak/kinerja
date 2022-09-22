@extends('layouts.main')
@section('content')
    
    <div class="card p-5">
        <div>
            <a href="/rencana/create" class="btn btn-primary col-sm-2">Tambah Rencana</a>
            <a href="/rencana/recycle" class="btn btn-warning col-sm-2">Tong Sampah</a>
            <a href="/rencana/laporan" class="btn btn-success col-sm-2">Tambah Realisasi</a>
        </div>
        
        <div class="card-header text-center bg bg-warning mt-3">
            RENCANA KINERJA PEGAWAI PEMERINTAH KOTA PONTIANAK TAHUN 2022
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </div>
        </div>
        <div class="card-body border border-3">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Rencana</th>
                        <th>Hasil</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                @php
                    $no = 1;    
                @endphp

                @foreach ($rencana as $r)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $r->nip }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->rencana }}</td>
                        <td>{{ $r->target }}<br>{{ $r->hasil }}</td>
                        <td>{{ $r->waktu }}<br> Bulan</td>
                        <td>
                            @if ($r->status == '2')
                                <button class="btn btn-success px-4" onclick="window.location='/rencana/validasi/{{ $r->id }}'">
                                    VALID
                                </button>
                            @elseif($r->status == '0')
                                <button class="btn btn-danger px-3" onclick="window.location='/rencana/validasi/{{ $r->id }}'">
                                    DITOLAK
                                </button>
                            @else
                                <button class="btn btn-secondary px-3" onclick="window.location='/rencana/validasi/{{ $r->id }}'">
                                    PROSES
                                </button>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary mb-1 px-4" onclick="window.location='/rencana/edit/{{ $r->id }}'">
                                EDIT
                            </button>
                                <form method="POST" action="/rencana/hapus/{{ $r->id }}" style="display: inline;"
                                    onsubmit="return hapusData()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-1 px-3">
                                        DELETE    
                                    </button>
                                </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-center bg-info">
            REALISASI KINERJA PEGAWAI PEMERINTAH KOTA PONTIANAK TAHUN 2022
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Rencana</th>
                <th>Hasil</th>
                <th>Waktu</th>
                <th>Progres</th>
              </tr>
            </thead>

            <tbody>

                @php
                    $no = 1;
                @endphp

                @foreach ($rencana as $r)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $r->nip }}</td>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->rencana }}</td>
                    <td>{{ $r->target }}<br>{{ $r->hasil }}</td>
                    <td>{{ $r->waktu }}<br> Bulan</td>
                    <td><span class="badge bg-success">90%</span></td>
                </tr>
                    
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
    </div>

@endsection
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<script>
    function hapusData() {
        pesan = confirm('Yakin data akan dihapus ?');
        if (pesan)
            return true;
        else
            return false;
    }
</script>
</body>