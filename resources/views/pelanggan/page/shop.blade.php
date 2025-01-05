@extends('pelanggan.layout.index')

@section('content')

<!-- Bagian Header -->
<div class="text-center card" style="margin-top: 200px;">
    <div class="card-header">
        <div class="card-body">
            <h1>Selamat datang di toko kami</h1>
            <p>Silahkan Membeli Produk kami</p>
        </div>
    </div>
</div>

<!-- Bagian Daftar Produk -->
<div class="mt-4">
    <h3>Daftar Produk</h3>
    <div class="row">
        @foreach ($data as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <p>Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-3">
        {{ $data->links() }} <!-- Pagination -->
    </div>
</div>

<!-- Bagian Riwayat Pencarian -->
<div class="mt-5">
    <h3>Riwayat Pencarian</h3>
    <div class="card">
        <div class="card-body">
            @php
                // Ambil riwayat pencarian dari database
                $searchHistories = \App\Models\SearchHistory::orderBy('created_at', 'desc')->take(10)->get();
            @endphp

            @if ($searchHistories->isEmpty())
                <p>Tidak ada riwayat pencarian.</p>
            @else
                <ul>
                    @foreach ($searchHistories as $history)
                        <li>
                            <strong>{{ $history->query }}</strong>
                            <span>({{ $history->created_at->format('d-m-Y H:i') }})</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>

@endsection
