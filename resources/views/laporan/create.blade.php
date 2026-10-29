@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Form Laporan Banjir</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_pelapor" class="form-label">Nama pelapor</label>
            <input id="nama_pelapor" name="nama_pelapor" type="text" class="form-control"
                   value="{{ old('nama_pelapor') }}" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input id="lokasi" name="lokasi" type="text" class="form-control"
                   value="{{ old('lokasi') }}" required>
        </div>
        <div class="mb-3">
            <label for="tinggi_genangan" class="form-label">Tinggi genangan (cm)</label>
            <input id="tinggi_genangan" name="tinggi_genangan" type="number" min="0"
                   class="form-control" value="{{ old('tinggi_genangan') }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kejadian" class="form-label">Tanggal kejadian</label>
            <input id="tanggal_kejadian" name="tanggal_kejadian" type="date" class="form-control"
                   value="{{ old('tanggal_kejadian') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim laporan</button>
    </form>
</div>
@endsection
