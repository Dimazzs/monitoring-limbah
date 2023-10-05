<?php

namespace App\Http\Controllers;

use App\Models\ProfilePengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.master_data.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'nama_perusahaan' => ['required', 'string'],
            'email' => ['required', 'string'],
            'npwp' => ['required', 'string'],
            'alamat_perusahaan' => ['required', 'string'],
            'no_tlpn' => ['required', 'string'],
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'name' => $request->name,
        ]);
        $user->profilePengguna()->updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'nama_perusahaan' => $request->nama_perusahaan,
                'email' => $request->email,
                'npwp' => $request->npwp,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'no_tlpn' => $request->no_tlpn,
            ]
        );
        return redirect()->back()->with('message', 'udah update');
    }
}
