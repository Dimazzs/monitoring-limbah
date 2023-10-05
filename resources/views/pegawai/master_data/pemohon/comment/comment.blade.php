@extends('pegawai.layouts.master') <!-- Jika Anda menggunakan layout, sesuaikan dengan nama layout Anda -->

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sarant atau masukan {{ $pemohon->name }}</h4>
                    <form action="{{ route('comment.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="pemohon_id" value="{{ $pemohon->id }}">
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="comment" id="comment" rows="4" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

