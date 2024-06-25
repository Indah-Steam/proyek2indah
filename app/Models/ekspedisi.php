<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekspedisi extends Model
{
    use HasFactory;

    protected $table = 'ekspedisis'; // Nama tabel di database
    protected $fillable = [
        'id',
        'nama',
    ]; // Kolom yang bisa diisi


}
