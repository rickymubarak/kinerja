<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kinerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

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
                        <td>
                            @if ($r->status == '1')
                            <button class="btn btn-success">
                                VALID
                            </button>
                            @elseif($r->status == '0')
                                <button class="btn btn-danger">
                                    DITOLAK
                                </button>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary m-3" onclick="window.location='/rencana/edit/{{ $r->id }}'">
                                EDIT
                            </button>
                            <b>
                                <form method="POST" action="/rencana/hapus/{{ $r->id }}" style="display: inline;"
                                    onsubmit="return hapusData()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        DELETE    
                                    </button>
                                </form>
                            </b>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

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