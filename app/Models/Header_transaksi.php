<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_transaksi extends Model
{
    use HasFactory;

    protected $table = "header_transaksi";
    protected $primaryKey = "id_header_transaksi";

    protected $fillable = [
        'tanggal_transaksi'
    ];

    static function tambah_header_transaksi(){
        Produk::create([
            "tanggal_transaksi" -> date("Y-m-d"),
        ]);
    }
}
