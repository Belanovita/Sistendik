<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Manage Jadwal Mengajar') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Manage Jadwal Mengajar</h2>

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
            <div class="d-flex">
                <a href="#" class="btn btn-primary me-2"><i class="bi bi-person-plus"></i> Tambah Jadwal Mengajar</a>
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
                    <th>ID Jadwal</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Pengajar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = [
                        [
                            'id_jadwal' => '20241001',
                            'mata_pelajaran' => 'Matematika',
                            'kelas' => 'X Albiruni',
                            'pengajar' => 'Thom Haye'
                        ],
                        [
                            'id_jadwal' => '20241002',
                            'mata_pelajaran' => 'Biologi',
                            'kelas' => 'X Albiruni',
                            'pengajar' => 'Ivar Jenner'
                        ],
                        [
                            'id_jadwal' => '20241203',
                            'mata_pelajaran' => 'Bahasa Indonesia',
                            'kelas' => 'XII Bung Hatta',
                            'pengajar' => 'Sandy Walsh'
                        ]
                    ];
                    ?>
                <?php foreach ($data as $index => $row): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($row['id_jadwal']); ?></td>
                    <td><?= htmlspecialchars($row['mata_pelajaran']); ?></td>
                    <td><?= htmlspecialchars($row['kelas']); ?></td>
                    <td><?= htmlspecialchars($row['pengajar']); ?></td>
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