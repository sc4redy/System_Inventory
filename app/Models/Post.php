<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ✅ Tambahkan ini:
    protected $fillable = [
        'judul',
        'isi',
        'user_id',
    ];

    // Opsional: relasi ke user (kalau mau nanti tampil nama pembuatnya)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
