<?php

namespace App\Http\Controllers;

use App\Models\ProfilePengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenggunaSesiController extends Controller
{
    function register()
    {
        return view('register');
    }
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // 'role' => 'required',
        ], [
            'name.required' => 'belum diisi',

            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'email sudah ada',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'minimum password yang diizinkan 6 karakter',
            // 'role.required' => 'Divisi wajib dipilih',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pengguna',

        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if (Auth::attempt($infologin)) {

            return redirect('/profilep');
        }
    }
}
