@extends('pengguna.layouts.master')
@section('content')  

    <div class="container-fluid">
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      
                        <div class="form-validation">
                            @if (session('message'))
                            <p class="alert alert-success"> {{ session('message') }}</p>
                        @endif
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                            <form class="form-valide" action="{{ '/pemohonp/'.$data->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <a href="/user" class="btn btn-secondary">Kembali<<<<</a>
                                    </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Nama Pemohon <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  name="name" id="name" value="{{ $data->name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jabatan <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  name="jabatan" id="jabatan" value="{{ $data->jabatan }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Alamat Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"   id="alamat" name="alamat" value="{{ $data->alamat }}" disabled>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >No Hp<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $data->no_hp }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="kegiatan" id="kegiatan" value="{{ $data->kegiatan }}"  disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jenis Limbah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="jenis_limbah" id="jenis_limbah" value="{{ $data->jenis_limbah }}" disabled >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jumlah Limbah B3<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="jumlah_limbah" id="jumlah_limbah" value="{{ $data->jumlah_limbah }}" disabled >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="role">Divisi <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="status" name="status">
                                            <option>status..</option>
                                            <option value="menunggu">Menunggu</option>
                                            <option value="diterima">Terima</option>
                                            <option value="ditolak">Tolak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Save Data</button>
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