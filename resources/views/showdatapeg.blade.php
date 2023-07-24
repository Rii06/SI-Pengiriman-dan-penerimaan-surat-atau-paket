@extends('layout')
@section('mainpage')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data user</h6>

            </div>
            <div class="card-body">
                <a href="{{ route('pdf', ['Datapegawai', 'cetakdatpeg'] ) }}" class="btn btn-sm btn-primary"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    FPDF</a>
                <a href="{{ route('cetak', ['Datapegawai', 'cetakdatpeg'] ) }}" class="btn btn-sm btn-warning"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    window.print</a>
                <hr>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Status Pegawai</th>
                                <th>Divisi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->status_pegawai }}</td>
                                <td>{{ $item->divisi }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection