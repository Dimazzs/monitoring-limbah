{{-- @extends('pengguna.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Fasilitas</div>

                <div class="card-body">
                    <form action="{{ route('fasilitas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="bangunan">Bangunan:</label>
                            <input type="text" name="bangunan" id="bangunan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tangki">Tangki:</label>
                            <input type="text" name="tangki" id="tangki" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="penumpukan_limbah">Penumpukan Limbah:</label>
                            <input type="text" name="penumpukan_limbah" id="penumpukan_limbah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jenis_limbah">Jenis Limbah:</label>
                            <input type="text" name="jenis_limbah" id="jenis_limbah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="simbol_bangunan">Simbol Bangunan:</label>
                            <input type="text" name="simbol_bangunan" id="simbol_bangunan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="simbol_kemasan">Simbol Kemasan:</label>
                            <input type="text" name="simbol_kemasan" id="simbol_kemasan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dinding">Dinding:</label>
                            <input type="text" name="dinding" id="dinding" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sop">SOP:</label>
                            <input type="text" name="sop" id="sop" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="bak">Bak:</label>
                            <input type="text" name="bak" id="bak" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ventilasi">Ventilasi:</label>
                            <input type="text" name="ventilasi" id="ventilasi" class="form-control">
                        </div>
                        <!-- Tambahkan input fields lain sesuai kebutuhan -->
                        <button type="submit" class="btn btn-primary">Tambah Data Fasilitas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('pengguna.layouts.master')
@section('content')  

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form class="form-valide" 
                              @if(isset($fasilitas))
                                action="{{ route('fasilitas.update', $fasilitas->id) }}"
                              @else
                                action="{{ route('fasilitas.store') }}"
                              @endif
                              method="POST">
                            @csrf
                            @if(isset($fasilitas))
                              @method('PUT')
                            @endif
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bangunan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bangunan" id="bangunan" 
                                           value="{{ isset($fasilitas) ? $fasilitas->bangunan : old('bangunan') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Tangki atau kontainer<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="tangki" id="tangki" 
                                           value="{{ isset($fasilitas) ? $fasilitas->tangki : old('tangki') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Penumpukan Limbah <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="penumpukan_limbah" id="penumpukan_limbah" 
                                           value="{{ isset($fasilitas) ? $fasilitas->penumpukan_limbah : old('penumpukan_limbah') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Jenis Limbah Yang dihasilkan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="jenis_limbah" id="jenis_limbah" 
                                           value="{{ isset($fasilitas) ? $fasilitas->jenis_limbah : old('jenis_limbah') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Pada Bangunan TPS <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_bangunan" id="simbol_bangunan" 
                                           value="{{ isset($fasilitas) ? $fasilitas->simbol_bangunan : old('simbol_bangunan') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Dan Label Limbah B3 Pada Kemasan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_kemasan" id="simbol_kemasan" 
                                           value="{{ isset($fasilitas) ? $fasilitas->simbol_kemasan : old('simbol_kemasan') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Dinding TPS Limbah B3 Terbuat Dari <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="dinding" id="dinding" 
                                           value="{{ isset($fasilitas) ? $fasilitas->dinding : old('dinding') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">SOP Penyimpanan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="sop" id="sop" 
                                           value="{{ isset($fasilitas) ? $fasilitas->sop : old('sop') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bak Penampung<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bak" id="bak" 
                                           value="{{ isset($fasilitas) ? $fasilitas->bak : old('bak') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Ventilasi Udara<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="ventilasi" id="ventilasi" 
                                           value="{{ isset($fasilitas) ? $fasilitas->ventilasi : old('ventilasi') }}">
                                </div>
                            </div>
                            <!-- Tambahkan input fields lainnya sesuai dengan struktur tabel fasilitas -->
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">{{ isset($fasilitas) ? 'Update' : 'Simpan' }} Data</button>
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


