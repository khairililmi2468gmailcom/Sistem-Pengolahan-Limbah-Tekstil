<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'harga',
        'gambar',
    ];
}