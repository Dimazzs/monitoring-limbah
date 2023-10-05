<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pemohon;
use App\Models\ProfilePengguna;
use Illuminate\Http\Request;

class AccPemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request) {
            $data = Pemohon::where('name', 'like', '%' . $request->cari . '%')->paginate(10);
        } else {
            $data = Pemohon::orderBy('created_at', 'asc')->paginate(10);
        }
        $data->load('comments');
        $dataKelengkapan = [];
        $dataFasilitas = [];
        $dataComment = [];
        // Inisialisasi variabel $dataFasilitas

        foreach ($data as $pemohon) {
            $dataKelengkapan[$pemohon->id] = $pemohon->dataKelengkapan;
            // Mendapatkan data fasilitas terkait dari pemohon
            $dataFasilitas[$pemohon->id] = $pemohon->fasilitas;
            $dataComment[$pemohon->id] = $pemohon->comment;
        }

        return view('pegawai.master_data.pemohon.index', compact('data', 'dataFasilitas', 'dataComment', 'request'));
    }

    public function menunggu()
    {

        $data = Pemohon::orderBy('created_at', 'asc')->paginate(10);
        $data->load('comments');
        $dataKelengkapan = [];
        $dataFasilitas = []; // Inisialisasi variabel $dataFasilitas

        foreach ($data as $pemohon) {
            $dataKelengkapan[$pemohon->id] = $pemohon->dataKelengkapan;
            // Mendapatkan data fasilitas terkait dari pemohon
            $dataFasilitas[$pemohon->id] = $pemohon->fasilitas;
            $dataComment[$pemohon->id] = $pemohon->comment;
        }

        return view('pegawai.master_data.pemohon.menunggu', compact('data', 'dataFasilitas', 'dataComment'));
    }

    public function diterima()
    {
        $data = Pemohon::orderBy('created_at', 'asc')->paginate(10);
        $data->load('comments');
        $dataKelengkapan = [];
        $dataFasilitas = []; // Inisialisasi variabel $dataFasilitas

        foreach ($data as $pemohon) {
            $dataKelengkapan[$pemohon->id] = $pemohon->dataKelengkapan;
            // Mendapatkan data fasilitas terkait dari pemohon
            $dataFasilitas[$pemohon->id] = $pemohon->fasilitas;
        }

        return view('pegawai.master_data.pemohon.diterima', compact('data', 'dataFasilitas'));
    }
    public function ditolak()
    {
        $data = Pemohon::orderBy('created_at', 'asc')->paginate(10);
        $data->load('comments');
        $dataKelengkapan = [];
        $dataFasilitas = []; // Inisialisasi variabel $dataFasilitas

        foreach ($data as $pemohon) {
            $dataKelengkapan[$pemohon->id] = $pemohon->dataKelengkapan;
            // Mendapatkan data fasilitas terkait dari pemohon
            $dataFasilitas[$pemohon->id] = $pemohon->fasilitas;
        }

        return view('pegawai.master_data.pemohon.ditolak', compact('data', 'dataFasilitas'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pemohon::where('id', $id)->first();
        return view('pegawai.master_data.pemohon.edit')->with('data', $data);
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

            'alamat' => 'required',
            'kegiatan' => 'required',
            'jenis_limbah' => 'required',
            'jumlah_limbah' => 'required',
            'status' => 'required'
        ], [
            'status.required' => 'status belum diisi'
        ]);
        $data = [
            'alamat' => $request->input('alamat'),
            'kegiatan' => $request->input('kegiatan'),
            'jenis_limbah' => $request->input('jenis_limbah'),
            'jumlah_limbah' => $request->input('jumlah_limbah'),
            'status' => $request->input('status'),

        ];
        Pemohon::where('id', $id)->update($data);
        return redirect('/apemohon')->with('message', 'Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemohon = Pemohon::find($id);

        if (!$pemohon) {
            return redirect()->back()->with('error', 'Data pemohon tidak ditemukan.');
        }

        $pemohon->delete();

        return redirect('/apemohon')->with('message', 'Data pemohon berhasil dihapus.');
    }

    //delete
    public function indexs()
    {

        $data = Pemohon::orderBy('created_at', 'asc')->paginate(10);
        $dataKelengkapan = [];
        $dataFasilitas = []; // Inisialisasi variabel $dataFasilitas

        foreach ($data as $pemohon) {
            $dataKelengkapan[$pemohon->id] = $pemohon->dataKelengkapan;
            // Mendapatkan data fasilitas terkait dari pemohon
            $dataFasilitas[$pemohon->id] = $pemohon->fasilitas;
        }

        return view('pengawas.master_data.pemohon.diterima', compact('data', 'dataFasilitas'));
    }
    public function editH($id)
    {
        $data = Pemohon::where('id', $id)->first();
        return view('pengawas.master_data.pemohon.edit')->with('data', $data);
    }
}
