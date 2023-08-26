<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function hapusUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/userAdmin');
    }

    public function updateUser(Request $request, $id)
    {
        echo $request->nama . "<br>";
        echo $request->username . "<br>";
        echo $request->alamat . "<br>";
        echo $request->password . "<br>";
        // return;
        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'password' => ''
        ]);
        // return 'ok';
        $user           = User::find($id);
        $user->nama    = $validateData['nama'];
        $user->username  = $validateData['username'];
        if ($validateData['password'] == null) {
            $user->password  = $user->password;
        } else {
            $user->password  = bcrypt($request->password);;
        }
        $user->alamat  = $validateData['alamat'];
        $user->save();
        // return 'ok';
        return redirect('/userAdmin');
    }

    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis_siswa' => 'required',
            'password_siswa' => 'required',
            'sampul_raport' => 'mimes:jpg,png,jpeg|image|max:2048',
            'tanggal_lahir_siswa' => 'required',
            'catatan' => ''
        ]);

        if ($request->hasFile('sampul_raport')) { //Jika ada gambar yang diupload
            $path = $request->file('sampul_raport')->store('upload_sampul_raport');
        } else { //jika tidak ada gambar yang diupload
            $path = '';
        }
        $validateData['password_siswa'] = $validateData['password_siswa'];
        $validateData['sampul_raport'] = $path;

        Siswa::create($validateData);

        // $guru->save();
        return redirect('/siswa');
    }
}
