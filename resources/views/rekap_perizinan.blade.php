<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Rekap Perizinan') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Rekap Perizinan</h2>

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
            <div class="d-flex">
                <a href="#" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i>Export Data</a>
            </div>

            <!-- Pencarian berada di sebelah kanan -->
            <div class="input-group" style="max-width: 300px;">
                <input type="text" class="form-control" placeholder="Search..." id="searchInput">
                <button class="btn btn-outline-secondary" type="button" id="searchButton">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>

        <?php
        // Data izin
        $dataIzin = [
            [
                'tanggal_izin' => '2024/10/11',
                'pengaju' => 'Marselino Ferdinand',
                'durasi' => 3,
                'status' => 'Selesai',
                'status_class' => 'bg-success',
                'lampiran' => '/path/to/lampiran1.pdf',
            ],
            [
                'tanggal_izin' => '2024/12/12',
                'pengaju' => 'Rafael Struick',
                'durasi' => 4,
                'status' => 'Menunggu Persetujuan',
                'status_class' => 'bg-warning text-dark',
                'lampiran' => '/path/to/lampiran2.pdf',
            ],
            [
                'tanggal_izin' => '2024/12/24',
                'pengaju' => 'Sayne Pattynama',
                'durasi' => 4,
                'status' => 'Ditolak',
                'status_class' => 'bg-danger',
                'lampiran' => '/path/to/lampiran3.pdf',
            ],
            [
                'tanggal_izin' => '2025/01/01',
                'pengaju' => 'Arhan Pratama',
                'durasi' => 6,
                'status' => 'Sedang Berlangsung',
                'status_class' => 'bg-primary',
                'lampiran' => '/path/to/lampiran4.pdf',
            ],
        ];
        ?>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Izin</th>
                    <th>Pengaju</th>
                    <th>Durasi (hari)</th>
                    <th>Status</th>
                    <th>Lampiran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataIzin as $index => $izin): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($izin['tanggal_izin']); ?></td>
                    <td><?= htmlspecialchars($izin['pengaju']); ?></td>
                    <td><?= htmlspecialchars($izin['durasi']); ?></td>
                    <td>
                        <span class="badge <?= htmlspecialchars($izin['status_class']); ?>">
                            <?= htmlspecialchars($izin['status']); ?>
                        </span>
                    </td>
                    <td>
                        <a href="<?= htmlspecialchars($izin['lampiran']); ?>" class="btn btn-outline-primary btn-sm" download>
                            <i class="bi bi-download"></i> Download
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-info">Detail</button>   
                    </td>             
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>        
    </div>
@endsection