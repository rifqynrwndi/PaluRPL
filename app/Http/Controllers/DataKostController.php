<?php

namespace App\Http\Controllers;

use App\Models\DataKost;
use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DataKostController extends Controller
{
    //
    public function index()
    {

        if(Auth::user()->role == "pemilikkost"){
            $datakost = Kost::all()->where('id_user', Auth::user()->id);
        }else{
            $datakost = Kost::all();
        }
        return view('dashboard.datakost.index', compact('datakost'));
    }

    public function insert(Request $request)
    {
        return view('dashboard.datakost.modal.tambah');
    }

    public function push(Request $request)
    {
        $request->validate([
            'gambar' => ['required', 'mimes:png,jpg'],
        ]);

        $harga1 = Str::replace('Rp', '', $request->harga_sewa);
        $harga2 = Str::replace('.', '', $harga1);

        $datakost = new Kost;
        $datakost->id_user = Auth::user()->id;
        $datakost->nama_kost = $request->nama_kost;
        $datakost->fasilitas = collect($request->fasilitas);
        $datakost->harga_sewa = $harga2;
        $datakost->lokasi = $request->lokasi;
        $datakost->kenyamanan = $request->kenyamanan;
        $datakost->keamanan = $request->keamanan;
        $datakost->panjangkamar = $request->panjangkamar;
        $datakost->lebarkamar = $request->lebarkamar;
        $datakost->jarak_dari_kampus = $request->jarak_dari_kampus;
        $datakost->desain_rumah = $request->desain_rumah;
        $datakost->tipe_kost = $request->tipe_kost;
        $date = date('Ymd His gis');

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('admin/demo/app/images/', $date.$request->file('gambar')->getClientOriginalName());
            $datakost->gambar = $date.$request->file('gambar')->getClientOriginalName();
            $datakost->save();

            return redirect()->route('datakost.index')->with('success', 'Kost telah ditambahkan');
        }

        return redirect()->route('datakost.index')->with('info', 'Kost gagal ditambahkan');
    }

    public function edit($id)
    {
        $kost = Kost::all()->where('id', $id)->first();
        return view('dashboard.datakost.modal.edit', compact('kost'));
    }

    public function update(Request $request, $id)
    {
        $harga1 = Str::replace('Rp', '', $request->harga_sewa);
        $harga2 = Str::replace('.', '', $harga1);

        $datakost = Kost::where('id', $id)->update([
            'fasilitas' => collect($request->fasilitas),
            'harga_sewa' => $harga2,
            'lokasi' => $request->lokasi,
            'kenyamanan' => $request->kenyamanan,
            'keamanan' => $request->keamanan,
            'panjangkamar' => $request->panjangkamar,
            'lebarkamar' => $request->lebarkamar,
            'jarak_dari_kampus' => $request->jarak_dari_kampus,
            'desain_rumah' => $request->desain_rumah,
            'tipe_kost' => $request->tipe_kost,
        ]);

        if($datakost){
            return redirect()->route('datakost.index')->with('success', 'Kost berhasil diubah');
        }

        return redirect()->route('datakost.index')->with('info', 'Kost gagal diubah');
    }

    public function delete($id)
    {
        $datakost = Kost::where('id', $id)->delete();

        if($datakost){
            return redirect()->back()->with('success', 'Kost berhasil dihapus');
        }

        return redirect()->back()->with('info', 'Kost gagal dihapus');
    }
}
