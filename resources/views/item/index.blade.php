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
            <td>BARCODE</td>
            <td>NAME</td>
            <td>DESC</td>
            <td>BRAND</td>
            <td>IMG</td>
            <td>HARGA</td>
            <td>AKSI</td>
        </th>
        @foreach($item as $i)
        <tr>
            <td></td>
            <td>{{$i->id}}</td>
            <td>{{$i->barcode}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->desc}}</td>
            <td>{{$i->brand_id}}</td>
            <td>{{$i->itemgrp_id}}</td>
            <td>{{$i->img_id}}</td>
            <td>{{$i->harga_id}}</td>
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

