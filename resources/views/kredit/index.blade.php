@extends('layout.layout')

@section('title', 'Kalkulator Angsuran Mobil')

@section('content')
<div class="relative isolate px-6 pt-12 lg:px-8 min-h-screen">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-40">
      <div class="text-center">
        <h1 id="main-title" class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Kalkulator Angsuran</h1>
        <p id="subtitle" class="mt-8 text-lg font-medium text-gray-500 sm:text-xl/8">Hitung angsuran mobil Anda dengan mudah dan cepat.</p>
      </div>
      <div id="app" class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <form action="{{ route('kredit.hitung') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="otr" class="block text-sm font-medium text-white">Harga Mobil (OTR):</label>
                <input type="number" name="otr" id="otr" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="dp" class="block text-sm font-medium text-white">Down Payment (DP):</label>
                <input type="number" name="dp" id="dp" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="jangka_waktu" class="block text-sm font-medium text-white">Jangka Waktu (bulan):</label>
                <input type="number" name="jangka_waktu" id="jangka_waktu" required class="w-full px-4 py-2 mt-2 rounded-lg bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 px-4 py-2 rounded-lg font-bold text-white shadow-sm">Hitung Angsuran</button>
        </form>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
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
  });
</script>
@endsection
