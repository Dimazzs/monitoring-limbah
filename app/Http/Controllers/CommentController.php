<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pemohon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($id)
    {
        // Dapatkan data pemohon berdasarkan ID yang diberikan
        $pemohon = Pemohon::find($id);

        // Kirimkan data pemohon ke view untuk ditampilkan dalam formulir pembuatan komentar
        return view('pegawai.master_data.pemohon.comment.comment', compact('pemohon'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan oleh user
        $request->validate([
            'pemohon_id' => 'required|integer',
            'comment' => 'required|string',
        ]);

        // Data untuk diupdate atau dibuat baru
        $commentData = [
            'pemohon_id' => $request->pemohon_id,
            'comment' => $request->comment,
        ];

        // Gunakan updateOrCreate untuk menyimpan atau memperbarui record komentar
        Comment::updateOrCreate(['pemohon_id' => $request->pemohon_id], $commentData);

        return redirect('/apemohon')->with('success', 'Komentar berhasil ditambahkan.');
    }
}
