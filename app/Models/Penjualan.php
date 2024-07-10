<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id_user', 'kode_transaksi', 'tanggal_transaksi'];
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang',  'id');
    }
}
