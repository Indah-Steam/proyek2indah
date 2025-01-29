@extends('pelanggan.layout.index')

@section('content')
    <form action="{{ route('checkout.bayar') }}" method="post">
        @csrf
        <div class="row mt-3">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body ekspedisi">
                        <h3>Masukkan Alamat Penerima</h3>
                        <div class="row mb-3">
                            <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_penerima" name="namaPenerima"
                                    value="{{ $users->name ?? '' }}" placeholder="Masukkan Nama Penerima" autofocus required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat_penerima" name="alamatPenerima"
                                    value="{{ $users->alamat ?? '' }}" placeholder="Masukkan Alamat Penerima" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_tlp" class="col-form-label col-sm-3">No. Telp Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_tlp" name="no_tlp"
                                    value="{{ $users->no_tlp ?? '' }}" placeholder="Masukkan No. Telp Penerima" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                            <div class="col-sm-9">
                                <select name="ekspedisi" class="form-control" id="ekspedisi">
                                    <option value="">-- Pilih Ekspedisi --</option>
                                    @foreach($namaEkspedisi as $ekspedisi)
                                        <option value="{{ strtolower(str_replace(' ', '', $ekspedisi)) }}">{{ $ekspedisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pembayaran" class="col-form-label col-sm-3">Metode Pembayaran</label>
                            <div class="col-sm-9">
                                <select name="pembayaran" class="form-control" id="pembayaran">
                                    <option value="">-- Pilih Metode Pembayaran --</option>
                                    @foreach($namaPembayaran as $pembayaran)
                                        <option value="{{ strtolower(str_replace(' ', '', $pembayaran)) }}">{{ $pembayaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header text-center p-4">
                        <h3>Total Belanja</h3>
                    </div>
                    <div class="card-body pembayaran">
                        <h3 class="mb-3">{{ $codeTransaksi }}</h3>
                        <input type="hidden" name="code" value="{{ $codeTransaksi }}">
                        <div class="row mb-3">
                            <label for="totalBelanja" class="col-form-label col-sm-6">Total Belanja</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control totalBelanja" id="totalBelanja"
                                    name="totalBelanja" value="{{ $detailBelanja }}" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="dibayarkan" class="col-form-label col-sm-6">Total</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control dibayarkan" id="dibayarkan" name="dibayarkan"
                                    value="{{ $detailBelanja * $jumlahbarang + $ppn + $ongkir }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ppn" class="col-form-label col-sm-6">PPN</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control dibayarkan" id="ppn" name="ppn" 
                                value="{{ $ppn }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ongkir" class="col-form-label col-sm-6">Ongkir</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control dibayarkan" id="ongkir" name="ongkir" 
                                value="{{ $ongkir }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlahBarang" class="col-form-label col-sm-6">Jumlah Barang</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control dibayarkan" id="jumlahBarang"
                                    name="jumlahBarang" value="{{ $jumlahbarang }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <button type="submit" class="btn btn-success w-100">
                                <i class="fas fa-print"></i>
                                Belanja
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
