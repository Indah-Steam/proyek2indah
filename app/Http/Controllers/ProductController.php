<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::paginate(3);
        return view('admin.page.product', [
            'name'      => "Product",
            'title'     => 'Admin Product',
            'data'      => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addModal()
    {
        return view('admin/modal/addModal', [
            'title' => 'Tambah Data Product',
            'sku'   => 'BRG' . rand(10000, 99999),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        $data = new product;
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->harga        = $request->harga;
        $data->quantity     = $request->quantity;
        $data->size         = $request->size; // Menambahkan size
        $data->discount     = 10 / 100;
        $data->is_active    = 1;
    
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        }
        $data->save();
        Alert::toast('Data berhasil disimpan', 'success');
        return redirect()->route('product');
    }
    
    public function show($id)
    {
        $data = product::findOrFail($id);

        return view(
            'admin.modal.editModal',
            [
                'title' => 'Edit data product',
                'data'  => $data,
            ]
        )->render();
    }

    public function showForm($id)
{
    // Ambil data produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Ambil ukuran yang tersedia dari kolom 'size' di tabel products
    // Misalnya, ukuran disimpan dalam format JSON atau string yang dipisahkan dengan koma
    $sizes = $product->size ? explode(',', $product->size) : []; // Jika ukuran dipisahkan koma

    // Jika ukuran disimpan dalam JSON, gunakan json_decode
    // $sizes = $product->size ? json_decode($product->size, true) : [];

    // Return ke view dengan data yang dibutuhkan
    return view(
        'admin.modal.editModal',
        [
            'title' => 'Edit Data Product',
            'product' => $product,
            'sizes' => $sizes,
        ]
    )->render();
}

    
    

    public function update(UpdateproductRequest $request, $id)
    {
        $data = product::findOrFail($id);

        if ($request->file('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        } else {
            $filename = $request->foto;
        }

        $field = [
            'sku'                   => $request->sku,
            'nama_product'          => $request->nama,
            'harga'                 => $request->harga,
            'size'                  => $request->size,
            'quantity'              => $request->quantity,
            'discount'              => 10 / 100,
            'is_active'             => 1,
            'foto'                  => $filename,
        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('product');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        $json = [
            'success' => "Data berhasil dihapus"
        ];

        echo json_encode($json);
    }
}
