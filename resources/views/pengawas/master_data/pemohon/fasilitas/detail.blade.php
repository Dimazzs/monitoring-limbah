@extends('pengawas.layouts.master')
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
                        <form class="form-valide">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bangunan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bangunan" id="bangunan" 
                                           value="{{ $fasilitas->bangunan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Tangki atau kontainer<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="tangki" id="tangki" 
                                           value="{{ $fasilitas->tangki }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Penumpukan Limbah <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="penumpukan_limbah" id="penumpukan_limbah" 
                                           value="{{ $fasilitas->penumpukan_limbah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Jenis Limbah Yang dihasilkan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="jenis_limbah" id="jenis_limbah" 
                                           value="{{ $fasilitas->jenis_limbah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Pada Bangunan TPS <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_bangunan" id="simbol_bangunan" 
                                           value="{{ $fasilitas->simbol_bangunan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Simbol Dan Label Limbah B3 Pada Kemasan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="simbol_kemasan" id="simbol_kemasan" 
                                           value="{{ $fasilitas->simbol_kemasan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Dinding TPS Limbah B3 Terbuat Dari <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="dinding" id="dinding" 
                                           value="{{ $fasilitas->dinding }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">SOP Penyimpanan<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="sop" id="sop" 
                                           value="{{ $fasilitas->sop }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Bak Penampung<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="bak" id="bak" 
                                           value="{{ $fasilitas->bak }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Ventilasi Udara<span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="ventilasi" id="ventilasi" 
                                           value="{{ $fasilitas->ventilasi }}" disabled>
                                </div>
                            </div>
                            <!-- Tambahkan input fields lainnya sesuai dengan struktur tabel fasilitas -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection