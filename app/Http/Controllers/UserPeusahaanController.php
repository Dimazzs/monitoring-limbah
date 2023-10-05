<?php

namespace App\Http\Controllers;

use App\Models\ProfilePengguna;
use Illuminate\Http\Request;

class UserPeusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $data = ProfilePengguna::where('nama_perusahaan', 'like', '%' . $request->cari . '%')->paginate(10);
        } else {
            $data = ProfilePengguna::orderBy('nama_perusahaan', 'asc')->paginate(10);
        }
        return view('pegawai.master_data.profilePerusahaan.profile')->with(['data' => $data, 'request' => $request]);
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
        $data = ProfilePengguna::where('id', $id)->first();
        return view('pegawai.master_data.profilePerusahaan.profiledetail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProfilePengguna::where('id', $id)->first();
        return view('pegawai.master_data.profilePerusahaan.profileedit')->with('data', $data);
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

            'nama_perusahaan' => 'required',
            'npwp' => 'required',
            'email' => 'required',
            'alamat_perusahaan' => 'required',
            'no_tlpn' => 'required'
        ]);
        $data = [
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'npwp' => $request->input('npwp'),
            'email' => $request->input('email'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            'no_tlpn' => $request->input('no_tlpn')
        ];
        ProfilePengguna::where('id', $id)->update($data);
        return redirect('/userp')->with('message', 'Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //ketua
    public function indexk()
    {
        $data = ProfilePengguna::orderBy('nama_perusahaan', 'asc')->paginate(10);
        return view('ketua.master_data.data.perusahaan')->with('data', $data);
    }
}
