<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ekspedisi;

class EkspedisiController extends Controller
{
    public function index()

        {
            $ekspedisis = Ekspedisi::all();
            return view('admin.page.ekspedisi', compact('ekspedisis'));
        }
        protected $table = 'ekspedisis'; // Nama tabel di database
        protected $fillable = ['nama']; // Kolom yang bisa diisi
}
