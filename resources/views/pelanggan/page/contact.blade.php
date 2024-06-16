@extends('pelanggan.layout.index')

@section('content')
<div class="mb-5">
    <hr>
    <h1 class="mb-5">
        <i class="fa">Tentang Pembuat</i>
    </h1>
    <hr>
    <div class="row mt-4 align-items-center" style="background-color: white;padding: 1%; padding-top: 30px; padding-bottom: 15px; border-radius: 10px;"><hr>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/contact2.png') }}" style="width: 40%">
        </div>
        <div class="col-md-6">
            <div class="content-text">
                <h6>Galuh Sanjaya putra</h6>
                <span>Front end</span>
                <div class="d-flex mt-20 align-items-center gap-2 mt-3">
                    <i class="fa-brands fa-instagram"> @sanjayagaluhh_</i>
                </div>
            </div>
        </div>
    <hr class="mt-3"></div>
    <div class="row mt-4 align-items-center" style="background-color: white;padding: 1%; padding-top: 30px; padding-bottom: 15px; border-radius: 10px;"><hr>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/contact1.png') }}" style="width: 40%">
        </div>
        <div class="col-md-6">
            <div class="content-text">
                <h6>Ahmad Karta Nugraha</h6>
                <span>BackEnd</span>
                <div class="d-flex mt-20 align-items-center gap-2 mt-3">
                    <i class="fa-brands fa-instagram"> @ahmad.karta_</i>
                </div>
            </div>
        </div>
    <hr class="mt-3"></div>
</div>
<hr>

@endsection
