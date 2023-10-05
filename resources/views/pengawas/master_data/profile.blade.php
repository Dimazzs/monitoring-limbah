@extends('pengawas.layouts.master')
@section('content')   
<div class="container-fluid">
        
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        
                        <form class="form-valide" action="/profile/{{ $detailProfile->id }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nama <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $detailProfile->user->name }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $detailProfile->user->email }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >NIP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $detailProfile->nip }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Divisi <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text"  value="{{ $detailProfile->user->role }}" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Jenis Kelamin <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="jenis_kelamin" value="{{ $detailProfile->jenis_kelamin }}" name="jenis_kelamin" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Alamat <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="alamat" value="{{ $detailProfile->alamat }}" name="alamat" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Tanggal Lahir <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="tgl_lahir" value="{{ $detailProfile->tgl_lahir }}" name="tgl_lahir" placeholder="Mauskan tgl lahir..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" >Nomer HP <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="no_hp" value="{{ $detailProfile->no_hp }}" name="no_hp" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection