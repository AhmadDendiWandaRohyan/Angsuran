<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Angsuran Mobil</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@3.2.37/dist/vue.global.js"></script>
</head>
<body class="bg-gray-900 text-white flex justify-center items-center min-h-screen">
    <div id="app" x-data="{ otr: '', dp: '', jangka_waktu: '', angsuran: null }" class="w-full max-w-lg p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 animate-bounce">Kalkulator Angsuran Mobil</h1>
        <form action="{{ route('kredit.hitung') }}" method="POST">
            @csrf
            <label for="otr" class="block text-sm font-medium">Harga Mobil (OTR):</label>
            <input type="number" name="otr" id="otr" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
        
            <label for="dp" class="block text-sm font-medium">Down Payment (DP):</label>
            <input type="number" name="dp" id="dp" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
        
            <label for="jangka_waktu" class="block text-sm font-medium">Jangka Waktu (bulan):</label>
            <input type="number" name="jangka_waktu" id="jangka_waktu" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
        
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 px-4 py-2 mt-4 rounded-lg font-bold">Hitung Angsuran</button>
        </form>

        
    </div>

    <script>
        // GSAP Animasi masuk
        gsap.from('#app', { duration: 1.5, y: -100, opacity: 0, ease: 'power2.out' });
    </script>
</body>
</html>
