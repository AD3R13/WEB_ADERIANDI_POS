<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_kategori', 'nama_barang', 'satuan', 'qty', 'harga'];
    public function kategori_barang()
    {
        return $this->belongsTo(kategori_barang::class, 'id_kategori', 'id');
    }
}
