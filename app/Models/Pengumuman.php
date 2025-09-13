<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';

    protected $fillable = [
        'gambar',
        'judul',
        'slug',
        'tanggal',
        'penulis_id',
        'deskripsi',
    ];

    // Relasi: Pengumuman dimiliki User (penulis)
    public function penulis()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }

    // Generate slug otomatis
    protected static function booted()
    {
        static::creating(function ($post) {
            $slug = Str::slug($post->judul);

            // cek slug unik
            $count = static::where('slug', 'like', "{$slug}%")->count();
            $post->slug = $count ? "{$slug}-" . ($count + 1) : $slug;
        });
    }
}
