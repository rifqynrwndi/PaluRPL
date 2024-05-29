<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\SubKriteriaMahasiswa;
use Illuminate\Http\Request;

class PerhitunganMahasiswaController extends Controller
{
    //
    public function index()
    {
        $kost = Kost::all();
        $kost2 = Kost::all();
        $kost3 = Kost::all();

        $fasilitas = array();
        $harga_sewa = array();
        $lokasi = array();
        $kenyamanan = array();
        $keamanan = array();

        $fasilitas2 = array();
        $harga_sewa2 = array();
        $lokasi2 = array();
        $kenyamanan2 = array();
        $keamanan2 = array();

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
        }


        $n_fasilitas = array();
        $n_harga_sewa = array();
        $n_lokasi = array();
        $n_kenyamanan = array();
        $n_keamanan = array();

        $map1 = array_map(function (
        $single_fasilitas,
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

            return $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5;
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
            'kost3' => $kost3,
            'n_fasilitas' => $fasilitas2,
            'n_harga_sewa' => $harga_sewa2,
            'n_lokasi' => $lokasi2,
            'n_kenyamanan' => $kenyamanan2,
            'n_keamanan' => $keamanan2,
            'total' => $total,
        ];


        return view('dashboard.perhitungan.mahasiswa.index', compact('data'));
    }
}
