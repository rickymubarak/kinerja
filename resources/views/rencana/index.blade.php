@extends('layouts.main')
    
@section('content')

    <div class="card p-5">
        <div>
            <a href="/rencana/create" class="btn btn-primary col-sm-2">Tambah Rencana</a>
            <a href="/rencana/recycle" class="btn btn-warning col-sm-2">Tong Sampah</a>
        </div>

        <div class="card-header text-center bg bg-warning mt-3">
            RENCANA KINERJA PEGAWAI PEMERINTAH KOTA PONTIANAK TAHUN 2022
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

                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $r->nip }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->rencana }}</td>
                        <td>{{ $r->target }}<br>{{ $r->hasil }}</td>
                        <td>{{ $r->waktu }}<br> Bulan</td>
                        <td><a href="" class="btn btn-success">100% Kinerja</a></td>
                        
                        <td><a class="btn btn-secondary m-3" href="/rencana/{{ $r->id }}/edit" role="button">EDIT</a>
                            <b>
                                <form method="POST" action="/rencana/hapus/{{ $r->id }}" style="display: inline;"
                                    onsubmit="return hapusData()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        DELETE    
                                    </button>
                                </form>
                                
                                {{-- <a type="button" href="/rencana/hapus/{{ $r->id }}" class="btn btn-danger" onsubmit="return hapusData()">
                                </a> --}}
                            </b>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
   <script>
        function hapusData() {
            pesan = confirm('Yakin data akan dihapus ?');
            if (pesan)
                return true;
            else
                return false;
        }
   </script>
@endsection