<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_peminjam', 'id_buku', 'tanggal_pinjam', 'tanggal_kembali', 'keterangan'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_anggota', 'id');
    }
}
