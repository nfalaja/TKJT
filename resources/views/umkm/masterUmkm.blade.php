@extends('layout.app')
@section('title', 'UMKM')
@section('content-title', 'Dashboard UMKM')
@section('head-content')
    <a href="" class="btn btn-success mb-2">Input UMKM</a>
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel UMKM</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Nama Pemilik</th>
                            <th>Alamat Perusahaan</th>
                            <th>Omset Perbulan</th>
                            <th>Berdiri Sejak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mulia Jaya</td>
                            <td>Jaya</td>
                            <td>Jl. Jaya Agung no. 17</td>
                            <td>1.500.000</td>
                            <td>1927</td>
                            <td>
                                <a href="" class="btn btn-sm btn-circle btn-warning"><i class="fas fa-info"></i></a>
                                <a href="" class="btn btn-sm btn-circle btn-info"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-circle btn-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @foreach ($umkms as $umkm)
                            <tr>
                                {{-- <td>{{}}</td>
                            <td>{{}}</td>
                            <td>{{}}</td>
                            <td>{{}}</td>
                            <td>{{}}</td> --}}
                                <td>
                                    <a href=""></a>
                                    <a href=""></a>
                                    <a href=""></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Nama Pemilik</th>
                            <th>Alamat Perusahaan</th>
                            <th>Omset Perbulan</th>
                            <th>Berdiri Sejak</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
