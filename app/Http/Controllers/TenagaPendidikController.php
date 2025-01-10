<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class TenagaPendidikController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        $response = $this->apiService->get('tenaga-pendidik');
        $tenagaPendidik = $response->json()['data'] ?? []; // Data tenaga pendidik

        $roleResponse = $this->apiService->get('role'); // Ambil data Role dari API
        $roles = $roleResponse->json()['data'] ?? []; // Data Role

        // Buat mapping (id_role => nama_role)
        $roleMapping = collect($roles)->pluck('nama_role', 'id_role')->toArray();

        // Tambahkan nama_role ke data tenaga pendidik
        foreach ($tenagaPendidik as &$pendidik) {
            $pendidik['nama_role'] = $roleMapping[$pendidik['id_role']] ?? 'Tidak Diketahui';
        }

        return view('tenaga_pendidik', compact('tenagaPendidik'));
    }
}
