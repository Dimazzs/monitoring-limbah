<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $iduser = Auth::id();
        $detailProfile = Profile::where('user_id', $iduser)->first();
        // return view('pegawai.master_data.profile', ['detailProfile' => $detailProfile]);
        if (Auth::user()->role == 'pegawai') {
            return view('pegawai.master_data.profile', ['detailProfile' => $detailProfile]);
        } elseif (Auth::user()->role == 'pengawas') {
            return view('pengawas.master_data.profile', ['detailProfile' => $detailProfile]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',

        ]);

        $profile = Profile::find($id);
        $profile->jenis_kelamin = $request->jenis_kelamin;
        $profile->alamat = $request->alamat;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->no_hp = $request->no_hp;
        $profile->save();



        return redirect()->back()->with('message', 'berhasil update');
    }
}
