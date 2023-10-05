<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\ProfilePengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemohonController extends Controller
{
    public function index()
    {
        // $user = Auth::user()->id;
        // $data = Pemohon::where('user_id', $user)->get();
        $profilep_id = Auth::user()->profilePengguna->id;
        $data = Pemohon::where('profilep_id', $profilep_id)->get();
        return view('pengguna.master_data.pemohon.status', compact('data'));
    }
}
