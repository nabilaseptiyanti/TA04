<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan; 

class LaporBanjirController extends Controller
{
    public function simpan(Request $request)
    {

        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi')->with('success', 'Laporan banjir berhasil dikirim dan disimpan!');
    }

    public function daftar()
    {
        $laporan = Laporan::all();
        return view('daftar-laporan', compact('laporan'));
    }
}