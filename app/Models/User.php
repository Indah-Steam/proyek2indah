<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Nama tabel di database.
     *
     * @var string
     */
    protected $table = 'users'; // Pastikan tabel ini sesuai dengan nama di database Anda.

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',         // Nama pengguna
        'email',        // Email pengguna
        'password',     // Password
        'alamat',       // Alamat pengguna
        'tglLahir',     // Tanggal lahir
        'is_active',    // Status aktif
        'role',         // Role pengguna
        'nik',          // NIK pengguna (tambahkan jika diperlukan)
    ];

    /**
     * Kolom yang harus disembunyikan saat serialisasi.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',         // Menyembunyikan password
        'remember_token',   // Menyembunyikan token "remember me"
    ];

    /**
     * Casting untuk tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Cast email_verified_at ke datetime
        'password' => 'hashed',           // Hashing otomatis untuk password
        'is_active' => 'boolean',         // Cast is_active ke boolean
        'tglLahir' => 'date',             // Cast tglLahir ke date
    ];
}
