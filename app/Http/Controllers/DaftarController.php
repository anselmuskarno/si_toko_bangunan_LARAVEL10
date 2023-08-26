<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    //Tambah Admin
    public function store(Request $request)
    {
        // return $request->all();


        //Validasi setiap inputan user

        //rules 
        //1. required = harus diisi
        //2. max = nilai maksimal berapa karakter
        //3. min = nilai minimum berapa karakter
        //4. unique:users = tidak boleh sama dengan yang ada di tabel users
        // return "oke";

        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'alamat' => 'required',
            'password' => 'required|min:5'
        ]);

        // return 'ok';

        // echo $validateData['password'];
        //Enkripsi password
        // return 'ok';
        $validateData['password'] = bcrypt($request->password);
        // return  $validateData['password'];

        // dd('Berhasil');

        //masukkan ke database
        User::create($validateData);
        // return "berhasil";
        //Pesan Berhasil
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');
        //arahkan ke route login
        return redirect('/');
    }

    //Tambah Admin
    public function store1(Request $request)
    {
        // return $request->all();


        //Validasi setiap inputan user

        //rules 
        //1. required = harus diisi
        //2. max = nilai maksimal berapa karakter
        //3. min = nilai minimum berapa karakter
        //4. unique:users = tidak boleh sama dengan yang ada di tabel users
        // return "oke";
        echo $request->nama . "<br>";
        echo $request->username . "<br>";
        echo $request->alamat . "<br>";
        echo $request->password . "<br>";
        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'alamat' => 'required',
            'password' => 'required|min:5'
        ]);



        // echo $validateData['password'];
        //Enkripsi password
        // return 'ok';
        $validateData['password'] = bcrypt($request->password);
        // return  $validateData['password'];

        // dd('Berhasil');

        //masukkan ke database
        User::create($validateData);
        // return 'ok';
        // return "berhasil";
        //Pesan Berhasil
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');
        //arahkan ke route login
        return redirect('/userAdmin');
    }

    //Tambah Siswa
    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => '',
            'file' => ''
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['jabatan'] = '1';
        $validateData['file'] = '';

        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/siswa');
    }

    //Tambah Guru
    public function tambahGuru(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => ''

        ]);

        $validateData['password'] = bcrypt($validateData['password']);


        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/guruAdmin');
    }
}
