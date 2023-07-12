@extends('layout.app')
@section('title', 'Input Desa')
@section('content-title', 'Silahkan Lengkapi Informasi Berikut')
@section('content')
@section('content')
    <form action="{{ route('desa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Desa</label>
                    <input type="nama_desa" id="nama_desa" name="nama_desa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for=""> Kecamatan</label>
                    <input type="nama_kecamatan" id="nama_kecamatan" name="nama_kecamatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_kabupaten">Kabupaten</label>
                    <input type="text" id="nama_kabupaten" name="nama_kabupaten" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success " value="submit">
                    <a href="{{route('desa.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </form>
@endsection
