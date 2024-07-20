<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
            </div>
            <form action="{{ route('savePembayaran') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-5 col-form-label">Nama Pembayaran</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="namaPembayaran" name="namaPembayaran">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{ route('pembayaran') }}">Kembali</a>
                    <button type="submit" class="btn btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
