<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updatePembayaran', $cariPembayaran->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="namaPembayaran" class="col-sm-5 col-form-label">Nama Pembayaran</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="namaPembayaran" name="namaPembayaran" value="{{ $cariPembayaran->namaPembayaran }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('pembayaran') }}" class="btn btn-link">Kembali</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
