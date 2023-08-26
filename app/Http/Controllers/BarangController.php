<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Barang;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Storage;


class BarangController extends Controller
{
    public function hapusBarang($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barangAdmin');
    }
    public function hapusKeranjang($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->delete();

        return redirect('/keranjangAdmin');
    }
    public function hapusKeranjangUser($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->delete();

        return redirect('/keranjang');
    }

    public function updateBarang(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stock_barang' => 'required',
            'terjual' => '',
            'rating' => '',
            'foto_barang' => 'mimes:jpg,png,jpeg|image|max:2048'
        ]);

        $barang           = Barang::find($id);


        if ($request->hasFile('foto_barang')) { //Jika ada gambar yang diupload

            if ($request->gambarLama) { //Hapus gambar lama
                Storage::delete($request->gambarLama);
            }
            $path = $request->file('foto_barang')->store('upload_foto_barang');
        } else { //jika tidak ada gambar yang diupload
            $path = $barang->foto_barang;
        }


        $barang->nama_barang    = $validateData['nama_barang'];
        $barang->harga  = $validateData['harga'];
        $barang->stock_barang  = $validateData['stock_barang'];
        $barang->terjual  = $validateData['terjual'];
        $barang->rating  = $validateData['rating'];
        $barang->foto_barang  = $path;
        // return $path;

        $barang->save();
        return redirect('/barangAdmin');
    }
    public function updateKeranjang(Request $request, $id)
    {
        // return 'ok';
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'nama_pembeli' => 'required'
        ]);

        $keranjang           = Keranjang::find($id);
        $keranjang->nama_barang = $validateData['nama_barang'];
        $keranjang->nama_pembeli  = $validateData['nama_pembeli'];

        $keranjang->save();
        return redirect('/keranjangAdmin');
    }

    public function tambahBarang(Request $request)
    {
        // return ('ok');
        // echo $request->namaBarang;
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stock_barang' => 'required',
            'terjual' => '',
            'rating' => '',
            'foto_barang' => 'mimes:jpg,png,jpeg|image|max:2048'
        ]);
        // return 'ok';

        if ($request->hasFile('foto_barang')) {
            $path = $request->file('foto_barang')->store('upload_foto_barang');
        } else {
            $path = '';
        }

        $validateData['foto_barang'] = $path;

        Barang::create($validateData);
        return redirect('/barangAdmin');
    }
}
