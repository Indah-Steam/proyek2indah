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
                        <th>Nama Ekspedisi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($dataEkspedisi as $ekspedisi)
                    <tr>
                        <td><?= $i ?></td>
                        <td>{!! $ekspedisi->namaEkspedisi !!}</td>
                        <td>
                            <a href="{{ route('editEkspedisi', $ekspedisi->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('deleteEkspedisi', $ekspedisi->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
