@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Item') }}</div>

                <div class="card-body">

                <form action="{{ route('item.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Barcode</label>
                        <input type="text" name="barcode" value="{{$item->barcode}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok Produk</label>
                        <input type="text" name="stok_produk" value="{{$item->stok_produk}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Produk terjual</label>
                        <input type="text" name="terjual_produk" value="{{$item->terjual_produk}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="nm_produk" value="{{$item->nm_produk}}" class="form-control">
                    </div>
                    <select class="form-select" name="aktif_produk">
                        <option value="">Aktif Produk</option>
                        <option value="Y" @if($item->aktif_produk == "Y") selected @endif >Aktif</option>
                        <option value="N" @if($item->aktif_produk == "N") selected @endif>Non Aktif</option>
                    </select> <br>
                    <div class="mb-3">
                    <label class="form-label">Isi Produk</label>   
                    <textarea class="form-control" name="isi_produk">{{$item->isi_produk}}</textarea> <br>
                    </div>
                    @if ($item->foto_produk)
                        <div class="mb-3">
                            <img style="max-width:100px; max-height:100px" src="{{url('item_foto').'/'.$item->foto_produk}}" />
                        </div>
                    @endif
                    <div class="mb-3">
                    <label for="formFileSm" class="form-label">Foto Produk</label>
                    <input class="form-control form-control-sm" name="foto_produk" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" name="harga_produk" value="{{$item->harga_produk}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon</label>
                        <input type="text" name="diskon_produk" value="{{$item->diskon_produk}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berat Produk</label>
                        <input type="text" name="berat_produk" value="{{$item->berat_produk}}" class="form-control">
                    </div>
                    <input class="btn btn-info" type="submit" value="Save" name="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection