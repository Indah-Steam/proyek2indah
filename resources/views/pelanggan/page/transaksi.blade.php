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
                        <select name="size" id="size_{{ $x->product->id }}" class="form-control size-select" required>
                            <option value="">-- Pilih Ukuran --</option>
                            @foreach ($sizes as $size => $price)
                            <option value="{{ $size }}" data-addprice="{{ $price }}">{{ $size }}</option>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.size-select').forEach(select => {
            select.addEventListener('change', updateTotal);
        });

        document.querySelectorAll('.qty').forEach(input => {
            input.addEventListener('input', updateTotal);
        });

        function updateTotal() {
            document.querySelectorAll('.card').forEach(card => {
                let productId = card.querySelector('.size-select').id.split('_')[1];
                let hargaDasar = parseFloat(document.getElementById(`harga_${productId}`).value);
                let selectedSize = card.querySelector('.size-select').value;
                let addPrice = parseFloat(card.querySelector(`option[value="${selectedSize}"]`).dataset.addprice) || 0;
                let quantity = parseInt(card.querySelector('.qty').value) || 1;

                let total = (hargaDasar + addPrice) * quantity;
                card.querySelector(`#total_${productId}`).value = total;

                // Simpan total harga di Local Storage
                localStorage.setItem(`total_`, total);
                localStorage.setItem(`qty`, quantity);
            });
        }

        document.querySelectorAll('.plus').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                let qtyInput = this.nextElementSibling;
                qtyInput.value = parseInt(qtyInput.value) + 1;
                updateTotal();
            });
        });

        document.querySelectorAll('.minus').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                let qtyInput = this.previousElementSibling;
                if (parseInt(qtyInput.value) > 1) {
                    qtyInput.value = parseInt(qtyInput.value) - 1;
                    updateTotal();
                }
            });
        });

        // Ambil total harga dari Local Storage saat halaman dimuat
        document.querySelectorAll('.card').forEach(card => {
            let productId = card.querySelector('.size-select').id.split('_')[1];
            let savedTotal = localStorage.getItem(`total_${productId}`);
            if (savedTotal) {
                card.querySelector(`#total_${productId}`).value = savedTotal;
            }
        });
    });
</script>

@endsection