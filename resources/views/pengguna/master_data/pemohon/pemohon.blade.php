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
                            <form class="form-valide" action="{{ url('pemohon') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Nama Pemohon <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  name="name" id="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jabatan <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"  name="jabatan" id="jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Alamat Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control"   id="alamat" name="alamat" >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >No Hp<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Kegiatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="kegiatan" id="kegiatan"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jenis Limbah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select type="text" class="form-control" name="jenis_limbah" id="jenis_limbah" >
                                            <option>Pilih Jenis Limbah...</option>
                                            <option>Oli Bekas</option>
                                            <option>Minyak Bekas</option>
                                            <option>Scrap Bubut</option>
                                            <option>Kaleng Bekas</option>
                                            <option>Kawat Las Besi</option>
                                            <option>Sarung Tangan Bekas</option>
                                            <option>Derigen Bekas</option>
                                            <option>Flux</option>
                                            <option>Neon Bekas</option>
                                            <option>Batu Gerinda Bekas</option>
                                            <option>Majun Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" >Jumlah Limbah B3<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"  class="form-control" name="jumlah_limbah" id="jumlah_limbah"  >
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