@extends('layout.layout')

@section('title', 'Home Page')

@section('content')
<div class="relative isolate px-6 pt-12 lg:px-8 min-h-screen">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-40">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div id="contact-us" class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Hubungi kami . <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 id="main-title" class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Angsuran Cepat</h1>
        <p id="subtitle" class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8"></p>
        <div id="buttons" class="mt-10 flex items-center justify-center gap-x-6 hidden">
          <a href="angsuransi" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
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

    gsap.from("#subtitle", {
      duration: 1.5,
      opacity: 0,
      y: 50,
      ease: "power2.out",
      delay: 0.5,
    });

    const subtitleText = "Website ini dibuat untuk anda yang ingin melakukan kredit mobil.";
    const subtitleElement = document.getElementById("subtitle");

    function typeWriter(text, element, delay = 100, callback) {
      let index = 0;
      function type() {
        if (index < text.length) {
          element.innerHTML += text.charAt(index);
          index++;
          setTimeout(type, delay);
        } else if (callback) {
          callback();
        }
      }
      type();
    }

    typeWriter(subtitleText, subtitleElement, 50, () => {
      document.getElementById("buttons").classList.remove("hidden");
      gsap.from("#buttons a", {
        duration: 1,
        opacity: 0,
        scale: 0.8,
        ease: "back.out(1.7)",
        stagger: 0.3,
      });
    });
  });
</script>
@endsection
