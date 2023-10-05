<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\Profile;
use App\Models\ProfilePengguna;
use App\Models\User;
use Illuminate\Http\Request;

class DahboardController extends Controller
{
    public function indexp()
    {
        $jumlahAnggota = Profile::count();
        $jumlahUser = User::count();
        $jumlahPerusahaan = ProfilePengguna::count();

        return view('pegawai.master_data.index', compact('jumlahAnggota', 'jumlahUser', 'jumlahPerusahaan'));
    }

    public function indexs()
    {
        $jumlahAnggota = Profile::count();
        $jumlahUser = User::count();
        $jumlahPerusahaan = ProfilePengguna::count();
        $jumlahPemohon = Pemohon::count();
        return view('pengawas.master_data.index', compact('jumlahAnggota', 'jumlahUser', 'jumlahPerusahaan', 'jumlahPemohon'));
    }
}
