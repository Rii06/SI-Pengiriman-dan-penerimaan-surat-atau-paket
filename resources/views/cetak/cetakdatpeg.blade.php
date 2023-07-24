<!DOCTYPE html>
<html>

<head>
    <title>Cetak PDF</title>
    <style>
        /* Gaya CSS khusus untuk halaman PDF */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        @page {
            size: A4 landscape;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data User</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Status Pegawai</th>
                    <th>Divisi</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->status_pegawai }}</td>
                    <td>{{ $item->divisi }}</td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>