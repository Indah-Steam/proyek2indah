@extends('admin.layout.index')

@section('content')
    <div class="card rounded-full">
        <div class="card-header bg-transparent d-flex justify-content-between">
            <a href="{{ route('addEkspedisi') }}" class="btn btn-info">
                <i class="fa fa-plus">
                    <span>Tambah</span>
                </i>
            </a>
            <input type="text" wire:model="search" class="form-control w-25" placeholder="Search....">
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama ekspedisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>{!! $dataEkspedisi->namaEkspedisi !!}</td>
                        <td>
                            <a href="{{ route('editEkspedisi', $dataEkspedisi->id) }}" class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete </button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection
