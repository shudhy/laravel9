@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Data') }}</div>

                <div class="card-body">

                <form action="/warga/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nik</label>
                        <input type="text" name="nik" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No KK</label>
                        <input type="text" name="no_kk" class="form-control">
                    </div>
                    <select class="form-select" name="jenis_kelamin">
                        <option value="">pilih jenis kelamin</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select> <br>
                    <div class="mb-3">
                    <label class="form-label">Alamat</label>   
                    <textarea class="form-control" name="alamat"></textarea> <br>
                    </div>
                    <input class="btn btn-info" type="submit" value="Save" name="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection