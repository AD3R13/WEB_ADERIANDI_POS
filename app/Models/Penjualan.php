<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'kode_transaksi', 'tanggal_transaksi', 'nominal_bayar', 'kembalian'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_user',  'id');
    }
}
