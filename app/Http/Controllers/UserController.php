<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ProfileUser::join('users', 'profile.user_id', '=', 'users.id')
                ->where('users.name', 'like', '%' . $request->cari . '%')
                ->paginate(10);
        } else {
            $data = ProfileUser::orderBy('id', 'asc')->paginate(10);
        }

        return view('pegawai.master_data.user')->with(['data' => $data, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProfileUser::where('id', $id)->first();
        return view('pegawai.master_data.userdetail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProfileUser::where('id', $id)->first();
        return view('pegawai.master_data.useredit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        $data = [
            'tgl_lahir' => $request->input('tgl_lahir'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp')
        ];
        ProfileUser::where('id', $id)->update($data);
        return redirect('/user')->with('message', 'Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProfileUser::where('id', $id)->delete();
        return redirect('/user')->with('message', 'Berhasil hapus data');
    }

    //ketua
    public function indexk()
    {
        $data = ProfileUser::orderBy('nip', 'asc')->paginate(10);
        return view('ketua.master_data.data.user')->with('data', $data);
    }
}
