<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class PerhitunganPemilikKostController extends Controller
{
    //
    public function index()
    {
        $kost = Kost::all();
        $kost2 = Kost::all();
        $kost3 = Kost::all();

        $luas_kamar = array();
        $jarak_dari_kampus = array();
        $desain_rumah = array();

        $luas_kamar2 = array();
        $jarak_dari_kampus2 = array();
        $desain_rumah2 = array();

        foreach($kost2 as $ko){

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

        $n_luas_kamar = array();
        $n_jarak_dari_kampus = array();
        $n_desain_rumah = array();

        $map1 = array_map(function (
        $luas_kamar_normalisasi,
        $jarak_dari_kampus_normalisasi,
        $desain_rumah_normalisasi
        ){
            $hasil1 = $luas_kamar_normalisasi * 0.667;
            $hasil2 = $jarak_dari_kampus_normalisasi * 0.235;
            $hasil3 = $desain_rumah_normalisasi * 0.091;

            return $hasil1 + $hasil2 + $hasil3;
        },
        $luas_kamar2, $n_luas_kamar,
        $jarak_dari_kampus2, $n_jarak_dari_kampus,
        $desain_rumah2, $n_desain_rumah);

        $total = collect($map1)->sortDesc()->values()->all();

        $data = [
            'kost' => $kost,
            'kost2' => $kost2,
            'kost3' => $kost3,
            'n_luas_kamar' => $luas_kamar2,
            'n_jarak_dari_kampus' => $jarak_dari_kampus2,
            'n_desain_rumah' => $desain_rumah2,
            'total' => $total,
        ];


        return view('dashboard.perhitungan.pemilikkost.index', compact('data'));
    }
}
