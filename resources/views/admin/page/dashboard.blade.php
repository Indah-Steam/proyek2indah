@extends('admin.layout.index')

@section('content')
    <div class="d-flex flex-wrap gap-3">
        <div class="card" style="width: 300px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded" style="font-size:22px; color:green; background-color:#A6FF96">
                        inventory
                    </span>
                    <h5 class="p-0 m-0" style="color:green">Total Product</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $totalProduct }}</span>
            </div>
        </div>
        <div class="card" style="width: 300px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:#D80032; background-color:#F78CA2">
                        view_in_ar
                    </span>
                    <h5 class="p-0 m-0" style="color:green">Total Stock</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $sumStock }}</span>
            </div>
        </div>
    </div>
@endsection
