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
    </style>
</head>

<body>
    <div class="container">
        <h1>Data User</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Divisi</th>
                    <th>Nama Divisi</th>
                    <th>Bagian</th>
                    <th>Jabatan</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->kd_divisi }}</td>
                    <td>{{ $item->nama_divisi }}</td>
                    <td>{{ $item->bagian }}</td>
                    <td>{{ $item->jabatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>