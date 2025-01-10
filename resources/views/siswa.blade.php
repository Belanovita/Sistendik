@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Manage Siswa') <!-- Menentukan title halaman -->

@section('content')
<style>
    h2 {
        color: #25396F;
    }
</style>
<div class="container mt-4">
    <h2>Manage Siswa</h2>

    <!-- Menu Tambah Siswa, Download Excel, dan Pencarian dalam satu baris -->
    <div class="d-flex mb-3 justify-content-between align-items-center">
        <!-- Tombol Tambah Siswa dan Download Excel berada di kiri -->
        <div class="d-flex">
            <a href="#" class="btn btn-primary me-2"><i class="bi bi-person-plus"></i> Tambah Siswa</a>
            <a href="#" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i> Download Excel</a>
        </div>

        <!-- Pencarian berada di sebelah kanan -->
        <div class="input-group" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Cari siswa..." id="searchInput">
            <button class="btn btn-outline-secondary" type="button" id="searchButton">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataSiswa as $index => $siswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $siswa['namaSiswa'] }}</td>
                <td>{{ $siswa['nisn'] }}</td>
                <td>{{ $siswa['id_kelas'] }}</td>
                <td>{{ $siswa['jenisKelamin'] }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data siswa</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection