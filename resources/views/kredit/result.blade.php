<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex justify-center items-center min-h-screen">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg max-w-lg w-full">
        <h1 class="text-3xl font-bold mb-6 text-center">Hasil Perhitungan Angsuran</h1>
        
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-400">Harga Mobil (OTR):</span>
                <span class="font-semibold">Rp {{ number_format($otr, 2, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Down Payment (DP):</span>
                <span class="font-semibold">Rp {{ number_format($dp, 2, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Pokok Utang:</span>
                <span class="font-semibold">Rp {{ number_format($pokokUtang, 2, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Jangka Waktu:</span>
                <span class="font-semibold">{{ $jangkaWaktu }} bulan</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Bunga:</span>
                <span class="font-semibold">{{ $bunga }}%</span>
            </div>
            <div class="flex justify-between text-lg">
                <span class="text-gray-300">Angsuran Bulanan:</span>
                <span class="text-green-400 font-bold">Rp {{ number_format($angsuranBulanan, 2, ',', '.') }}</span>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="/" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold">Hitung Ulang</a>
        </div>
    </div>
</body>
</html>
