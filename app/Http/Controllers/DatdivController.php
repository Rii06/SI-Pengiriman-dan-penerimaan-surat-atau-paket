<?php

namespace App\Http\Controllers;

use App\Models\Datdiv;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDatdivRequest;
use App\Http\Requests\UpdateDatdivRequest;

class DatdivController extends Controller
{
    public function show()
    {
        return view('idatdiv', [
            "active" => " data-pegawai"
        ]);
    }

    public function create(Request $request)
    {
        Datdiv::create([
            'kd_divisi' => $request->kd_divisi,
            'nama_divisi' => $request->nama_divisi,
            'bagian' => $request->divisi,
        ]);
        session()->flash('success', 'Data berhasil disimpan!');
        return redirect('/idatdiv');
    }
    public function index()
    {
        $data = Datdiv::all();

        return view('showdatadiv', compact('data'), [
            "active" => " Laporan"
        ]);
    }
}
