@extends('layout')
@section('mainpage')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data user</h6>

            </div>
            <div class="card-body">
                <a href="{{ route('pdf', ['User', 'cetakuser'] ) }}" class="btn btn-sm btn-primary"><i
                        class="fas fa-print"></i>
                    Cetak
                    PDF</a>
                <a href="{{ route('cetak', ['User', 'cetakuser'] ) }}" class="btn btn-sm btn-warning"><i
                        class="fas fa-print"></i>
                    Cetak
                    window.print</a>
                <hr>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Level</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->level_user }}</td>
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