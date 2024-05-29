<?php

namespace App\Http\Controllers;

use App\Models\Borda;
use App\Models\Kost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $kost = Borda::all();
        // $kost2 = Borda::skip(0)->take(1)->get();

        $kost = Kost::all();
        $kost2 = Kost::all();
        $kost3 = Kost::all();

        $fasilitas = array();
        $harga_sewa = array();
        $lokasi = array();
        $kenyamanan = array();
        $keamanan = array();
        $luas_kamar = array();
        $jarak_dari_kampus = array();
        $desain_rumah = array();

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
            $fas = collect(json_decode($ko->fasilitas))->count();
            if ($fas > 5){
                $ko->fasilitas = "Lengkap";
            }else if ($fas >= 3 and $fas <= 5){
                $ko->fasilitas = "Kurang Lengkap";
            }else if ($fas < 3){
                $ko->fasilitas = "Tidak Lengkap";
            }
            array_push($fasilitas, $fas);

            //Harga Sewa

            if ($ko->harga_sewa > 900000){
                $ko->harga_sewa = "Mahal";
            }else if ($ko->harga_sewa >= 500000 and $ko->harga_sewa <= 900000){
                $ko->harga_sewa = "Sedang";
            }else if ($ko->harga_sewa < 500000){
                $ko->harga_sewa = "Murah";
            }
            array_push($harga_sewa, $ko->harga_sewa);

            //Lokasi
            if ($ko->lokasi == "Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki"){
                $ko->lokasi = "Sangat Baik";
            }else if ($ko->lokasi == "Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi"){
                $ko->lokasi = "Baik";
            }else if ($ko->lokasi == "Kost dekat dengan akses yang diperlukan (warung makan, warnet, mini market, londry)"){
                $ko->lokasi = "Cukup";
            }
            array_push($lokasi, $ko->lokasi);

            //Kenyamanan
            if ($ko->kenyamanan == "Lingkungan kost tidak rawan banjir"){
                $ko->kenyamanan = "Sangat Baik";
            }else if ($ko->kenyamanan == "Lingkungan kost yang bersih"){
                $ko->kenyamanan = "Baik";
            }else if ($ko->kenyamanan == "Keramahan pemilik / penjaga kost"){
                $ko->kenyamanan = "Cukup";
            }
            array_push($kenyamanan, $ko->kenyamanan);

            //Keamanan
            if ($ko->keamanan == "Aman dari pencurian"){
                $ko->keamanan = "Sangat Baik";
            }else if ($ko->keamanan == "Keberadaan tuan ruan rumah / penjaga kost"){
                $ko->keamanan = "Baik";
            }else if ($ko->keamanan == "Tempat kost ada jam malam"){
                $ko->keamanan = "Cukup";
            }
            array_push($keamanan, $ko->keamanan);

            //Luas Kamar
            if ($ko->panjangkamar == 4 and $ko->lebarkamar == 5){
                $ko->luas_kamar = "Sangat Baik";
            }else if ($ko->panjangkamar == 3 and $ko->lebarkamar == 4){
                $ko->luas_kamar = "Baik";
            }else if ($ko->panjangkamar == 3 and $ko->lebarkamar == 3){
                $ko->luas_kamar = "Cukup";
            }
            array_push($luas_kamar, $ko->luas_kamar);

            //Jarak Dari Kampus
            if ($ko->jarak_dari_kampus < 500){
                $ko->jarak_dari_kampus = "Sangat Baik";
            }else if ($ko->jarak_dari_kampus >= 500 and $ko->jarak_dari_kampus <= 1500){
                $ko->jarak_dari_kampus = "Baik";
            }else if ($ko->jarak_dari_kampus > 1500){
                $ko->jarak_dari_kampus = "Cukup";
            }
            array_push($jarak_dari_kampus, $ko->jarak_dari_kampus);

            //Desain Rumah
            if ($ko->desain_rumah == "Permanen"){
                $ko->desain_rumah = "Sangat Baik";
            }else if ($ko->desain_rumah == "Sekat gypsum"){
                $ko->desain_rumah = "Baik";
            }else if ($ko->desain_rumah == "Sekat triplek"){
                $ko->desain_rumah = "Cukup";
            }
            array_push($desain_rumah, $ko->desain_rumah);
        }


        foreach($kost3 as $ko){
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

        $map1 = array_map(function ($single_fasilitas,
        $single_fasilitas_normalisasi,
        $single_harga_sewa,
        $single_harga_sewa_normalisasi,
        $single_lokasi,
        $single_lokasi_normalisasi,
        $single_kenyamanan,
        $single_kenyamanan_normalisasi,
        $single_keamanan,
        $single_keamanan_normalisasi

        ){
            $hasil1 = $single_fasilitas * 0.519;
            $hasil2 = $single_harga_sewa * 0.197;
            $hasil3 = $single_lokasi * 0.128;
            $hasil4 = $single_kenyamanan * 0.087;
            $hasil5 = $single_keamanan * 0.059;
            // $hasil6 = $luas_kamar_normalisasi * 0.667;
            // $hasil7 = $jarak_dari_kampus_normalisasi * 0.235;
            // $hasil8 = $desain_rumah_normalisasi * 0.091;

            return $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5;
        },
        $fasilitas2, $n_fasilitas,
        $harga_sewa2, $n_harga_sewa,
        $lokasi2, $n_lokasi,
        $kenyamanan2, $n_kenyamanan,
        $keamanan2, $n_keamanan,
        $luas_kamar2, $n_luas_kamar,
        $jarak_dari_kampus2, $n_jarak_dari_kampus,
        $desain_rumah2, $n_desain_rumah);

        $total = collect($map1)->sortDesc()->values()->all();

        $data = [
            'kost' => $kost,
            'kost2' => $kost2,
            'kost3' => $kost3,
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
        return view('landing-page.index', compact('data'));
    }

    public function about()
    {
        return view('landing-page.about');
    }
    public function contact()
    {
        return view('landing-page.contact');
    }
}
