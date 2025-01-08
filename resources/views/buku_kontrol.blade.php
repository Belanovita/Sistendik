<!-- resources/views/tenaga_pendidik.blade.php -->
@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Buku Kontrol') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Buku Kontrol</h2>

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
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $dataSiswa = [
                        [
                            'nama' => 'Nathan Noel Romejo Tjoe A On',
                            'nisn' => '222211',
                            'kelas' => 'X Pythagoras',
                            'jenis_kelamin' => 'Laki-Laki',
                            'status' => 'Selesai',
                            'status_class' => 'bg-success text-white',
                        ],
                        [
                            'nama' => 'Jay Noah Idzes',
                            'nisn' => '224535',
                            'kelas' => 'X Aljabar',
                            'jenis_kelamin' => 'Laki-Laki',
                            'status' => 'Belum Selesai',
                            'status_class' => 'bg-warning text-dark',
                        ],
                        [
                            'nama' => 'Andi Nur Wahidah Azhar Mangkona',
                            'nisn' => '234234',
                            'kelas' => 'X Newton',
                            'jenis_kelamin' => 'Perempuan',
                            'status' => 'Selesai',
                            'status_class' => 'bg-success text-white',
                        ],
                    ];
                @endphp
                @foreach ($dataSiswa as $index => $siswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $siswa['nisn'] }}</td>
                        <td>{{ $siswa['nama'] }}</td>
                        <td>{{ $siswa['kelas'] }}</td>
                        <td>
                            <span class="badge {{ $siswa['status_class'] }}">
                                {{ $siswa['status'] }}
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-info">Detail</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
@endsection