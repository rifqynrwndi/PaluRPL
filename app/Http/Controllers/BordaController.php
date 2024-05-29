<?php

namespace App\Http\Controllers;

use App\Models\Borda;
use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BordaController extends Controller
{
    //
    public function index()
    {
        $kost = Kost::all();
        $kost2 = Kost::all();

        $fasilitas2 = array();
        $harga_sewa2 = array();
        $lokasi2 = array();
        $kenyamanan2 = array();
        $keamanan2 = array();
        $luas_kamar2 = array();
        $jarak_dari_kampus2 = array();
        $desain_rumah2 = array();

        foreach($kost2 as $ko){
            //Fasilitas
            //Fasilitas
            $fas2 = collect(json_decode($ko->fasilitas))->count();
            if ($fas2 > 5){
                $ko->fasilitas = 0.648;
            }else if ($fas2 >= 3 and $fas2 <= 5){
                $ko->fasilitas = 0.23;
            }else if ($fas2 < 3){
                $ko->fasilitas = 0.122;
            }
            array_push($fasilitas2, $ko->fasilitas);

            //Harga Sewa

            if ($ko->harga_sewa > 900000){
                $ko->harga_sewa = 0.137;
            }else if ($ko->harga_sewa >= 500000 and $ko->harga_sewa <= 900000){
                $ko->harga_sewa = 0.24;
            }else if ($ko->harga_sewa < 500000){
                $ko->harga_sewa = 0.623;
            }
            array_push($harga_sewa2, $ko->harga_sewa);

            //Lokasi
            if ($ko->lokasi == "Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki"){
                $ko->lokasi = 0.681;
            }else if ($ko->lokasi == "Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi"){
                $ko->lokasi = 0.201;
            }else if ($ko->lokasi == "Kost dekat dengan akses yang diperlukan (warung makan, warnet, mini market, londry)"){
                $ko->lokasi = 0.118;
            }
            array_push($lokasi2, $ko->lokasi);

            //Kenyamanan
            if ($ko->kenyamanan == "Lingkungan kost tidak rawan banjir"){
                $ko->kenyamanan = 0.595;
            }else if ($ko->kenyamanan == "Lingkungan kost yang bersih"){
                $ko->kenyamanan = 0.277;
            }else if ($ko->kenyamanan == "Keramahan pemilik / penjaga kost"){
                $ko->kenyamanan = 0.129;
            }
            array_push($kenyamanan2, $ko->kenyamanan);

            //Keamanan
            if ($ko->keamanan == "Aman dari pencurian"){
                $ko->keamanan = 0.633;
            }else if ($ko->keamanan == "Keberadaan tuan ruan rumah / penjaga kost"){
                $ko->keamanan = 0.26;
            }else if ($ko->keamanan == "Tempat kost ada jam malam"){
                $ko->keamanan = 0.106;
            }
            array_push($keamanan2, $ko->keamanan);

            //Luas Kamar
            if ($ko->panjangkamar == 4 and $ko->lebarkamar == 5){
                $ko->luas_kamar = 0.715;
            }else if ($ko->panjangkamar == 3 and $ko->lebarkamar == 4){
                $ko->luas_kamar = 0.187;
            }else if ($ko->panjangkamar == 3 and $ko->lebarkamar == 3){
                $ko->luas_kamar = 0.098;
            }
            array_push($luas_kamar2, $ko->luas_kamar);

            //Jarak Dari Kampus
            if ($ko->jarak_dari_kampus < 500){
                $ko->jarak_dari_kampus = 0.619;
            }else if ($ko->jarak_dari_kampus >= 500 and $ko->jarak_dari_kampus <= 1500){
                $ko->jarak_dari_kampus = 0.284;
            }else if ($ko->jarak_dari_kampus > 1500){
                $ko->jarak_dari_kampus = 0.096;
            }
            array_push($jarak_dari_kampus2, $ko->jarak_dari_kampus);

            //Desain Rumah
            if ($ko->desain_rumah == "Permanen"){
                $ko->desain_rumah = 0.648;
            }else if ($ko->desain_rumah == "Sekat gypsum"){
                $ko->desain_rumah = 0.23;
            }else if ($ko->desain_rumah == "Sekat triplek"){
                $ko->desain_rumah = 0.122;
            }
            array_push($desain_rumah2, $ko->desain_rumah);
        }


        $n_fasilitas = array();
        $n_harga_sewa = array();
        $n_lokasi = array();
        $n_kenyamanan = array();
        $n_keamanan = array();
        $n_luas_kamar = array();
        $n_jarak_dari_kampus = array();
        $n_desain_rumah = array();

        $map1 = array_map(function ($fasilitas_normalisasi,
        $harga_sewa_normalisasi,
        $lokasi_normalisasi,
        $kenyamanan_normalisasi,
        $keamanan_normalisasi,
        $luas_kamar_normalisasi,
        $jarak_dari_kampus_normalisasi,
        $desain_rumah_normalisasi
        ){
            $hasil1 = $fasilitas_normalisasi * 0.519;
            $hasil2 = $harga_sewa_normalisasi * 0.197;
            $hasil3 = $lokasi_normalisasi * 0.128;
            $hasil4 = $kenyamanan_normalisasi * 0.087;
            $hasil5 = $keamanan_normalisasi * 0.063;
            $hasil6 = $luas_kamar_normalisasi * 0.667;
            $hasil7 = $jarak_dari_kampus_normalisasi * 0.235;
            $hasil8 = $desain_rumah_normalisasi * 0.091;

            return $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 + $hasil6 + $hasil7 + $hasil8;
        },
        $fasilitas2, $n_fasilitas,
        $harga_sewa2, $n_harga_sewa,
        $lokasi2, $n_lokasi,
        $kenyamanan2, $n_kenyamanan,
        $keamanan2, $n_keamanan);

        $total = collect($map1)->sortDesc()->values()->all();

        $data = [
            'kost' => $kost,
            'kost2' => $kost2,
            'n_fasilitas' => $fasilitas2,
            'n_harga_sewa' => $harga_sewa2,
            'n_lokasi' => $lokasi2,
            'n_kenyamanan' => $kenyamanan2,
            'n_keamanan' => $keamanan2,
            'n_luas_kamar' => $luas_kamar2,
            'n_jarak_dari_kampus' => $jarak_dari_kampus2,
            'n_desain_rumah' => $desain_rumah2,
            'total' => $total,
        ];

        return view('dashboard.borda.index', compact('data'));
    }

    public function upload(Request $request)
    {
        // dd($request->all());
        try {
            DB::table('borda')->delete();

            foreach($request->id_user as $key=>$value){
                $kost = new Borda;
                $kost->id_user = $request->id_user[$key];
                $kost->nama_kost = $request->nama_kost[$key];
                $kost->fasilitas = $request->fasilitas[$key];
                $kost->harga_sewa = $request->harga_sewa[$key];
                $kost->lokasi = $request->lokasi[$key];
                $kost->kenyamanan = $request->kenyamanan[$key];
                $kost->keamanan = $request->keamanan[$key];
                $kost->panjangkamar = $request->panjangkamar[$key];
                $kost->lebarkamar = $request->lebarkamar[$key];
                $kost->jarak_dari_kampus = $request->jarak_dari_kampus[$key];
                $kost->desain_rumah = $request->desain_rumah[$key];
                $kost->gambar = $request->gambar[$key];
                $kost->total = $request->total[$key];
                $kost->rank = $request->rank[$key];
                $kost->save();
            }

            return redirect()->route('borda.index')->with('success', 'Berhasil mengupdate kost terbaik');
        } catch (\Throwable $th) {
            return redirect()->route('borda.index')->with(['info' => $th->getMessage()]);
        }
    }
}
