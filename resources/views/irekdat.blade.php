@extends('layout')
@section('mainpage')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Input Rekapan Data</h6>

            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="jenis_surat" class="col-sm-2 col-form-label">Jenis Surat</label>
                        <div class="col-sm-10">
                            <input name="jenis_surat" type="text" class="form-control" id="jenis_surat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal_terima" class="col-sm-2 col-form-label">Tanggal Terima</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_terima" name="tanggal_terima" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_surat_terima" class="col-sm-2 col-form-label">No Surat Terima</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_surat_terima" name="no_surat_terima"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="resisi_surat" class="col-sm-2 col-form-label">Resisi Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="resisi_surat" name="resisi_surat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kode_pegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="divisi" name="divisi" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama_pengirim" class="col-sm-2 col-form-label">Nama Pengirim</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nama_pengirim" name="nama_pengirim" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telepon" name="telepon" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="isi_surat" class="col-sm-2 col-form-label">Isi Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="isi_surat" name="isi_surat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ekspedisi" class="col-sm-2 col-form-label">Ekspedisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ekspedisi" name="ekspedisi" required>
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col offset-sm-2">
                            <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-save"></i>
                                Simpan</button>
                            <a href="?page=mahasiswa-show" class="btn btn-danger"><i class="fas fa-chevron-left"></i>
                                Kembali</a>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection