<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_penjualan', 'id_barang', 'jumlah', 'qty', 'harga', 'total_harga'];
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
    public function penjualan()
    {
        return $this->hasMany(penjualan::class, 'id_penjualan', 'id');
    }
}
