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
                <h6 class="m-0 font-weight-bold text-primary">Input Data Pengiriman Surat atau Paket</h6>

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
                        <label for="tanggal_kirim" class="col-sm-2 col-form-label">Tanggal Kirim</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_kirim" name="tanggal_kirim" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_surat_kirim" class="col-sm-2 col-form-label">No Surat Kirim</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_surat_kirim" name="no_surat_kirim" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="resi_surat" class="col-sm-2 col-form-label">Resi Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="resi_surat" name="resi_surat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kd_pegawai" class="col-sm-2 col-form-label">Kd Pegawai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kd_pegawai" name="kd_pegawai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="divisi" name="divisi" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kepada" class="col-sm-2 col-form-label">kepada</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kepada" name="kepada" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="telepon" class="col-sm-2 col-form-label">telepon</label>
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

                    <div class="row mb-3">
                        <label for="biaya_kirim" class="col-sm-2 col-form-label">Biaya Kirim</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="biaya_kirim" name="biaya_kirim" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="berat" name="berat" required>
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col offset-sm-2">
                            <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-save"></i>
                                Simpan</button>
                            <a href="?page=dosen-show" class="btn btn-danger"><i class="fas fa-chevron-left"></i>
                                Kembali</a>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection