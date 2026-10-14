@extends('main')

@section('title', 'Daftar Mahasiswa')

@section('content')

    <h2>Daftar Mahasiswa</h2>

    <x-alert
        type="success"
        message="Data mahasiswa berhasil dimuat."
    />

    @foreach($students as $student)

        <div class="student-card">

            <h3>{{ $student['name'] }}</h3>

            <p>
                <strong>Jurusan:</strong>
                {{ $student['major'] }}
            </p>

            <p>
                <strong>Umur:</strong>
                {{ $student['age'] }} tahun
            </p>

            @if($student['age'] >= 22)
                <p>
                    <strong>Status:</strong>
                    <span style="color: green;">Senior</span>
                </p>
            @else
                <p>
                    <strong>Status:</strong>
                    <span style="color: blue;">Junior</span>
                </p>
            @endif

            <p><strong>Mata Kuliah:</strong></p>

            @forelse($student['courses'] as $course)
                <span class="course">{{ $course }}</span>
            @empty
                <p>Tidak ada mata kuliah.</p>
            @endforelse

        </div>

    @endforeach

@endsection