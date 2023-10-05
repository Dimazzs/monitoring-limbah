@extends('pegawai.layouts.master')
@section('content')   
<div class="container-fluid">
        
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        
                        <form class="form-valide" action="/user">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" > Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->user->name }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" > Nama Perusahaan <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->nama_perusahaan }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >NPWP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->npwp }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->email }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Alamat Perusahaan<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->alamat_perusahaan }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nomer Telepon <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control"  value="{{ $data->no_tlpn }}"  disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email Login <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control"  value="{{ $data->user->email }}"  disabled >
                                </div>
                            </div>
                            <a href="/user" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection