@extends('layout.app')
@section('title', 'Desa')
@section('content-title', 'Dashboard Desa')
@section('head-content')

    <a href="{{ route('desa.create') }}" class="btn btn-success mb-2">Input Desa</a>
@endsection
@section('content')
    <!-- Earnings (Monthly) Card Example -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <img src="Template/img/village-farm.jpg" class="card-img-end width: 1000px" alt="...">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">Desa Keude Bakongan</div>
                            <div class="h6 mb-2 font-weight-bold text-gray-800">Jumlah UMKM: 12</div>
                            <a href="" class="btn btn-primary ">Menuju Ke Halaman </a>
                        </div>
                        {{-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div> --}}
                    </div>
                </div>
            </div>
        </div>

        @foreach ($desas as $desa)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 ">
                    <img src="{{asset('/Template/img/'.$desa->foto) }}" class="card-img-end height:auto" alt="...">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">{{$desa->nama_desa}}</div>
                                <div class="h6 mb-2 font-weight-bold text-gray-800">Jumlah UMKM: -</div>
                                <a href="" class="btn btn-primary ">Menuju Ke Halaman </a>
                            </div>
                            {{-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
