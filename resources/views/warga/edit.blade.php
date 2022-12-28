@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data') }}</div>

                <div class="card-body">
                    <form action="/warga/{{$warga->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" value="{{$warga->nama}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nik</label>
                        <input type="text" name="nik" value="{{$warga->nik}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No KK</label>
                        <input type="text" name="no_kk" value="{{$warga->no_kk}}" class="form-control">
                    </div>
                    <select class="form-select" name="jenis_kelamin">
                        <option value="">pilih jenis kelamin</option>
                        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif >Laki - Laki</option>
                        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                    </select> <br>
                    <div class="mb-3">
                    <label class="form-label">Alamat</label>   
                    <textarea class="form-control" name="alamat">{{$warga->alamat}}</textarea> <br>
                    </div>

                    <input class="btn btn-info" type="submit" value="Save" name="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection