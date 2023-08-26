<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // mengarah pada file login yang ada di folder view
        return view('login', [
            'judul' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // return auth()->user()->id;
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // dd('Login Berhasil');

        if ($request->username == "admin" && $request->password == "admin123") {
            return redirect()->intended('/dashboardAdmin');
        }

        if (Auth::attempt($credentials)) {
            // return "Berhasil";
            $request->session()->regenerate();
            $request->session()->flash('berhasil', 'Login Berhasil !');
            auth()->user()->nama;
            return redirect()->intended('/userLogin');
        }
        $request->session()->flash('gagal', 'Username atau password salah !');
        return redirect()->intended('/');
    }

    public function loginSiswa(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $siswa = Siswa::where('nis_siswa', $request->username)->first();
        if ($siswa == null) {
            $request->session()->flash('gagal', 'NIS Atau Password Salah  !');
            return redirect('raport');
        }
        $nis = $siswa->nis_siswa;
        $password = $siswa->password_siswa;

        if ($request->password == $password && $request->username == $nis) {
            // return "Berhasil";
            $request->session()->regenerate();
            return view('cetakRaport', [
                'sampul' => $siswa->sampul_raport
            ]);
        } else {
            $request->session()->flash('gagal', 'NIS Atau Password Salah  !');
            return redirect('raport');
        }

        return view('cetakRaport', [
            'sampul' => $siswa->sampul_raport
        ]);
        return $siswa->nama_siswa;
        $nama = $siswa->file . ".pdf";
        return redirect('smartedu-master\images\raport' . $nama);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('keluar', 'Logout Berhasil !');
        return redirect('/');
    }

    public function hapusSiswa($id)
    {
        $pemasukan = User::find($id);
        $pemasukan->delete();

        return redirect('/siswa');
    }

    public function hapusGuru($id)
    {
        $pemasukan = User::find($id);
        $pemasukan->delete();

        return redirect('/guruAdmin');
    }

    public function updateSiswa(Request $request, $id)
    {
        $siswa           = User::find($id);
        $passwordLama = $siswa->password;
        $siswa->nama    = $request->nama;
        $siswa->username  = $request->username;
        if ($request->password != null) {
            $siswa->password  = $request->password;
        } else {
            $siswa->password =  $siswa->password;
        }
        $siswa->save();
        return redirect('/siswa');
    }
}
