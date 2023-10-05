<!-- resources/views/create.blade.php -->

@extends('pengguna.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kelengkapan</div>

                <div class="card-body">
                    @if (session('message'))
                            <p class="alert alert-success"> {{ session('message') }}</p>
                        @endif
                    <form action="{{ route('data-kelengkapan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="surat">Surat Permohonan: (PDF)</label>
                            <input type="file" name="surat" id="surat" accept=".pdf" class="form-control @error('surat') is-invalid @enderror">
                            @error('surat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="akta">Akta Pendiri Perusahaan: (PDF)</label>
                            <input type="file" name="akta" id="akta" accept=".pdf" class="form-control @error('akta') is-invalid @enderror">
                            @error('akta')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="npwp">NPWP: (JPG/PNG)</label>
                            <input type="file" name="npwp" id="npwp" accept=".jpg, .jpeg, .png" class="form-control @error('npwp') is-invalid @enderror">
                            @error('npwp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ktp">KTP Pemohon: (JPG/PNG)</label>
                            <input type="file" name="ktp" id="ktp" accept=".jpg, .jpeg, .png" class="form-control @error('ktp') is-invalid @enderror">
                            @error('ktp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="doc_penyimpanan">Dokumen yang menjelaskan tentang tempat penyimpanan limbah B3: (PDF)</label>
                            <input type="file" name="doc_penyimpanan" id="doc_penyimpanan" accept=".pdf" class="form-control @error('doc_penyimpanan') is-invalid @enderror">
                            @error('doc_penyimpanan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="doc_pengemasan">Dokumen yang menjelaskan tentang pengemasan limbah B3: (PDF)</label>
                            <input type="file" name="doc_pengemasan" id="doc_pengemasan" accept=".pdf" class="form-control @error('doc_pengemasan') is-invalid @enderror">
                            @error('doc_pengemasan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="doc_perizinan">Dokumen yang berisi perizinan: (PDF)</label>
                            <input type="file" name="doc_perizinan" id="doc_perizinan" accept=".pdf" class="form-control @error('doc_perizinan') is-invalid @enderror">
                            @error('doc_perizinan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Tambahkan atribut lain yang sesuai dengan struktur tabel DataKelengkapan -->

                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- resources/views/create.blade.php -->
<!-- resources/views/create.blade.php -->





