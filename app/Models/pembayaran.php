<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pembayaran extends Model
{
    use HasFactory;
    protected $table='pembayarans';
    protected $primaryKey='id';
    public const CREATED_AT="created_at";
    public const UPDATED_AT="updated_at";
    protected $guarded = ['id'];


    public static function getListPembayaran(){
        $sql = "SELECT * FROM pembayaran";
        $data = DB::connection()->select($sql);
        return $data;
    }
}
