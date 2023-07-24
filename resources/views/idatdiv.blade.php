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
                <h6 class="m-0 font-weight-bold text-primary">Input Divisi</h6>

            </div>
            <div class="card-body">
                <form action="{{ route('create-idatdiv') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="kd_divisi" class="col-sm-2 col-form-label">Kd divisi</label>
                        <div class="col-sm-10">
                            <input name="kd_divisi" type="text" class="form-control" id="kd_divisi" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama_divisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi Bagian</label>
                        <div class="col-sm-10">
                            <select name="divisi" id="divisi" class="form-control" name="divisi" required>
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