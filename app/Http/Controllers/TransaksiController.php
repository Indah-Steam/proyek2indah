<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\product;
use App\Models\tblCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = product::paginate(15);
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        return view('pelanggan.page.home', [
            'title'     => 'Home',
            'data'      => $data,
            'count'     => $countKeranjang,
        ]);
    }


    public function addTocart(Request $request)
    {
        $idProduct = $request->input('idProduct');

        $db = new tblCart ;
        $product = product::find($idProduct);
        $field = [
            'idUser'    => 'guest123',
            'id_barang' => $idProduct,
            'qty'       => 1,
            'price'     => $product->harga,
        ];

        $db::create($field);
        return redirect('/');
    }
}
