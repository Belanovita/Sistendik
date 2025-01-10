@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Tenaga Pendidik') <!-- Menentukan title halaman -->

@section('content')
<style>
    h2 {
        color: #25396F;
    }
</style>
<div class="container mt-4">
    <h2>Manage Tenaga Pendidik</h2>

    <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
    <div class="d-flex mb-3 justify-content-between align-items-center">
        <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
        <div class="d-flex">
            <a href="#" class="btn btn-primary me-2"><i class="bi bi-person-plus"></i> Tambah Tenaga Pendidik</a>
            <a href="#" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i> Download Excel</a>
        </div>

        <!-- Pencarian berada di sebelah kanan -->
        <div class="input-group" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Search..." id="searchInput">
            <button class="btn btn-outline-secondary" type="button" id="searchButton">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <!-- Tabel Data Tenaga Pendidik -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Verifikator</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tenagaPendidik as $pendidik)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pendidik['nama'] }}</td>
                <td>{{ $pendidik['nama_role'] }}</td>
                <td>{{ $pendidik['verifikator'] ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection