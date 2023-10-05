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
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <form action="{{ route('user.index') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="cari" placeholder="ketikan nama" value="{{ $request->cari }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">cari</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr><th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Email</th>
                                    <th>Divisi</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{ $item->user->role }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="{{ url('/user/'.$item->id) }}">Detail</a>
                                        <a class="btn btn-warning btn-sm" href="{{ url('/user/'.$item->id.'/edit') }}">Edit</a>
                                        {{-- <form class="d-inline" action="{{ '/user/'.$item->id }}" method="POST">@csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                        </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Email</th>
                                    <th>Divisi</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </tfoot>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection