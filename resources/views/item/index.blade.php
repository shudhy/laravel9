@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Item') }}</div>

                <div class="card-body">
                   <a href="{{ url('/item/create'); }}" class="btn btn-primary">Create Item</a>
        <table class="table table-hover" >
        <th>
            <td>id</td>
            <td>barcode</td>
            <td>produk terjual</td>
            <td>nama produk</td>
            <td>aktif</td>
            <td>isi</td>
            <td>foto</td>
            <td>harga</td>
            <td>diskon</td>
            <td>berat</td>
            <td>aksi</td>
        </th>
        @foreach($item as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->barcode}}</td>
            <td>{{$i->stok_produk}}</td>
            <td>{{$i->terjual_produk}}</td>
            <td>{{$i->nm_produk}}</td>
            <td>{{$i->aktif_produk}}</td>
            <td>{{$i->isi_produk}}</td>
            <td>
                @if ($i->foto_produk)
                    <img style="max-width:50px; max-height:50px" src="{{ url('item_foto').'/'.$i->foto_produk}}"/>
                @endif
            </td>
            <td>{{$i->harga_produk}}</td>
            <td>{{$i->diskon_produk}}</td>
            <td>{{$i->berat_produk}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="{{ route('item.edit',$i->id) }}">Edit</a>
            <form action="{{ route('item.destroy',$i->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="delete">
            </form>
                </div>
        </td>
        </tr>
        @endforeach
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

