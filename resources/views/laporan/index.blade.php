@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Laporan Banjir</h1>

    @forelse ($laporan as $item)
        <article class="card mb-3">
            <div class="card-body">
                <h2 class="h5">{{ $item->lokasi }}</h2>
                <p class="mb-1"><strong>Pelapor:</strong> {{ $item->nama_pelapor }}</p>
                <p class="mb-1"><strong>Tinggi genangan:</strong> {{ $item->tinggi_genangan }} cm</p>
                <p class="mb-0"><strong>Tanggal kejadian:</strong> {{ $item->tanggal_kejadian }}</p>
            </div>
        </article>
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
</div>
@endsection
