@extends('pengawas.layouts.master')
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
                            <form class="form-valide" action="{{ '/apemohon/'.$data->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Nama Perusahaan <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  value="{{ $data->profilePengguna->nama_perusahaan }}" disabled >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Nama Pemohon <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  value="{{ $data->name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jabatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"   id="jabatan" name="jabatan" value="{{$data->jabatan }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Alamat Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="alamat" id="alamat" value="{{ $data->alamat }}"   >
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jenis Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="kegiatan" id="kegiatan" value="{{ $data->kegiatan }}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Alamat Perusahaan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  value="{{ $data->profilePengguna->alamat_perusahaan }}" disabled  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jenis Limbah B3<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="jenis_limbah" value="{{ $data->jenis_limbah}}"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jumlah Limbah B3<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="jumlah_limbah" value="{{ $data->jumlah_limbah}}"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Tanggal Masuk<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="tgl" id="tgl" value="{{ $data->created_at }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >NO HP <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="no_hp" id="no_hp" value="{{ $data->no_hp }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >NO Telpon <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control"  value="{{ $data->profilePengguna->no_tlpn }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="status" name="status" >
                                            <option>Pilih Status</option>
                                            <option value="menunggu">Menunggu</option>
                                            <option value="diterima">Terima</option>
                                            <option value="ditolak">Tolak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                           
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