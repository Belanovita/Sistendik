<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        // Ambil data siswa dari API
        $response = $this->apiService->get('get-siswa'); // Pastikan endpoint sesuai
        $dataSiswa = $response->json() ?? []; // Ambil data siswa

        return view('siswa', compact('dataSiswa'));
    }

    public function store(Request $request)
    {
        // Tambahkan data siswa baru melalui API
        $response = $this->apiService->post('add-siswa', $request->all());

        if ($response->successful()) {
            return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan');
        }

        return redirect()->route('siswa.index')->with('error', $response->json()['error'] ?? 'Terjadi kesalahan');
    }

    public function destroy($id)
    {
        // Hapus siswa melalui API
        $response = $this->apiService->delete("siswa/{$id}");

        if ($response->successful()) {
            return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus');
        }

        return redirect()->route('siswa.index')->with('error', $response->json()['error'] ?? 'Terjadi kesalahan');
    }
}
