@extends('layouts.sidebar') <!-- Menggunakan layout sidebar -->

@section('title', 'Rekap Kehadiran Siswa') <!-- Menentukan title halaman -->

@section('content')
    <style>
        h2 {
            color: #25396F;
        }
    </style>
    <div class="container mt-4">
        <h2>Rekap Kehadiran Siswa</h2>

        <!-- Menu Tambah Tenaga Pendidik, Download Excel, dan Pencarian dalam satu baris -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <!-- Tombol Tambah Tenaga Pendidik dan Download Excel berada di kiri -->
            <div class="d-flex">
                <a href="#" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i> Export Data</a>
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
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                    <th>Sakit</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $data = [
                        ['nisn' => '123456', 'nama' => 'Jay Noah Idzes', 'kelas' => 'X Aljabar', 'hadir' => 60, 'tidak_hadir' => 10, 'sakit' => 5],
                        ['nisn' => '654321', 'nama' => 'Andi Nur Wahidah Azhar Mangkona', 'kelas' => 'X Newton', 'hadir' => 45, 'tidak_hadir' => 15, 'sakit' => 10],
                        ['nisn' => '112233', 'nama' => 'Nathan Noel Romejo Tjoe A On', 'kelas' => 'X Pythagoras', 'hadir' => 70, 'tidak_hadir' => 0, 'sakit' => 5],
                        ['nisn' => '445566', 'nama' => 'Louista Thania Harahap', 'kelas' => 'X Algebra', 'hadir' => 50, 'tidak_hadir' => 20, 'sakit' => 10],
                    ];
                @endphp

                @foreach ($data as $index => $row)
                    @php
                        // Total hari dihitung dari Hadir + Tidak Hadir + Sakit
                        $total_hari = $row['hadir'] + $row['tidak_hadir'] + $row['sakit'];
                        $persentase_kehadiran = $total_hari > 0 ? ($row['hadir'] / $total_hari) * 100 : 0;
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $row['nisn'] }}</td>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['kelas'] }}</td>
                        <td>{{ $row['hadir'] }}</td>
                        <td>{{ $row['tidak_hadir'] }}</td>
                        <td>{{ $row['sakit'] }}</td>
                        <td>{{ number_format($persentase_kehadiran, 2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Fungsi untuk pencarian sederhana berdasarkan Nama atau NISN
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchValue = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const nisn = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const nama = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                
                if (nisn.includes(searchValue) || nama.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
