@extends('admin.layout.index')

@section('content')
<div class="card rounded-full">
    <div class="card-header bg-transparent d-flex justify-content-between">
        <button class="btn btn-info" id="addData" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="fa fa-plus">
                <span>Tambah Ekspedisi</span>
            </i>
        </button>
        <input type="text" wire:model="search" class="form-control w-25" placeholder="Search....">
    </div>
    <div class="card-body">
        <div class="container">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ekspedisi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($ekspedisis as $index => $ekspedisi) --}}
                        <tr>
                            <td>
                                {{-- {{ $index + 1 }} --}}
                            </td>
                            <td>
                                {{-- {{ $ekspedisi->nama }} --}}
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Ekspedisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ekspedisi.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="namaEkspedisi" class="col-sm-5 col-form-label">Nama Ekspedisi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="namaEkspedisi" name="nama" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
