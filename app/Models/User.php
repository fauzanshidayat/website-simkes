<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'photo',
        'username',
        'password',
        'role', // tambahkan role agar bisa diisi mass-assignment
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi: User punya banyak berita_artikel
    public function beritaArtikel()
    {
        return $this->hasMany(BeritaArtikel::class, 'penulis_id');
    }

    // Relasi: User punya banyak pengumuman
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'penulis_id');
    }

    // Helper role
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isPengurus()
    {
        return $this->role === 'pengurus';
    }
}
