<?php

namespace App\Http\Controllers;

use App\Models\Datpeng;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDatpengRequest;
use App\Http\Requests\UpdateDatpengRequest;

class DatpengController extends Controller
{
    public function show()
    {
        return view('idatpengirim', [
            "active" => " rekapan"
        ]);
    }
    public function create(Request $request)
    {
        Datpeng::create([
            'jenis_surat' => $request->jenis_surat,
            'tanggal_kirim' => $request->tanggal_kirim,
            'no_surat_kirim' => $request->no_surat_kirim,
            'resi_surat' => $request->resi_surat,
            'nama_pegawai' => $request->nama_pegawai,
            'kd_pegawai' => $request->kd_pegawai,
            'divisi' => $request->divisi,
            'kepada' => $request->kepada,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'isi_surat' => $request->isi_surat,
            'ekspedisi' => $request->ekspedisi,
            'biaya_kirim' => $request->biaya_kirim,
            'berat' => $request->berat,
        ]);

        session()->flash('success', 'Data berhasil disimpan!');
        return redirect('/idatpengirim');
    }
    public function index()
    {
        $data = Datpeng::all();

        return view('showdatapeng', compact('data'), [
            "active" => " Laporan"
        ]);
    }
}
