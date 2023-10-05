<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FasilitasController extends Controller
{
    public function create()
    {

        return view('pengguna.master_data.pemohon.fasilitas.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'bangunan' => 'required|string',
            'tangki' => 'required|string',
            'penumpukan_limbah' => 'required|string',
            'jenis_limbah' => 'required|string',
            'simbol_bangunan' => 'required|string',
            'simbol_kemasan' => 'required|string',
            'dinding' => 'required|string',
            'sop' => 'required|string',
            'bak' => 'required|string',
            'ventilasi' => 'required|string',
        ]);

        // Mendapatkan ID pemohon yang sedang login
        $pemohonId = Auth::user()->profilePengguna->pemohon->id;

        // Data fasilitas yang akan dibuat atau diperbarui
        $data = [
            'bangunan' => $request->input('bangunan'),
            'tangki' => $request->input('tangki'),
            'penumpukan_limbah' => $request->input('penumpukan_limbah'),
            'jenis_limbah' => $request->input('jenis_limbah'),
            'simbol_bangunan' => $request->input('simbol_bangunan'),
            'simbol_kemasan' => $request->input('simbol_kemasan'),
            'dinding' => $request->input('dinding'),
            'sop' => $request->input('sop'),
            'bak' => $request->input('bak'),
            'ventilasi' => $request->input('ventilasi'),
            // Tambahkan atribut lain yang sesuai dengan struktur tabel Fasilitas
        ];

        // Membuat atau memperbarui data fasilitas berdasarkan pemohon ID
        Fasilitas::updateOrCreate(['pemohon_id' => $pemohonId], $data);

        // Tambahkan logika atau redirect ke halaman yang sesuai setelah berhasil membuat atau memperbarui data fasilitas

        // Contoh redirect ke halaman fasilitas yang baru dibuat atau diperbarui
        return redirect('/anggota/fasilitas')->with('message', 'Sudah di update');
    }

    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan profil pengguna
        $profilePengguna = $user->profilePengguna;

        // Jika profil pengguna tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$profilePengguna) {
            return redirect()->route('halaman_error1')->with('error', 'Profil pengguna tidak ditemukan.');
        }

        // Mendapatkan pemohon terkait dengan profil pengguna
        $pemohon = $profilePengguna->pemohon;

        // Jika pemohon tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$pemohon) {
            return redirect()->route('halaman_error1')->with('error', 'Pemohon tidak ditemukan.');
        }

        // Mendapatkan data fasilitas dari pemohon yang terkait
        $fasilitas = Fasilitas::where('pemohon_id', $pemohon->id)->first();

        // Jika data fasilitas tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$fasilitas) {
            return redirect()->route('halaman_error1')->with('error', 'Data fasilitas tidak ditemukan.');
        }

        return view('pengguna.master_data.pemohon.fasilitas.show', compact('fasilitas'));
    }

    public function show($id)
    {
        // Cari data fasilitas berdasarkan ID
        $fasilitas = Fasilitas::find($id);

        // Jika data fasilitas tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$fasilitas) {
            return redirect()->route('halaman_error')->with('error', 'Data fasilitas tidak ditemukan.');
        }

        return view('pegawai.master_data.pemohon.fasilitas.detail', compact('fasilitas'));
    }
    public function updates(Request $request, $id)
    {
        $request->validate([
            'bangunan' => 'required|string',
            'tangki' => 'required|string',
            'penumpukan_limbah' => 'required|string',
            'jenis_limbah' => 'required|string',
            'simbol_bangunan' => 'required|string',
            'simbol_kemasan' => 'required|string',
            'dinding' => 'required|string',
            'sop' => 'required|string',
            'bak' => 'required|string',
            'ventilasi' => 'required|string',
        ]);


        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->update($request->all());

        return redirect()->route('fasilitas.show', $id)->with('message', 'Data berhasil di update');
    }

    public function showi($id)
    {
        // Cari data fasilitas berdasarkan ID
        $fasilitas = Fasilitas::findOrFail($id);

        // Jika data fasilitas tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$fasilitas) {
            return redirect()->route('halaman_error')->with('error', 'Data fasilitas tidak ditemukan.');
        }

        return view('pengawas.master_data.pemohon.fasilitas.detail', compact('fasilitas'));
    }
}
