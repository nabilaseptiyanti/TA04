@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Profil Petugas BPBD</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ Auth::user()->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
        <li class="list-group-item"><strong>Akun Dibuat Pada:</strong> {{ Auth::user()->created_at }}</li>
    </ul>
</div>
@endsection