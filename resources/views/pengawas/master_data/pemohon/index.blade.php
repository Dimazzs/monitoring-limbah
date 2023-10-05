@extends('pengawas.layouts.master')
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
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
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
                                            {{-- <a class="btn btn-warning btn-sm" href="{{ url('/apemohon/'.$item->id.'/edit') }}">Edit</a> --}}
                                            <!-- Tombol atau tautan untuk tindakan yang sesuai dengan status menunggu -->
                                            
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