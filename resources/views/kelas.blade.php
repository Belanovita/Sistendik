<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Manage Kelas') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Manage Kelas</h2>

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
            <div class="d-flex">
                <a href="#" class="btn btn-primary me-2"><i class="bi bi-person-plus"></i> Tambah Kelas</a>
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

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kelas</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Jumlah Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $dataKelas = [
                        [
                            'id_kelas' => '20241001',
                            'nama' => 'X Pythagoras',
                            'jurusan' => 'IPA',
                            'jumlah_siswa' => 32
                        ],
                        [
                            'id_kelas' => '20241002',
                            'nama' => 'X Aljabar',
                            'jurusan' => 'IPA',
                            'jumlah_siswa' => 32
                        ],
                        [
                            'id_kelas' => '20241003',
                            'nama' => 'X Newton',
                            'jurusan' => 'IPS',
                            'jumlah_siswa' => 32
                        ]
                    ];
                ?>
                <?php foreach ($dataKelas as $index => $kelas): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($kelas['id_kelas']); ?></td>
                    <td><?= htmlspecialchars($kelas['nama']); ?></td>
                    <td><?= htmlspecialchars($kelas['jurusan']); ?></td>
                    <td><?= htmlspecialchars($kelas['jumlah_siswa']); ?></td>
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