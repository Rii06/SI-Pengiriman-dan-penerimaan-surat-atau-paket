@extends('layout')
@section('mainpage')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data user</h6>

            </div>
            <div class="card-body">
                <a href="{{ route('pdf', ['Datadivisi', 'cetakdatdiv'] ) }}" class="btn btn-sm btn-primary"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    PDF</a>
                <a href="{{ route('cetak', ['Datadivisi', 'cetakdatdiv'] ) }}" class="btn btn-sm btn-warning"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    window.print</a>
                <hr>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Kode Divisi</th>
                                <th>Nama Divisi</th>
                                <th>Bagian</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->kd_divisi }}</td>
                                <td>{{ $item->nama_divisi }}</td>
                                <td>{{ $item->bagian }}</td>
                                <td>{{ $item->jabatan }}</td>
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