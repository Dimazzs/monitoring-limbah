<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()
    {

        if (Auth::user()->role == 'pegawai') {
            return redirect('home/pegawai')->with('success', 'Berhasil login');
        } elseif (Auth::user()->role == 'pengawas') {
            return redirect('home/pengawas');
        } elseif (Auth::user()->role == 'pengguna') {
            return redirect('home/pengguna');
        }

        // echo '<h1>' . Auth::user()->name . '</h1>';
        // echo '<a href="/logout">Logout >></a>';
    }
    function pengguna()
    {
        return view('pengguna.master_data.profile');
    }
    function pengawas()
    {
        return view("pengawas.master_data.index");
    }
    function pegawai()
    {
        return view("pegawai.master_data.index");
    }
    function ketua()
    {
        return view("ketua.master_data.index");
    }
}
