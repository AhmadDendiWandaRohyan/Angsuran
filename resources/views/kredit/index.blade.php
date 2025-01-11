@extends('layout.layout')

@section('title', 'Kalkulator Angsuran Mobil')

@section('content')
<div>
      <div class="text-center">
        <h1 id="main-title" class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Kalkulator Angsuran</h1>
        <p id="subtitle" class="mt-8 text-lg font-medium text-gray-500 sm:text-xl/8">Hitung angsuran mobil Anda dengan mudah dan cepat.</p>
      </div>
      <div id="app" class="mt-10 bg-gray-800 p-10 rounded-lg shadow-lg">
        <form action="{{ route('kredit.hitung') }}" method="POST" onsubmit="cleanFormat()">
            @csrf
            <div class="mb-4">
                <label for="otr" class="block text-sm font-medium text-white">Harga Mobil (OTR):</label>
                <input type="text" name="otr" id="otr" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-400" oninput="formatRupiah(this)">
            </div>
            <div class="mb-4">
                <label for="dp" class="block text-sm font-medium text-white">Down Payment (DP):</label>
                <input type="text" name="dp" id="dp" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-400" oninput="formatRupiah(this)">
            </div>
            <div class="mb-6">
                <label for="jangka_waktu" class="block text-sm font-medium text-white">Jangka Waktu (bulan):</label>
                <input type="text" name="jangka_waktu" id="jangka_waktu" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-400" oninput="formatRupiah(this)">
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 px-4 py-2 rounded-lg font-bold text-white shadow-sm">Hitung Angsuran</button>
        </form>
      </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    gsap.from("#main-title", {
      duration: 1.5,
      opacity: 0,
      y: -50,
      ease: "power2.out",
    });

    gsap.from("#app", {
      duration: 1.5,
      y: 100,
      opacity: 0,
      ease: "power2.out",
      delay: 0.5,
    });
    // Skrip format angka (format ribuan dengan titik)
    function formatRupiah(element) {
            let value = element.value.replace(/\./g, '');  // Hilangkan semua titik
            let formatted = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');  // Tambahkan titik setiap 3 angka
            element.value = formatted;  // Tampilkan angka yang sudah diformat
        }
    // Fungsi untuk membersihkan titik sebelum form dikirim
    document.querySelector("form").onsubmit = function() {
        document.querySelectorAll("input[type='text']").forEach(input => {
            input.value = input.value.replace(/\./g, '');
        });
    };
  });

</script>

<script>
  function formatRupiah(element) {
      let value = element.value.replace(/\./g, '');  // Hilangkan semua titik yang sudah ada
      let formatted = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');  // Tambahkan titik setiap 3 angka
      element.value = formatted;  // Tampilkan angka yang sudah diformat
  }
  </script>
@endsection
