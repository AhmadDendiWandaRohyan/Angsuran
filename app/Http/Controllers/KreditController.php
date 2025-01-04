<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index()
    {
        return view('kredit.index');
    }

    public function hitung(Request $request)
    {
        $otr = $request->input('otr'); // Harga mobil (OTR)
        $dp = $request->input('dp'); // Down Payment (DP)
        $jangkaWaktu = $request->input('jangka_waktu'); // Jangka waktu dalam bulan

        // Hitung pokok utang
        $pokokUtang = $otr - $dp;

        // Tentukan bunga berdasarkan jangka waktu
        if ($jangkaWaktu <= 12) {
            $bunga = 0.12; // 12%
        } elseif ($jangkaWaktu > 12 && $jangkaWaktu <= 24) {
            $bunga = 0.14; // 14%
        } else {
            $bunga = 0.165; // 16,5%
        }

        // Hitung angsuran per bulan
        $angsuranBulanan = ($pokokUtang + ($pokokUtang * $bunga)) / $jangkaWaktu;

        // Kirim hasil ke view
        return view('kredit.result', [
            'otr' => $otr,
            'dp' => $dp,
            'pokokUtang' => $pokokUtang,
            'jangkaWaktu' => $jangkaWaktu,
            'bunga' => $bunga * 100, // Persentase bunga
            'angsuranBulanan' => $angsuranBulanan,
        ]);
    }
}
