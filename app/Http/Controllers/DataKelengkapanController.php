<?php

namespace App\Http\Controllers;

use App\Models\DataKelengkapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataKelengkapanController extends Controller
{


    public function create()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan profil pengguna
        $profilePengguna = $user->profilePengguna;

        // Mendapatkan pemohon terkait dengan profil pengguna
        $pemohon = $profilePengguna->pemohon;

        // Mendapatkan data kelengkapan jika sudah ada
        $dataKelengkapan = $pemohon->dataKelengkapan;

        // Kirim dataKelengkapan ke tampilan blade
        return view('pengguna.master_data.pemohon.kelengkapan.index', compact('dataKelengkapan'));
    }

    /**
     * Menyimpan data kelengkapan baru untuk profil pengguna yang online ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'surat' => 'required|file|mimes:pdf|max:2048',
    //         'akta' => 'required|file|mimes:pdf|max:2048',
    //         'npwp' => 'required|file|mimes:jpg,jpeg,png|max:2048',
    //         'ktp' => 'required|file|mimes:jpg,jpeg,png|max:2048',
    //         'doc_penyimpanan' => 'required|file|mimes:pdf|max:2048',
    //         'doc_pengemasan' => 'required|file|mimes:pdf|max:2048',
    //     ]);

    //     // Mendapatkan user yang sedang login
    //     $user = Auth::user();

    //     // Mendapatkan profil pengguna
    //     $profilePengguna = $user->profilePengguna;

    //     // Mendapatkan pemohon terkait dengan profil pengguna
    //     $pemohon = $profilePengguna->pemohon;

    //     // Jika data kelengkapan sudah ada, maka arahkan ke halaman edit
    //     if ($pemohon->dataKelengkapan) {
    //         return redirect()->route('data-kelengkapan.create', $pemohon->dataKelengkapan->id);
    //     }

    //     // Membuat data kelengkapan baru dan mengaitkannya dengan pemohon
    //     $dataKelengkapan = new DataKelengkapan([
    //         'surat' => $request->file('surat')->store('data_kelengkapan', 'public'),
    //         'akta' => $request->file('akta')->store('data_kelengkapan', 'public'),
    //         'npwp' => $request->file('npwp')->store('data_kelengkapan', 'public'),
    //         'ktp' => $request->file('ktp')->store('data_kelengkapan'),
    //         'doc_penyimpanan' => $request->file('doc_penyimpanan')->store('data_kelengkapan', 'public'),
    //         'doc_pengemasan' => $request->file('doc_pengemasan')->store('data_kelengkapan', 'public'),
    //     ]);

    //     $pemohon->dataKelengkapan()->save($dataKelengkapan);

    //     // Redirect ke halaman yang sesuai setelah berhasil menyimpan data kelengkapan
    //     return redirect()->route('data-kelengkapan.create');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'surat' => 'required|file|mimes:pdf|max:2048',
            'akta' => 'required|file|mimes:pdf|max:2048',
            'npwp' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'ktp' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'doc_penyimpanan' => 'required|file|mimes:pdf|max:2048',
            'doc_pengemasan' => 'required|file|mimes:pdf|max:2048',
            'doc_perizinan' => 'required|file|mimes:pdf',
        ]);

        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan profil pengguna
        $profilePengguna = $user->profilePengguna;

        // Mendapatkan pemohon terkait dengan profil pengguna
        $pemohon = $profilePengguna->pemohon;

        // Simpan data kelengkapan ke database menggunakan updateOrCreate
        $dataKelengkapan = DataKelengkapan::updateOrCreate(
            ['pemohon_id' => $pemohon->id],
            [
                'surat' => $request->file('surat')->store('data_kelengkapan', 'public'),
                'akta' => $request->file('akta')->store('data_kelengkapan', 'public'),
                'npwp' => $request->file('npwp')->store('data_kelengkapan', 'public'),
                'ktp' => $request->file('ktp')->store('data_kelengkapan', 'public'),
                'doc_penyimpanan' => $request->file('doc_penyimpanan')->store('data_kelengkapan', 'public'),
                'doc_pengemasan' => $request->file('doc_pengemasan')->store('data_kelengkapan', 'public'),
                'doc_perizinan' => $request->file('doc_perizinan')->store('data_kelengkapan', 'public'),
            ]
        );

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan data kelengkapan
        return redirect()->route('data-kelengkapan.create')->with('message', 'Berhasil di simpan');
    }


    public function destroy()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan profil pengguna
        $profilePengguna = $user->profilePengguna;

        // Mendapatkan pemohon terkait dengan profil pengguna
        $pemohon = $profilePengguna->pemohon;

        // Jika data kelengkapan sudah ada, maka hapus data kelengkapan dari database
        if ($pemohon->dataKelengkapan) {
            $pemohon->dataKelengkapan->delete();
        }

        // Redirect ke halaman yang sesuai setelah berhasil menghapus data kelengkapan
        return redirect()->route('halaman_setelah_dihapus');
    }

    public function show()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan profil pengguna
        $profilePengguna = $user->profilePengguna;

        // Jika profil pengguna tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$profilePengguna) {
            return redirect()->route('halaman_error')->with('error', 'Profil pengguna tidak ditemukan.');
        }

        // Mendapatkan pemohon terkait dengan profil pengguna
        $pemohon = $profilePengguna->pemohon;

        // Jika pemohon tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$pemohon) {
            return redirect()->route('halaman_error')->with('error', 'Pemohon tidak ditemukan.');
        }

        // Mendapatkan data kelengkapan dari pemohon yang terkait
        $dataKelengkapan = $pemohon->dataKelengkapan;

        // Jika data kelengkapan tidak ditemukan, berikan pesan error atau redirect sesuai kebutuhan
        if (!$dataKelengkapan) {
            return redirect()->route('halaman_error')->with('error', 'Data kelengkapan tidak ditemukan.');
        }

        return view('pengguna.master_data.pemohon.kelengkapan.show', compact('dataKelengkapan'));
    }

    public function detail($id)
    {
        // Mendapatkan data kelengkapan berdasarkan pemohon_id
        $dataKelengkapan = DataKelengkapan::find($id);

        // Jika data kelengkapan tidak ditemukan, tampilkan halaman error 404
        if (!$dataKelengkapan) {
            abort(404);
        }

        return view('pegawai.master_data.pemohon.kelengkapan.detail', compact('dataKelengkapan'));
    }

    public function details($id)
    {
        // Mendapatkan data kelengkapan berdasarkan pemohon_id
        $dataKelengkapan = DataKelengkapan::findOrFail($id);


        return view('pengawas.master_data.pemohon.kelengkapan.detail', compact('dataKelengkapan'));
    }
}
