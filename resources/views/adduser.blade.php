@extends('layout')
@section('mainpage')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">

    </h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        User
    </h1>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">User</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('create-user') }}" method="post">
                    @csrf
                    @if (Session::has('success'))
                    <div class="row mb-3">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                    @endif
                    <div class="row mb-3">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select id="level_user" class="form-control" name="level_user" required>
                                <option value="-" selected disabled>- Pilih -</option>
                                <option value="administrator">Administrator</option>
                                <option value="operator">Operator</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="username" type="text" class="form-control" id="username" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col offset-sm-2">
                            <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-save"></i>
                                Simpan</button>
                            <a href="?page=user-show" class="btn btn-danger"><i class="fas fa-chevron-left"></i>
                                Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection