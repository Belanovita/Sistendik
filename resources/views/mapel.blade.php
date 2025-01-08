<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Manage Mata Pelajaran') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Manage Mata Pelajaran</h2>

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
            <div class="d-flex">
                <a href="#" class="btn btn-primary me-2"><i class="bi bi-person-plus"></i> Tambah Mapel</a>
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

        <?php
        // Data mata pelajaran
        $dataMapel = [
            ['id_mapel' => 'MTK', 'nama' => 'Matematika'],
            ['id_mapel' => 'GEO', 'nama' => 'Geografi'],
            ['id_mapel' => 'BIO', 'nama' => 'Biologi'],
        ];
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Mapel</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataMapel as $index => $mapel): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($mapel['id_mapel']); ?></td>
                    <td><?= htmlspecialchars($mapel['nama']); ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection