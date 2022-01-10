<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuterbit extends Model
{
    use HasFactory;

    protected $table = "bukuterbit";
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'id_buku', 'judul_buku', 'penulis', 'jenis_buku', 'tahun_terbit', 'sinopsis', 'gambar'
    ];
}
