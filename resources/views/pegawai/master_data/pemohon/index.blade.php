@extends('pegawai.layouts.master')
@section('content')  
{{-- {{ json_encode($data) }} --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                    <h4 class="card-title">Data Pemohon</h4>
                    <div class="table-responsive">
                        <form action="{{ route('apemohon.index') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="cari" placeholder="ketikan nama" value="{{ $request->cari }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">cari</button>
                                </div>
                            </div>
                        </form>
                        <form class="form-valide" >
                      
                        <table class="table table-striped table-bordered zero-configuration">
                            
                            <thead>
                                <tr><th>#</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pemohon</th>
                                    <th>Jabatan</th>
                                    <th>Alamat Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                           
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($data as $item)
                               
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->profilePengguna->nama_perusahaan }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            @if ($item->comments->count() > 0)
                                                <ul>
                                                    @foreach ($item->comments as $comment)
                                                        <li>{{ $comment->comment }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <span class="text-danger">Belum ada keterangan</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a class="btn btn-warning btn-sm" href="{{ url('/apemohon/'.$item->id.'/edit') }}">Edit</a> --}}
                                            <!-- Tombol atau tautan untuk tindakan yang sesuai dengan status menunggu -->
                                            <a class="btn btn-success btn-sm" href="{{ route('comment.create', $item->id) }}"><i class="fa fa-comment"></i></a>
                                            <a class="btn btn-warning btn-sm" href="{{ url('/apemohon/'.$item->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                                            @if ($item->dataKelengkapan)
                                            <a class="btn btn-secondary btn-sm" href="{{ route('data-kelengkapan.detail', $item->dataKelengkapan->id) }}"><i class="fa fa-folder"></i></a>
                                        @else
                                            <span class="text-danger">Data Kelengkapan Belum Tersedia</span>
                                        @endif

                                        <!-- Cek apakah data fasilitas tersedia -->
                                        @if ($dataFasilitas && isset($dataFasilitas[$item->id]))
                                            <a class="btn btn-info btn-sm" href="{{ route('fasilitas.show', $dataFasilitas[$item->id]->id) }}"><i class="fa fa-info-circle"></i></a>
                                        @else
                                            <span class="text-danger">Data Fasilitas Belum Tersedia</span>
                                        @endif
                                        </td>
                                        
                                    </tr>
                                 
                            @endforeach
                                
                  
                            </tbody>
                        </table>
                        {{ $data->links() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection