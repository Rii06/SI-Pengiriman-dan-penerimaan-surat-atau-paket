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
                <h6 class="m-0 font-weight-bold text-primary">Input Data Pegawai</h6>

            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="kd_pegawai" class="col-sm-2 col-form-label">Kd Pegawai</label>
                        <div class="col-sm-10">
                            <input name="kd_pegawai" type="text" class="form-control" id="kd_pegawai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option>Islam</option>
                                <option>Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" id="status" class="form-control" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option>Nikah</option>
                                <option>belum Nikah</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="telepon" name="telepon">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status_pegawai" class="col-sm-2 col-form-label">Status Pegawai</label>
                        <div class="col-sm-10">
                            <select name="status_pegawai" id="status_pegawai" class="form-control" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option>Tetap</option>
                                <option>Kontrak</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi Bagian</label>
                        <div class="col-sm-10">
                            <select name="divisi" id="divisi" class="form-control" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option>CEO</option>
                                <option>HRD</option>
                                <option>Admin</option>
                                <option>Pegawai</option>
                            </select>
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