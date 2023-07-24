@extends('layout')
@section('mainpage')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data user</h6>

            </div>
            <div class="card-body">
                <a href="{{ route('pdf', ['Datapengirim', 'cetakdatpeng'] ) }}" class="btn btn-sm btn-primary"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    FPDF</a>
                <a href="{{ route('cetak', ['Datapengirim', 'cetakdatpeng'] ) }}" class="btn btn-sm btn-warning"
                    target="_blank"><i class="fas fa-print"></i>
                    Cetak
                    window.print</a>
                <hr>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Jenis Surat</th>
                                <th>Tanggal Kirim</th>
                                <th>No Surat Kirim</th>
                                <th>Resi Surat</th>
                                <th>Nama Pegawai</th>
                                <th>Kode Pegawai</th>
                                <th>Divisi</th>
                                <th>Kepada</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Isi Surat</th>
                                <th>Ekspedisi</th>
                                <th>Biaya Kirim</th>
                                <th>Berat</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->jenis_surat }}</td>
                                <td>{{ $item->tanggal_kirim }}</td>
                                <td>{{ $item->no_surat_kirim }}</td>
                                <td>{{ $item->resi_surat }}</td>
                                <td>{{ $item->nama_pegawai }}</td>
                                <td>{{ $item->kd_pegawai }}</td>
                                <td>{{ $item->divisi }}</td>
                                <td>{{ $item->kepada }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->isi_surat }}</td>
                                <td>{{ $item->ekspedisi }}</td>
                                <td>{{ $item->biaya_kirim }}</td>
                                <td>{{ $item->berat }}</td>
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