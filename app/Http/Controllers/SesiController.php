<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'pegawai') {
                return redirect('home/pegawai')->with('success', 'Berhasil login');
            } elseif (Auth::user()->role == 'pengawas') {
                return redirect('home/pengawas');
            } elseif (Auth::user()->role == 'pengguna') {
                return redirect('home/pengguna');
            }
        } else {
            return redirect('')->withErrors('Email dan Password yang dimasukkan tidak sesuai ')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('')->with('success', 'Berhasil logout');
    }
    function register_pegawai()
    {
        return view('pegawai.master_data.register');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'nip' => 'required|unique:profile',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required|max:12'
        ], [
            'name.required' => 'belum diisi',
            'nip.required' => 'Nik Wajib diisi',
            'nip.unique' => 'Nik sudah ada',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'email sudah ada',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'minimum password yang diizinkan 6 karakter',
            'role.required' => 'Divisi wajib dipilih',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'alamat.required' => 'Alamat wajib diisi',
            'tgl_lahir.required' => 'Tanggal lahir wajib diisi',
            'no_hp.required' => 'No hp wajib diisi'

        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,

        ];
        $user = User::create($data);
        Profile::create([
            'nip' => $request['nip'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'alamat' => $request['alamat'],
            'tgl_lahir' => $request['tgl_lahir'],
            'no_hp' => $request['no_hp'],
            'user_id' => $user->id
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if ($infologin) {

            return redirect()->back()->with('message', 'berhasil buat akun');
        }
    }
}
