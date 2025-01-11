@extends('layout.layout')

@section('title', 'Home Page')

@section('content')
<div>
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div id="contact-us" class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Hubungi kami . <a href="https://wa.me/082136710951" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>WA <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 id="main-title" class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Hitung Angsuran</h1>
        <p id="subtitle" class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8"></p>
        <div id="buttons" class="mt-10 flex items-center justify-center gap-x-6 hidden">
          <a href="angsuransi" class="rounded-md bg-black px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">&rarr;</span></a>
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
