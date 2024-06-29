@extends('admin.layout.index')

@section('content')
    <div class="card rounded-full">
        <div class="card-header bg-transparent d-flex justify-content-between">
            <a href="{{ route('addPembayaran') }}" class="btn btn-info">
                <i class="fa fa-plus">
                    <span>Tambah</span>
                </i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembayaran</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($dataPembayaran as $pembayaran)
                    <tr>
                        <td><?= $i ?></td>
                        <td>{!! $pembayaran->namaPembayaran !!}</td>
                        <td>
                            <a href="{{ route('editPembayaran', $pembayaran->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('deletePembayaran', $pembayaran->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
