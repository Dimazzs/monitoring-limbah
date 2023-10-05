@extends('pengawas.layouts.master')
@section('content')  
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                            <p class="alert alert-success"> {{ session('message') }}</p>
                        @endif
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr><th>#</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Pengawas</th>
                                    <th>Alamat Kegiatan</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Keterangan</th>
                                    <th>jenis_limbah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $item)
                                <tr> <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pemohon->name }}</td>
                                    <td>{{ $item->name_pengawas }}</td>
                                    <td>{{ $item->pemohon->alamat }}</td>
                                    <td>{{ $item->pemohon->profilePengguna->nama_perusahaan }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->pemohon->jenis_limbah }}</td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="{{ route('laporan.detail', $item->id) }}"><li class="fa fa-eye"></li></a>
                                        <a class="btn btn-warning btn-sm" href="{{ route('laporan.edit', $item->id) }}"><li class="fa fa-edit"></li></a>
                                       
                                            <!-- ... kolom-kolom lainnya -->
                                        
                                                <form class="d-inline" action="{{ route('laporan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data laporan?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" class="btn btn-danger"><li class="fa fa-trash"></li></button>
                                                </form>
                                            
                                         
                                        <a href="{{ route('laporancetak.detail', $item->id) }}" target="_blank" class="btn btn-primary btn-sm">
                                            <i class="fa fa-printer"></i>printer</a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                  
                            </tbody>
                        </table>
                        {{-- {{ $data->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection