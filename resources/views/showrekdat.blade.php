@extends('layout')
@section('mainpage')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data user</h6>

            </div>
            <div class="card-body">
                <a href="{{ route('pdf', ['Rekapdata', 'cetakrekdat'] ) }}" class="btn btn-sm btn-primary"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    FPDF</a>
                <a href="{{ route('cetak', ['Rekapdata', 'cetakrekdat'] ) }}" class="btn btn-sm btn-warning"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    window.print</a>
                <hr>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Jenis Surat</th>
                                <th>Tanggal Terima</th>
                                <th>No Surat Terima</th>
                                <th>Resi Surat</th>
                                <th>Kode Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>Divisi</th>
                                <th>Nama Pengirim</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Isi Surat</th>
                                <th>Ekspedisi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->jenis_surat }}</td>
                                <td>{{ $item->tanggal_terima }}</td>
                                <td>{{ $item->no_surat_terima }}</td>
                                <td>{{ $item->resisi_surat }}</td>
                                <td>{{ $item->kode_pegawai }}</td>
                                <td>{{ $item->nama_pegawai }}</td>
                                <td>{{ $item->divisi }}</td>
                                <td>{{ $item->nama_pengirim }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->isi_surat }}</td>
                                <td>{{ $item->ekspedisi }}</td>
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