@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                   <a href="{{ url('/warga/create'); }}" class="btn btn-primary">Create warga</a>
        <table class="table table-hover" >
        <th>
            <td>id</td>
            <td>NAMA</td>
            <td>NIK</td>
            <td>NO.KK</td>
            <td>JENIS KELAMIN</td>
            <td>ALAMAT</td>
            <td>AKSI</td>
        </th>
        @foreach($warga as $w)
        <tr>
            <td></td>
            <td>{{$w->id}}</td>
            <td>{{$w->nama}}</td>
            <td>{{$w->nik}}</td>
            <td>{{$w->no_kk}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            <td>{{$w->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="{{ route('warga.edit',$w->id) }}">Edit</a>
            <form action="{{ route('warga.destroy',$w->id) }}" method="POST">
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

