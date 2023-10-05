@extends('pegawai.layouts.master')
@section('content')   
<div class="container-fluid">
        
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ '/userp/'.$data->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                            <a href="/userp" class="btn btn-secondary">Kembali<<<<</a>
                            </div>
                            <div class="form-group row">
                                <h3>Edit Data</h3>
                            </div>
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
                                    <input type="text" class="form-control" id="nama_perushaan" name="nama_perusahaan" value="{{ $data->nama_perusahaan }}"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >NPWP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="npwp" name="npwp"  value="{{ $data->npwp }}"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Alamat Perusahaan<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="{{ $data->alamat_perusahaan }}"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nomer Telepon <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="no_tlpn" name="no_tlpn" value="{{ $data->no_tlpn }}"   >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email Login <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->user->email }}"  disabled >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection