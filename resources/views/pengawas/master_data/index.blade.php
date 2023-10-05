@extends('pengawas.layouts.master')
@section('content')    

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">Jumlah Anggota</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $jumlahAnggota }}</h2>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div> 
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">Jumlah user</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $jumlahUser }}</h2>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">Jumlah Akun Perusahaan</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $jumlahPerusahaan }}</h2>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-address-book"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">Jumlah Pemohon</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $jumlahPemohon  }}</h2>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div>




</div>

@endsection