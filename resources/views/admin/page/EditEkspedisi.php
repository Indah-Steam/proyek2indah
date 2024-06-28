<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updateEkspedisi', $ekspedisi->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="namaEkspedisi" class="form-label">Nama Ekspedisi</label>
                    <input type="text" class="form-control" id="namaEkspedisi" name="namaEkspedisi" value="{{ $ekspedisi->namaEkspedisi }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImg() {
        const fotoIn = document.querySelector('#inputFoto');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
