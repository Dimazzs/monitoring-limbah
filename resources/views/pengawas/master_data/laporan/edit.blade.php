@extends('pengawas.layouts.master')
@section('content')  
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Data Laporan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="pemohon_id">Pemohon:</label>
                            <input type="text" class="form-control" name="pemohon_name" value="{{ $laporan->pemohon->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengawas">Nama Pengawas:</label>
                            <input type="text" class="form-control" name="name_pengawas" value="{{ $laporan->name_pengawas }}">
                        </div>
                        <div class="form-group">
                            <label for="pemohon_alamat">Alamat Perusahaan:</label>
                            <textarea class="form-control" name="alamat_perusahaan" disabled>{{ $laporan->pemohon->profilePengguna->alamat_perusahaan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pemohon_alamat">Kegiatan:</label>
                            <textarea class="form-control" name="alamat_perusahaan" >{{ $laporan->pemohon->kegiatan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pemohon_jabatan">Jabatan Pemohon:</label>
                            <input type="text" class="form-control" name="jabatan" value="{{ $laporan->pemohon->jabatan }}">
                        </div>
                        <div class="form-group">
                            <label for="pemohon_jabatan">Jumlah Limbah:</label>
                            <input type="text" class="form-control" name="jumlah_limbah" value="{{ $laporan->pemohon->jumlah_limbah }}">
                        </div>
                        <div class="form-group">
                            <label for="pemohon_alamat">Alamat Kegiatan:</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $laporan->pemohon->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="pemohon_alamat">Jenis Limbah:</label>
                            <input type="text" class="form-control" name="jenis_limbah" value="{{ $laporan->pemohon->jenis_limbah }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <textarea class="form-control" name="keterangan">{{ $laporan->keterangan }}</textarea>
                        </div>
                        <div><button type="submit" class="btn btn-primary">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
