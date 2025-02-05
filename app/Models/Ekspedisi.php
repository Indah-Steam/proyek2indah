<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ekspedisi extends Model
{
    use HasFactory;
    protected $table='ekspedisi';
    protected $primaryKey='id';
    public const CREATED_AT="created_at";
    public const UPDATED_AT="updated_at";
    protected $guarded = ['id'];
    protected $fillable = [
        'namaEkspedisi',
        'harga'
    ];


    public static function getListEkspedisi(){
        $sql = "SELECT * FROM ekspedisi";
        $data = DB::connection()->select($sql);
        return $data;
    }
}
