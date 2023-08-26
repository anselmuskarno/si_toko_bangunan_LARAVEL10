<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PembelianController;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\Keranjang;
use App\Models\Guru;
use App\Models\Pengumuman;
use App\Models\Galleri;
use App\Models\Siswa;
use App\Models\Pemasukan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pengumuman', function () {
    // return User::all();
    return view('pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

// Route::get('/', function () {
//     // return User::all();
//     return view('home');
// });

Route::get('/agenda', function () {
    // return User::all();
    return view('agenda', [
        'agenda' => Agenda::All()
    ]);
});

Route::get('/catatan', function () {
    // return User::all();
    return view('catatan', [
        'catatan' => Siswa::All()
    ]);
});

Route::get('/berita', function () {
    // return User::all();
    return view('berita', [
        'berita' => Berita::All()
    ]);
});

Route::get('/guruAdmin', function () {
    // return User::all();
    return view('admin/guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count(),
    ]);
});

Route::get('/galleriAdmin', function () {
    // return User::all();
    return view('admin/galleri');
});

Route::get('/agendaAdmin', function () {
    // return User::all();
    return view('admin/agenda', [
        'agenda' => Agenda::All(),
        'totalAgenda' => Agenda::count(),
    ]);
});

Route::get('/beritaAdmin', function () {
    // return User::all();
    return view('admin/berita', [
        'berita' => Berita::All(),
        'totalBerita' => Berita::count()
    ]);
});

Route::get('/pengumumanAdmin', function () {
    // return User::all();
    return view('admin/pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

Route::get('/siswa', function () {
    // return User::all();
    return view('admin/siswa', [
        'siswa' => Siswa::All(),
        'totalSiswa' => Siswa::count()
    ]);
});

Route::get('/galleri', function () {
    // return User::all();
    return view('galleri');
});
Route::get('/raport', function () {
    // return User::all();
    return view('raport');
});

Route::get('/guru', function () {
    // return User::all();
    return view('guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count()
    ]);
});

Route::get('/dashboard', function () {
    // return User::all();
    return view('welcome', [
        "nama" => "anselmus",
        "judul" => "dashboard"
    ]);
})->middleware('auth');


Route::get('/pengeluaran', function () {
    return view('pengeluaran', [
        "nama" => "anselmus",
        "judul" => "pengeluaran"
    ]);
})->middleware('auth');

Route::resource('/tambahPemasukan', PemasukanController::class);
Route::get('/pemasukan', function () {
    return view('pemasukan', [
        "nama" => "anselmus",
        "judul" => "pemasukan",
        'pemasukan' => Pemasukan::all()
    ]);
})->middleware('auth');

Route::get('/user', function () {
    return view('user', [
        "nama" => "anselmus",
        "judul" => "user",
        'user' => User::all()
    ]);
})->middleware('auth');

Route::get('/halamanAdmin', function () {
    return User::count();
    return view('admin/index', [
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
    ]);
})->middleware('auth');

//Method get dan mengarah pada /login maka arahkan ke controller Login dengan memanggil class index
// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/hapusPemasukan/{id}', [PemasukanController::class, 'destroy']);
Route::post('/editPemasukan/{id}', [PemasukanController::class, 'update']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/loginSiswa', [LoginController::class, 'loginSiswa']);
Route::post('/editBarang/{id}', [BarangController::class, 'updateBarang']);
Route::post('/editKeranjang/{id}', [BarangController::class, 'updateKeranjang']);
Route::post('/tambahBarang', [BarangController::class, 'tambahBarang']);
Route::get('/hapusGuru/{id}', [GuruController::class, 'hapusGuru']);
// Route::post('/loginAdmi', [LoginController::class, 'authenticate']);

//Method post dan mengarah pada /daftar maka arahkan ke controller daftar dengan memanggil class store
Route::post('/tambahUser', [DaftarController::class, 'store']);
Route::post('/tambahUser1', [DaftarController::class, 'store1']);
Route::post('/tambahSiswa', [SiswaController::class, 'tambahSiswa']);
Route::post('/editUser/{id}', [UserController::class, 'updateUser']);
Route::get('/hapusSiswa/{id}', [SiswaController::class, 'hapusSiswa']);
Route::get('/ubahStatus/{id}', [PembelianController::class, 'ubahStatus']);

Route::post('/tambahPengumuman', [PengumumanController::class, 'tambahPengumuman']);
Route::post('/editPengumuman/{id}', [PengumumanController::class, 'updatePengumuman']);
Route::get('/hapusPengumuman/{id}', [PengumumanController::class, 'hapusPengumuman']);

Route::post('/tambahBerita', [BeritaController::class, 'tambahBerita']);
Route::post('/editBerita/{id}', [BeritaController::class, 'updateBerita']);
Route::get('/hapusBarang/{id}', [BarangController::class, 'hapusBarang']);
Route::get('/hapusKeranjangUser/{id}', [BarangController::class, 'hapusKeranjangUser']);
Route::get('/hapusKeranjang/{id}', [BarangController::class, 'hapusKeranjang']);
Route::get('/hapusPembelian/{id}', [PembelianController::class, 'hapusPembelian']);

Route::post('/tambahAgenda', [AgendaController::class, 'tambahAgenda']);
Route::post('/editAgenda/{id}', [AgendaController::class, 'updateAgenda']);
Route::get('/hapusAgenda/{id}', [AgendaController::class, 'hapusAgenda']);
Route::get('/hapusUser/{id}', [UserController::class, 'hapusUser']);
Route::get('/beliLangsung/{id}', [PembelianController::class, 'beli']);
Route::post('/tambahPembelian', [PembelianController::class, 'tambah']);
Route::post('/tambahPembelianUser', [PembelianController::class, 'tambahPembelian']);
Route::post('/tambahKeranjang', [PembelianController::class, 'tambahKeranjang']);

//Method get dan mengarah pada /daftar maka arahkan ke view daftar
Route::get('/daftar', function () {
    return view('daftar', [
        'judul' => 'Registrasi'
    ]);
})->middleware('guest');

Route::get('/cetakGuru', function () {
    return view('cetakGuru', [
        'guru' => User::All()
    ]);
});
Route::get('/', function () {
    return view('home', [
        'barang' => Barang::All(),
        'nama' => "0"
    ]);
});
Route::get('/userLogin', function () {
    // return auth()->user()->nama;
    return view('homeLogin', [
        'barang' => Barang::All(),
        'total' => Keranjang::where('nama_pembeli', auth()->user()->nama)->count(),
        'nama' => "0"
    ]);
});
Route::get('/dashboardAdmin', function () {
    return view('admin/index', [
        'barang' => Barang::count(),
        'user' => User::count(),
        'pembelian' => Pembelian::count(),
        'keranjang' => Keranjang::count(),
    ]);
});
Route::get('/barangAdmin', function () {
    return view('admin/barang', [
        'barang' => Barang::All()
    ]);
});
Route::get('/userAdmin', function () {
    return view('admin/user', [
        'user' => User::All()
    ]);
});
Route::get('/pembelianAdmin', function () {
    return view('admin/pembelian', [
        'pembelian' => Pembelian::All()
    ]);
});
Route::get('/keranjangAdmin', function () {
    return view('admin/keranjang', [
        'keranjang' => Keranjang::All(),
        'user' => User::All(),
        'barang' => Barang::All()
    ]);
});
Route::get('/keranjang', function () {
    // $coba = Keranjang::where('nama_pembeli', auth()->user()->nama)->get();
    // return $coba;
    //     $keranjang = User::where([
    //         'column1' => value1,
    //         'column2' => value2,
    //         'column3' => value3
    //  ])->get();
    return view('keranjangLogin', [
        'total' => Keranjang::where('nama_pembeli', auth()->user()->nama)->count(),
        'keranjang' => Keranjang::where('nama_pembeli', auth()->user()->nama)->get(),
        'barang' => Barang::All()
    ]);
});

Route::get('/bayar', function () {
    return view('bayar', [
        'siswa' => User::All()
    ]);
});
