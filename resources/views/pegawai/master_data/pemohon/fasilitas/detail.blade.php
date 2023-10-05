{{-- @extends('pengguna.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Fasilitas</div>

                <div class="card-body">
                    @if ($fasilitas)
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Bangunan:</div>
                            <div class="col-md-8">{{ $fasilitas->bangunan }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Tangki atau Kontainer:</div>
                            <div class="col-md-8">{{ $fasilitas->tangki }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Penumpukan Limbah:</div>
                            <div class="col-md-8">{{ $fasilitas->penumpukan_limbah }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Jenis Limbah Yang dihasilkan:</div>
                            <div class="col-md-8">{{ $fasilitas->jenis_limbah }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Simbol Pada Bangunan TPS:</div>
                            <div class="col-md-8">{{ $fasilitas->simbol_bangunan }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Simbol Dan Label Limbah B3 Pada Kemasan:</div>
                            <div class="col-md-8">{{ $fasilitas->simbol_kemasan }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Dinding TPS Limbah B3 Terbuat Dari:</div>
                            <div class="col-md-8">{{ $fasilitas->dinding }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">SOP Penyimpanan:</div>
                            <div class="col-md-8">{{ $fasilitas->sop }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Bak Penampung:</div>
                            <div class="col-md-8">{{ $fasilitas->bak }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 font-weight-bold">Ventilasi Udara:</div>
                            <div class="col-md-8">{{ $fasilitas->ventilasi }}</div>
                        </div>
                        <!-- Tambahkan informasi lain yang ingin ditampilkan -->
                    @else
                        <p>Data fasilitas tidak ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('pegawai.layouts.master')
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
                        <form action="{{ route('fasilitasi.update', $fasilitas->id) }}" method="post">
                            @csrf
                            @method('put')
                        <form class="form-valide">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bangunan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bangunan" id="bangunan" 
                                           value="{{ $fasilitas->bangunan }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Tangki atau kontainer<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="tangki" id="tangki" 
                                           value="{{ $fasilitas->tangki }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Penumpukan Limbah <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="penumpukan_limbah" id="penumpukan_limbah" 
                                           value="{{ $fasilitas->penumpukan_limbah }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Jenis Limbah Yang dihasilkan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="jenis_limbah" id="jenis_limbah" 
                                           value="{{ $fasilitas->jenis_limbah }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Pada Bangunan TPS <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_bangunan" id="simbol_bangunan" 
                                           value="{{ $fasilitas->simbol_bangunan }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Dan Label Limbah B3 Pada Kemasan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_kemasan" id="simbol_kemasan" 
                                           value="{{ $fasilitas->simbol_kemasan }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Dinding TPS Limbah B3 Terbuat Dari <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="dinding" id="dinding" 
                                           value="{{ $fasilitas->dinding }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">SOP Penyimpanan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="sop" id="sop" 
                                           value="{{ $fasilitas->sop }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bak Penampung<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bak" id="bak" 
                                           value="{{ $fasilitas->bak }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Ventilasi Udara<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="ventilasi" id="ventilasi" 
                                           value="{{ $fasilitas->ventilasi }}" >
                                </div>
                            </div>
                            <!-- Tambahkan input fields lainnya sesuai dengan struktur tabel fasilitas -->
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


