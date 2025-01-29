@extends('pelanggan.layout.index')

@section('content')
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<h3 class="mt-5 mb-5">Keranjang Belanja</h3>

@if ($data)
    @foreach ($data as $x)
    <div class="card mb-3">
        <div class="card-body d-flex gap-4">
            <img src="{{ asset('storage/product/' . $x->product->foto) }}" width="300" alt="">
            <form action="{{ route('checkout.product', ['id' => $x->id]) }}" method="POST">
                @csrf
                <div class="desc w-100">
                    <p style="font-size:24px; font-weight:700;">{{ $x->product->nama_product }}</p>
                    <input type="hidden" name="idBarang" value="{{ $x->product->id }}">
                    <input type="hidden" id="harga_{{ $x->product->id }}" value="{{ $x->product->harga }}">
                    <input type="number" class="form-control border-0 fs-1" name="harga" id="harga"
                        value="{{ $x->product->harga }}" readonly>
                    <div class="row mb-2">
                        <label for="size_{{ $x->product->id }}" class="col-sm-2 col-form-label fs-5">Size</label>
                        <div class="col-sm-5">
                        <select name="size" id="size_{{ $x->product->id }}" class="form-control" required>
                            <option value="">-- Pilih Ukuran --</option>
                            @foreach ($size as $sizes)
                                <option value="{{ $sizes }}">{{ $sizes }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    <button class="rounded-start bg-secondary p-2 border border-0 plus"
                                        id="plus">+</button>
                                    <input type="number" name="qty" class="form-control w-25 text-center qty"
                                        id="qty" name="qty" value="{{ $x->qty }}">
                                    <button class="rounded-end bg-secondary p-2 border border-0 minus" id="minus"
                                        disabled>-</button>
                                </div>
                            </div>
                    <div class="row">
                        <label for="total_{{ $x->product->id }}" class="col-sm-2 col-form-label fs-5">Total</label>
                        <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total"
                            readonly id="total_{{ $x->product->id }}" value="{{ $x->product->harga * $x->qty }}">
                    </div>
                    <div class="row w-50 gap-1">
                        <button type="submit" class="btn btn-success col-sm-5">
                            <i class="fa fa-shopping-cart"></i>
                            Checkout
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
@endif

@endsection

@section('scripts')
<script>
    // Update total based on quantity
    document.querySelectorAll('.qty').forEach(input => {
        input.addEventListener('input', function () {
            let qty = parseInt(this.value);
            let productId = this.id.split('_')[1];
            let price = parseInt(document.getElementById('harga_' + productId).value);
            let total = price * qty;
            document.getElementById('total_' + productId).value = total;
        });
    });

    // Increase quantity button functionality
    document.querySelectorAll('.plus').forEach(button => {
        button.addEventListener('click', function () {
            let productId = this.id.split('_')[1];
            let qtyInput = document.getElementById('qty_' + productId);
            qtyInput.value = parseInt(qtyInput.value) + 1;
            let price = parseInt(document.getElementById('harga_' + productId).value);
            let total = price * parseInt(qtyInput.value);
            document.getElementById('total_' + productId).value = total;
        });
    });

    // Decrease quantity button functionality
    document.querySelectorAll('.minus').forEach(button => {
        button.addEventListener('click', function () {
            let productId = this.id.split('_')[1];
            let qtyInput = document.getElementById('qty_' + productId);
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
                let price = parseInt(document.getElementById('harga_' + productId).value);
                let total = price * parseInt(qtyInput.value);
                document.getElementById('total_' + productId).value = total;
            }
        });
    });
</script>
@endsection
