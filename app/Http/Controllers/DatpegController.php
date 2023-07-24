<?php

namespace App\Http\Controllers;

use App\Models\datpeg;
use Illuminate\Http\Request;
use App\Http\Requests\StoredatpegRequest;
use App\Http\Requests\UpdatedatpegRequest;

class DatpegController extends Controller
{
    public function show()
    {
        return view('idatpeg', [
            "active" => " data-pegawai"
        ]);
    }

    public function create(Request $request)
    {
        datpeg::create([
            'kd_pegawai' => $request->kd_pegawai,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jeniskelamin,
            'agama' => $request->agama,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_hp' => $request->telepon,
            'email' => $request->email,
            'status_pegawai' => $request->status_pegawai,
            'divisi' => $request->divisi
        ]);
        session()->flash('success', 'Data berhasil disimpan!');
        return redirect('/idatpeg');
    }
    public function index()
    {
        $data = datpeg::all();

        return view('showdatapeg', compact('data'), [
            "active" => " Laporan"
        ]);
    }
}
