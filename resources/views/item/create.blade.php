@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Data') }}</div>

                <div class="card-body">

                <form action="{{ url('/item/store'); }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Barcode</label>
                        <input type="text" name="barcode" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok Produk</label>
                        <input type="text" name="stok_produk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Produk terjual</label>
                        <input type="text" name="terjual_produk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="nm_produk" class="form-control">
                    </div>
                    <select class="form-select" name="aktif_produk">
                        <option value="">Aktif Produk</option>
                        <option value="Y">Aktif</option>
                        <option value="N">Non Aktif</option>
                    </select> <br>
                    <div class="mb-3">
                    <label class="form-label">Isi Produk</label>   
                    <textarea class="form-control" name="isi_produk"></textarea> <br>
                    </div>
                    <div class="mb-3">
                    <label for="formFileSm" class="form-label">Foto Produk</label>
                    <input class="form-control form-control-sm" name="foto_produk" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" name="harga_produk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon</label>
                        <input type="text" name="diskon_produk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berat Produk</label>
                        <input type="text" name="berat_produk" class="form-control">
                    </div>
                    <input class="btn btn-info" type="submit" value="Save" name="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection