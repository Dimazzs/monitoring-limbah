@extends('pengawas.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kelengkapan</div>

                <div class="card-body">
                    @if ($dataKelengkapan)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Jenis Dokumen</th>
                                    <th>Lihat Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Surat</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->surat) }}" target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>Akta</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->akta) }}" target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>NPWP</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->npwp) }}"target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>KTP</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->ktp) }}" target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>Dokumen Penyimpanan</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->doc_penyimpanan) }}" target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>Dokumen Pengemasan</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->doc_pengemasan) }}"target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                                <tr>
                                    <td>Dokumen Perizinan</td>
                                    <td><a href="{{ asset('storage/' . $dataKelengkapan->doc_perizinan) }}"target="_blank" class="btn btn-info">
                                        <i class="fa fa-folder"></i> Lihat Dokumen</td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <p>Data kelengkapan tidak ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
