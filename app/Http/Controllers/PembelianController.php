<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Storage;


class PembelianController extends Controller
{
    public function hapusPembelian($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect('/pembelianAdmin');
    }

    public function beli(Request $request, $id)
    {

        $barang           = Barang::find($id);
        return view('beliLangsung', [
            'id' => $barang->id,
            'nama' => $barang->nama_barang,
            'harga' => $barang->harga,
            'stock_barang' => $barang->stock_barang,
            'terjual' => $barang->terjual,
            'rating' => $barang->rating,
            'foto' => $barang->foto_barang
        ]);
    }

    public function tambah(Request $request)
    {
        // echo $request->nama_barang . '<br>';
        // echo $request->total_bayar . '<br>';
        // echo $request->status_bayar . "<br>";
        // echo $request->status_pengiriman . "<br>";
        // echo $request->tanggal_pembelian . '<br>';
        // echo $request->alamat_pengiriman . '<br>';
        // echo $request->tipe_bayaran . '<br>';
        // echo $request->nama_pembeli . '<br>';
        // echo $request->nomor_hp_pembelian . '<br>';
        // return 'ok';
        // echo $request->namaBarang;
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'total_bayar' => 'required',
            'status_bayar' => 'required',
            'status_pengiriman' => 'required',
            'tanggal_pembelian' => 'required',
            'alamat_pengiriman' => 'required',
            'tipe_bayaran' => 'required',
            'nama_pembeli' => 'required',
            'nomor_hp_pembelian' => 'required',
            'bukti_pembayaran' => ''
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $path = $request->file('bukti_pembayaran')->store('upload_bukti_pembayaran');
        } else {
            $path = '';
        }

        $validateData['bukti_pembayaran'] = $path;

        Pembelian::create($validateData);
        return redirect('/bayar');
    }

    public function tambahPembelian(Request $request)
    {
        // return ('coba');
        $validateData = $request->validate([
            'nama_barang' => '',
            'total_bayar' => '',
            'status_bayar' => '',
            'status_pengiriman' => '',
            'tanggal_pembelian' => '',
            'alamat_pengiriman' => '',
            'tipe_bayaran' => '',
            'nama_pembeli' => '',
            'nomor_hp_pembelian' => '',
            'bukti_pembayaran' => ''
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $path = $request->file('bukti_pembayaran')->store('upload_bukti_pembayaran');
        } else {
            $path = '';
        }

        $validateData['bukti_pembayaran'] = $path;

        Pembelian::create($validateData);
        Keranjang::where('nama_pembeli', $request->nama_pembeli)->delete();
        return redirect('/bayar');
    }

    public function tambahKeranjang(Request $request)
    {
        // return 'ok';
        // echo $request->nama_barang . '<br>';
        // echo $request->total_bayar . '<br>';
        // echo $request->status_bayar . "<br>";
        // echo $request->status_pengiriman . "<br>";
        // echo $request->tanggal_pembelian . '<br>';
        // echo $request->alamat_pengiriman . '<br>';
        // echo $request->tipe_bayaran . '<br>';
        // echo $request->nama_pembeli . '<br>';
        // echo $request->nomor_hp_pembelian . '<br>';
        // return 'ok';
        // echo $request->namaBarang;
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'nama_pembeli' => 'required'
        ]);
        // return $request->nama_barang;
        // return Keranjang::where('nama_barang', "mmmmm")->nama_barang;
        // return  $keranjang->nama_barang;

        Keranjang::create($validateData);
        return redirect('/userLogin');
    }
    public function ubahStatus(Request $request, $id)
    {


        $pembelian           = Pembelian::find($id);
        // return $pembelian->nama_barang;

        // 'nama_barang',
        // 'total_bayar',
        // 'status_bayar',
        // 'status_pengiriman',
        // 'tanggal_pembelian',
        // 'alamat_pengiriman',
        // 'tipe_bayaran',
        // 'nama_pembeli',
        // 'nomor_hp_pembelian'

        $pembelian->nama_barang    = $pembelian->nama_barang;
        $pembelian->total_bayar    = $pembelian->total_bayar;
        if ($pembelian->status_bayar == "belum_lunas") {
            $pembelian->status_bayar    = "lunas";
        } else {
            $pembelian->status_bayar    = "belum_lunas";
        }
        $pembelian->status_pengiriman    = $pembelian->status_pengiriman;
        $pembelian->tanggal_pembelian    = $pembelian->tanggal_pembelian;
        $pembelian->alamat_pengiriman    = $pembelian->alamat_pengiriman;
        $pembelian->tipe_bayaran    = $pembelian->tipe_bayaran;
        $pembelian->nama_pembeli    = $pembelian->nama_pembeli;
        $pembelian->nomor_hp_pembelian    = $pembelian->nomor_hp_pembelian;

        $pembelian->save();
        return redirect('/pembelianAdmin');
    }
}
