<?php
namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Amrila Razy Ramadhani';
        $nim = '242520103';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
    
public function daftar()
{
    $mahasiswa = [
        [
            'nama' => 'Amrila Razy Ramadhani',
            'nim' => '242520103',
            'ipk' => 3.80
        ],
        [
            'nama' => 'Emi Nur Khamidah',
            'nim' => '242520111',
            'ipk' => 3.40
        ],
        [
            'nama' => 'Indah Gayuh Rindang',
            'nim' => '242520115',
            'ipk' => 3.20
        ],
        [
            'nama' => 'Luluk Badriyah',
            'nim' => '242520120',
            'ipk' => 2.80
        ],
        [
            'nama' => 'Etyk Nurvitasari',
            'nim' => '242520132',
            'ipk' => 1.90
        ],
    ];

    return view('mahasiswa.daftar', compact('mahasiswa'));
}
 public function detail($nim)
    {
        $mahasiswa = [
            [
                'nama' => 'Amrila Razy Ramadhani',
                'nim' => '242520103',
                'ipk' => 3.80
            ],
            [
                'nama' => 'Emi Nur Khamidah',
                'nim' => '242520111',
                'ipk' => 3.40
            ],
            [
                'nama' => 'Indah Gayuh Rindang',
                'nim' => '242520115',
                'ipk' => 3.20
            ],
            [
                'nama' => 'Luluk Badriyah',
                'nim' => '242520120',
                'ipk' => 2.80
            ],
            [
                'nama' => 'Etyk Nurvitasari',
                'nim' => '242520132',
                'ipk' => 1.90
            ],
        ];

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_if(!$data, 404);

        return view('mahasiswa.detail', compact('data'));
    }
}