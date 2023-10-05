<?php

namespace App\Http\Controllers;

use App\Models\DataKelengkapan;
use App\Models\Pemohon;
use App\Models\ProfilePengguna;
use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PemohonController extends Controller
{
    public function index()
    {

        return view('pengguna.master_data.pemohon.pemohon');
    }
    // public function create(Request $request)
    // {


    //     // Mendapatkan ID profil pengguna yang sedang login
    //     $profilePenggunaId = Auth::user()->profilePengguna->id;

    //     // Membuat data pemohon baru
    //     $pemohon = new Pemohon();
    //     $pemohon->profile_pengguna_id = $profilePenggunaId;
    //     $pemohon->name = $request->input('name');
    //     $pemohon->jabatan = $request->input('jabatan');
    //     $pemohon->alamat = $request->input('alamat');
    //     $pemohon->no_hp = $request->input('no_hp');
    //     $pemohon->kegiatan = $request->input('kegiatan');
    //     $pemohon->jenis_limbah = $request->input('jenis_limbah');
    //     $pemohon->jumlah_limbah = $request->input('jumlah_limbah');
    //     // Tambahkan atribut lain yang sesuai dengan struktur tabel Pemohon

    //     // Simpan data pemohon
    //     $pemohon->save();

    //     // Tambahkan logika atau redirect ke halaman yang sesuai setelah berhasil membuat data pemohon

    //     // Contoh redirect ke halaman pemohon yang baru dibuat
    //     return redirect('/status');
    // }
    public function create(Request $request)
    {
        // Mendapatkan ID profil pengguna yang sedang login
        $profilePenggunaId = Auth::user()->profilePengguna->id;

        // Kondisi pencarian berdasarkan profil pengguna ID
        $condition = ['profile_pengguna_id' => $profilePenggunaId];

        // Data yang akan dibuat atau diperbarui
        $data = [
            'name' => $request->input('name'),
            'jabatan' => $request->input('jabatan'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'kegiatan' => $request->input('kegiatan'),
            'jenis_limbah' => $request->input('jenis_limbah'),
            'jumlah_limbah' => $request->input('jumlah_limbah'),
            // Tambahkan atribut lain yang sesuai dengan struktur tabel Pemohon
        ];

        // Membuat atau memperbarui data pemohon berdasarkan kondisi
        Pemohon::updateOrCreate($condition, $data);

        // Tambahkan logika atau redirect ke halaman yang sesuai setelah berhasil membuat atau memperbarui data pemohon

        // Contoh redirect ke halaman pemohon yang baru dibuat atau diperbarui
        return redirect('pemohon')->with('message', 'Berhasil di simpan');
    }

    public function edit($id)
    {
        $data = Pemohon::where('id', $id)->first();
        return view('pengawas.master_data.pemohon.hapus')->with('data', $data);
    }

    public function indexs()
    {
        $data = Pemohon::whereHas('profilePengguna', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
        $data->load('comments');

        return view('pengguna.master_data.pemohon.status', compact('data'));
    }

    public function detail($id)
    {
        $data = Pemohon::findOrFail($id);
        return view('pengawas.master_data.pemohon.detail', compact('data'));
    }
}
