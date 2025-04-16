<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'pengarang', 'tahun_terbit', 'perpustakaan_id'];

    public function perpustakaan()
    {
        return $this->belongsTo(Perpustakaan::class);
    }
}

