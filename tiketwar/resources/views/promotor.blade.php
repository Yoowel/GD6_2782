@extends('layouts.main')

@section('title', 'Daftar Promotor')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-3">Daftar Promotor</h1>
        <a href="{{ route('konser.create') }}" class="btn btn-success">Tambah Promotor</a>
    </div>    
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kontak</th>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($daftarPromotor as $promotor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $promotor->nama }}</td>
                    <td>{{ $promotor->kontak }}</td>
                    <td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Belum ada Promotor.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection