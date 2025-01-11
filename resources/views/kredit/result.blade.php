@extends('layout.layout')

@section('title', 'Kalkulator Angsuran Mobil')

@section('content')
<>

        <!-- Box Utama -->
        <div class="bg-gradient-to-r from-gray-800 via-gray-900 to-black p-8 rounded-lg shadow-xl">
            <h1 class="text-4xl font-extrabold text-center text-white mb-8">Hasil Perhitungan Angsuran</h1>
            
            <div class="space-y-6">
                <!-- Harga Mobil -->
                <div class="flex justify-between items-center border-b border-gray-700 pb-2">
                    <span class="text-gray-400">Harga Mobil (OTR):</span>
                    <span class="text-lg font-semibold text-gray-100">Rp {{ number_format($otr, 2, ',', '.') }}</span>
                </div>
                <!-- Down Payment -->
                <div class="flex justify-between items-center border-b border-gray-700 pb-2">
                    <span class="text-gray-400">Down Payment (DP):</span>
                    <span class="text-lg font-semibold text-gray-100">Rp {{ number_format($dp, 2, ',', '.') }}</span>
                </div>
                <!-- Pokok Utang -->
                <div class="flex justify-between items-center border-b border-gray-700 pb-2">
                    <span class="text-gray-400">Pokok Utang:</span>
                    <span class="text-lg font-semibold text-gray-100">Rp {{ number_format($pokokUtang, 2, ',', '.') }}</span>
                </div>
                <!-- Jangka Waktu -->
                <div class="flex justify-between items-center border-b border-gray-700 pb-2">
                    <span class="text-gray-400">Jangka Waktu:</span>
                    <span class="text-lg font-semibold text-gray-100">{{ $jangkaWaktu }} bulan</span>
                </div>
                <!-- Bunga -->
                <div class="flex justify-between items-center border-b border-gray-700 pb-2">
                    <span class="text-gray-400">Bunga:</span>
                    <span class="text-lg font-semibold text-gray-100">{{ $bunga }}%</span>
                </div>
                <!-- Angsuran Bulanan -->
                <div class="flex justify-between items-center text-xl">
                    <span class="text-gray-300 font-medium">Angsuran Bulanan:</span>
                    <span class="text-green-400 font-bold">Rp {{ number_format($angsuranBulanan, 2, ',', '.') }}</span>
                </div>
            </div>

            <!-- Tombol Hitung Ulang -->
            <div class="mt-10 text-center">
                <a href="/angsuransi" class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-700 hover:to-blue-900 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-lg transition-all duration-300">
                    Hitung Ulang
                </a>
            </div>
        </div>
</div>
@endsection
