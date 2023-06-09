<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'nama_buku',
        'penerbit',
        'penulis',
        'tahun_terbit',
        'status',
        'gambar',
        
    ];

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }

}
