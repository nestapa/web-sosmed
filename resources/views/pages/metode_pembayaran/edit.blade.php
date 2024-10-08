@extends('layouts.app')

@section('title', 'Edit Metode')
@section('desc', ' Dihalaman ini anda bisa edit metode. ')

@section('content')
<form action="{{ route('metode.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Metode</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama_metode" class="col-sm-3 col-form-label">Nama Metode</label>
                        <div class="col-sm-9">
                            <input value="{{ old('nama_metode', $item->nama_metode) }}" type="text"
                                class="form-control @error('nama_metode') is-invalid @enderror" name="nama_metode" id="nama_metode"
                                placeholder="Nama Metode">
                            @error('nama_metode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomer" class="col-sm-3 col-form-label">Nomer</label>
                        <div class="col-sm-9">
                            <input value="{{ old('nomer', $item->nomer) }}" type="text"
                                class="form-control @error('nomer') is-invalid @enderror" name="nomer" id="nomer"
                                placeholder="Nomer">
                            @error('nomer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection