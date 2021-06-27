<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadgambar extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_produk','nama_produk','harga_satuan'
    ];
    public $timestamps = false;
}