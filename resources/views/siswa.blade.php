<!-- resources/views/tenaga_pendidik.blade.php -->
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

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
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

        <?php
        // Data siswa
        $dataSiswa = [
            [
                'nama' => 'Nathan Noel Romejo Tjoe A On',
                'nisn' => '222211',
                'kelas' => 'X Pythagoras',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama' => 'Jay Noah Idzes',
                'nisn' => '224535',
                'kelas' => 'X Aljabar',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama' => 'Andi Nur Wahidah Azhar Mangkona',
                'nisn' => '234234',
                'kelas' => 'X Newton',
                'jenis_kelamin' => 'Perempuan',
            ],
        ];
        ?>

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
                <?php foreach ($dataSiswa as $index => $siswa): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($siswa['nama']); ?></td>
                    <td><?= htmlspecialchars($siswa['nisn']); ?></td>
                    <td><?= htmlspecialchars($siswa['kelas']); ?></td>
                    <td><?= htmlspecialchars($siswa['jenis_kelamin']); ?></td>
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