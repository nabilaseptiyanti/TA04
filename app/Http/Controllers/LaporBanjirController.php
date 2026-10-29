<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan; 

class LaporBanjirController extends Controller
{
    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer|min:0',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create($validated);

        return redirect()
            ->route('laporan.create')
            ->with('success', 'Laporan banjir berhasil dikirim dan disimpan!');
    }

    public function index()
    {
        $laporan = Laporan::latest()->get();

        return view('laporan.index', compact('laporan'));
    }
}