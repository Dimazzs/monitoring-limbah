@extends('pengawas.layouts.master')
@section('content')  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Laporan</div>
                <div class="card-body">
                    <form action="{{ route('laporan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="pemohon_id">Pemohon:</label>
                            <select class="form-control" name="pemohon_id">
                                @foreach ($pemohon as $item)
                                    @if ($item->status == 'diterima' && !$item->laporan->count())
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_pengawas">Nama Pengawas:</label>
                            <input type="text" class="form-control" name="name_pengawas">
                        </div>
                        <div class="form-group">
                            <label for="nama_pengawas">Tanggal:</label>
                            <input type="date" class="form-control" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <textarea class="form-control" name="keterangan"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/laporan" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection