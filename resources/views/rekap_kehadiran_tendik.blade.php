<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Rekap Kehadiran Tendik') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Rekap Kehadiran Tendik</h2>

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

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                    <th>Izin</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $data = [
                        ['nama' => 'John Doe', 'username' => 'johndoe', 'hadir' => 60, 'tidak_hadir' => 10, 'izin' => 5],
                        ['nama' => 'Shin Taeyong', 'username' => 'taeyongshin', 'hadir' => 45, 'tidak_hadir' => 15, 'izin' => 10],
                        ['nama' => 'Ragnar Oratmangoen', 'username' => 'oratmangoen', 'hadir' => 70, 'tidak_hadir' => 0, 'izin' => 5],
                        ['nama' => 'Calvin Verdonk', 'username' => 'verdonk', 'hadir' => 50, 'tidak_hadir' => 20, 'izin' => 10],
                    ];
                @endphp
        
                @foreach ($data as $index => $row)
                    @php
                        // Total hari dihitung dari Hadir + Tidak Hadir + Izin
                        $total_hari = $row['hadir'] + $row['tidak_hadir'] + $row['izin'];
                        $persentase_kehadiran = $total_hari > 0 ? ($row['hadir'] / $total_hari) * 100 : 0;
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['username'] }}</td>
                        <td>{{ $row['hadir'] }}</td>
                        <td>{{ $row['tidak_hadir'] }}</td>
                        <td>{{ $row['izin'] }}</td>
                        <td>{{ number_format($persentase_kehadiran, 2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection