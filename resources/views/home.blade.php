@extends('layout')
@section('mainpage')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
    </h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        Home
    </h1>
</div>

<div class="row">
    <div class="col-xl-5 mb-3">
        <div class="card border-left-primary shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-3">
                        <div class="fs-3 font-weight-bold text-primary text-uppercase mb-1">
                            Data Pegawai
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            17
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-5 mb-3">
        <div class="card border-left-success shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fs-3 font-weight-bold text-success text-uppercase mb-1">
                            Data Divisi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            12
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-briefcase fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-5 mb-3">
        <div class="card border-left-info shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fs-3 font-weight-bold text-info text-uppercase mb-1">
                            Rekapan Data
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            31
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 mb-3">
        <div class="card border-left-danger shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fs-3 font-weight-bold text-danger text-uppercase mb-1">
                            Data Pengirim
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            31
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection