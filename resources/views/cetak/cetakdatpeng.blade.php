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
</body>

</html>