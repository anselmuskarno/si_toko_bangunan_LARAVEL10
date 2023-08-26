<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pembelian extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_barang',
        'total_bayar',
        'status_bayar',
        'status_pengiriman',
        'tanggal_pembelian',
        'alamat_pengiriman',
        'tipe_bayaran',
        'nama_pembeli',
        'nomor_hp_pembelian',
        'bukti_pembayaran'
    ];
}
