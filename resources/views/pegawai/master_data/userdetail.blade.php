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
                                <label class="col-lg-4 col-form-label" > NIP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->nip }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nama <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->user->name }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->user->email }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Divisi <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $data->user->role }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Jenis Kelamin <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="jenis_kelamin" value="{{ $data->jenis_kelamin }}" name="jenis_kelamin" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Alamat <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="alamat" value="{{ $data->alamat }}" name="alamat" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Tanggal Lahir <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="tgl_lahir" value="{{ $data->tgl_lahir }}" name="tgl_lahir" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nomer HP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="no_hp" value="{{ $data->no_hp }}" name="no_hp" disabled >
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