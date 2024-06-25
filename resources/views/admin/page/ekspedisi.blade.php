@extends('admin.layout.index')

@section('content')
<div class="card rounded-full">
    <div class="card-header bg-transparent d-flex justify-content-between">
        <button class="btn btn-info" id="addData">
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
                {{-- <tbody>
                    @foreach($ekspedisis as $index => $ekspedisi)
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                            <td>{{ $ekspedisi->nama }}</td> <!-- Nama Ekspedisi -->
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
        <div class="pagination d-flex flex-row justify-content-between">
            <div class="showData">
                {{-- Data ditampilkan {{ $data->count() }} dari {{ $data->total() }} --}}
            </div>
            <div>
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
    </div>
</div>
<div class="tampilData" style="display: none;"></div>
<div class="tampilEditData" style="display: none;"></div>

@endsection
