<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Pemohon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();

        return view('pengawas.master_data.laporan.index', compact('laporan'));
    }


    public function create()
    {
        $pemohon = Pemohon::all(); // Ambil semua data pemohon

        return view('pengawas.master_data.laporan.laporan', compact('pemohon'));
    }
    public function store(Request $request)
    {
        $pemohon = Pemohon::find($request->pemohon_id);

        if ($pemohon) {
            $laporan = new Laporan();
            $laporan->pemohon_id = $pemohon->id;
            $laporan->name_pengawas = $request->name_pengawas;
            $laporan->tgl = $request->tgl;
            $laporan->keterangan = $request->keterangan;
            $laporan->save();

            // Tampilkan pesan sukses atau lakukan tindakan lainnya
            return redirect()->route('laporan.index')->with('success', 'Data laporan berhasil dibuat.');
        } else {
            // Jika pemohon tidak ditemukan, tampilkan pesan error atau lakukan tindakan lainnya
            return redirect()->back()->with('error', 'Pemohon tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pemohon = Pemohon::all();

        return view('pengawas.master_data.laporan.edit', compact('laporan', 'pemohon'));
    }

    public function update(Request $request, $id)
    {
        // Ambil data laporan berdasarkan ID
        $laporan = Laporan::findOrFail($id);

        // Perbarui data laporan
        $laporan->name_pengawas = $request->name_pengawas;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();

        // Perbarui data pemohon
        $pemohon = $laporan->pemohon;
        if ($pemohon) {
            $pemohon->jabatan = $request->jabatan;
            $pemohon->alamat = $request->alamat;
            $pemohon->kegiatan = $request->kegiatan;
            $pemohon->jenis_limbah = $request->jenis_limbah;
            $pemohon->jumlah_limbah = $request->jumlah_limbah;
            $pemohon->save();

            // Pastikan data pemohon telah tersimpan dengan benar
            if ($pemohon->wasChanged()) {
                return redirect()->route('laporan.index')->with('success', 'Data laporan berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data pemohon tidak berubah atau pemohon tidak ditemukan.');
            }
        } else {
            return redirect()->back()->with('error', 'Data pemohon tidak ditemukan.');
        }
    }



    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);

        if ($laporan) {
            $laporan->delete();

            return redirect()->route('laporan.index')->with('success', 'Data laporan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data laporan tidak ditemukan.');
        }
    }

    public function indexl()
    {
        $laporan = Laporan::all();

        return view('pegawai.master_data.laporan.index', compact('laporan'));
    }

    public function editlLaporan($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pemohon = Pemohon::all();

        return view('pegawai.master_data.laporan.edit', compact('laporan', 'pemohon'));
    }

    public function updatel(Request $request, $id)
    {
        // Ambil data laporan berdasarkan ID
        $laporan = Laporan::findOrFail($id);

        // Perbarui data laporan
        $laporan->name_pengawas = $request->name_pengawas;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();

        // Perbarui data pemohon
        $pemohon = $laporan->pemohon;
        if ($pemohon) {
            $pemohon->jabatan = $request->jabatan;
            $pemohon->alamat = $request->alamat;
            $pemohon->jenis_limbah = $request->jenis_limbah;
            $pemohon->jumlah_limbah = $request->jumlah_limbah;
            $pemohon->save();

            // Pastikan data pemohon telah tersimpan dengan benar
            if ($pemohon->wasChanged()) {
                return redirect()->route('laporan.indexl')->with('success', 'Data laporan berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data pemohon tidak berubah atau pemohon tidak ditemukan.');
            }
        } else {
            return redirect()->back()->with('error', 'Data pemohon tidak ditemukan.');
        }
    }
    public function destroyl($id)
    {
        $laporan = Laporan::findOrFail($id);

        if ($laporan) {
            $laporan->delete();

            return redirect()->route('laporan.indexl')->with('success', 'Data laporan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data laporan tidak ditemukan.');
        }
    }

    public function detail($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pemohon = $laporan->pemohon;

        return view('pengawas.master_data.laporan.detail', compact('laporan', 'pemohon'));
    }

    public function cetakDetail($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pemohon = $laporan->pemohon;

        return view('pengawas.master_data.laporan.cetakdetail', compact('laporan', 'pemohon'));
    }
}
