<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id_anggota', 'no_transaksi'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_level', 'id');
    }
}
