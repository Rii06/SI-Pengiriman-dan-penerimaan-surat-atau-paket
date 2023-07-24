<?php

namespace App\Http\Controllers;

use App\Models\Rekdat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRekdatRequest;
use App\Http\Requests\UpdateRekdatRequest;

class RekdatController extends Controller
{
    public function show()
    {
        return view('irekdat', [
            "active" => " rekapan"
        ]);
    }
    public function create(Request $request)
    {
        Rekdat::create([
            'jenis_surat' => $request->jenis_surat,
            'tanggal_terima' => $request->tanggal_terima,
            'no_surat_terima' => $request->no_surat_terima,
            'resisi_surat' => $request->resisi_surat,
            'kode_pegawai' => $request->kode_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'divisi' => $request->divisi,
            'tanggal_surat' => $request->tanggal_surat,
            'nama_pengirim' => $request->nama_pengirim,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'isi_surat' => $request->isi_surat,
            'ekspedisi' => $request->ekspedisi,
        ]);

        session()->flash('success', 'Data berhasil disimpan!');
        return redirect('/irekdat');
    }
    public function index()
    {
        $data = Rekdat::all();

        return view('showrekdat', compact('data'), [
            "active" => " Laporan"
        ]);
    }
}
