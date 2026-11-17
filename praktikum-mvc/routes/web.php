
<?php
use App\Http\Controllers\ProdukController;

//jurusan 
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');

// Route Detail harus diletakkan paling bawah
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

//Mata Kuliah 
use App\Http\Controllers\MataKuliahController;

// Route Mata Kuliah
Route::get('/matakuliah', [MataKuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MataKuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/matakuliah/{id}', [MataKuliahController::class, 'show'])
    ->name('matakuliah.show');


//mahasiswa
use App\Http\Controllers\MahasiswaController;

Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])
    ->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])
    ->name('mahasiswa.detail');


// Route Produk
Route::resource('produk', ProdukController::class);

Route::get('/', function () {
    return view('welcome');
});

//Route sederhana

//Route sederhana
Route::get('/sapa', function () {
    return 'Selamat datang di Aplikasi Perpustakaan Kampus!';
});

Route::get('/tanggal', fn () => now()->translatedFormat('l, d F Y'));

Route::get('/info', fn () => [
    'aplikasi' => 'Perpustakaan Kampus',
    'versi' => '1.0',
    'framework' => 'Laravel 13',
]);

//Route dengan parameter

Route::get('/anggota/{nama}', function (string $nama) {
    return "Anggota perpustakaan: {$nama}";
});

Route::get('/rak/{genre?}', function (?string $genre = 'umum') {
    return "Menampilkan rak buku genre: {$genre}";
});

Route::get('/buku/{kategori}/tahun/{tahun}', function (string $kategori, int $tahun) {
    return "Buku kategori {$kategori} terbitan tahun {$tahun}";
});

//Pembatasan parameter (constraint)
Route::get('/peminjaman/{id}', function (int $id) {
    return "Detail peminjaman nomor {$id}";
})->whereNumber('id');

Route::get('/penulis/{nama}', function (string $nama) {
    return "Penulis: {$nama}";
})->whereAlpha('nama');

Route::get('/isbn/{isbn}', function (string $isbn) {
    return "ISBN: {$isbn}";
})->where('isbn', '[0-9]{13}');

Route::get('/status/{status}', function (string $status) {
    return "Status peminjaman: {$status}";
})->whereIn('status', ['dipinjam', 'dikembalikan', 'terlambat']);

//Route langsung ke View dan Named Route
Route::view('/layanan', 'layanan')->name('layanan');

Route::get('/bantuan', function () {
    return view('bantuan', ['telepon' => '(024) 1234567']);
})->name('bantuan');

//Route Group dan Prefix
Route::prefix('petugas')->name('petugas.')->group(function () {

Route::get('/beranda', fn () => 'Beranda Petugas')
->name('beranda');

Route::get('/laporan', fn () => 'Laporan Peminjaman')
->name('laporan');

Route::get('/anggota/{id}', fn (int $id) => "Anggota petugas nomor {$id}")
->name('anggota');
});

//Redirect dan Fallback
Route::redirect('/home', '/');

Route::permanentRedirect('/katalog-lama', '/info');

Route::fallback(function () {
    return response('Maaf, halaman yang Anda cari tidak tersedia.', 404);
});