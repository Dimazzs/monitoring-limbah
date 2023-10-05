@extends('pengguna.layouts.master')
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
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <form class="form-valide" action="/status">
                      
                        <table class="table table-striped table-bordered zero-configuration">
                            <a > Data akan Terhapus dalam 2 hari jika status di tolak</a>
                            <thead>
                                <tr><th>Nama Pemohon</th>
                                    <th>Jabatan</th>
                                    <th>Alamat Kegiatan</th>
                                    <th>No Hp</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($data as $pemohon)
                                <tr>
                                    <td>{{ $pemohon->name }}</td>
                                    <td>{{ $pemohon->jabatan }}</td>
                                    <td>{{ $pemohon->alamat }}</td>
                                    <td>{{ $pemohon->no_hp }}</td>
                                    <td>{{ $pemohon->kegiatan }}</td>
                                    <td>{{ $pemohon->status }}</td>
                                    <td>
                                        {{-- <a class="btn btn-secondary btn-sm" href="{{ url('/user/'.$pemohon->id) }}">Detail</a>
                                        <a class="btn btn-warning btn-sm" href="{{ url('/pemohonp/'.$pemohon->id.'/edit') }}">Edit</a>
                                        <form class="d-inline" action="{{ '/pemohonp/'.$pemohon->id }}" method="POST">@csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form> --}}
                                    {{-- <form class="d-inline" action="{{ '/statusr/'.$pemohon->id }}" method="POST">@csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                        </form> --}}
                                            @if ($pemohon->comments->count() > 0)
                                            <ul>
                                                @foreach ($pemohon->comments as $comment)
                                                    <li>{{ $comment->comment }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-danger">Belum ada Keterangan</span>
                                        @endif
                                   
                                    </td>
                                </tr>
                                @endforeach
                                
                  
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection