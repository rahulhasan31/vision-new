<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Responsive Swiper Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
   

    .custom-swiper-container {
      width: 100%;
      max-width: 600px;
      height: 400px;
      max-height: 400px;
    }

    .custom-swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .custom-swiper-slide img {
      display: block;
      width: 100%;
      height: 400px;
    }
  </style>
</head>

<body class="">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-10 lg:grid-cols-2">
      <div class="flex items-center justify-center -mx-4 lg:pl-8">
        <div class="custom-swiper-container myCustomSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide custom-swiper-slide rounded-full">
              <img 

              class="rounded-lg"
          src="https://media.istockphoto.com/id/1207080656/photo/connection-of-optical-fiber-cable.jpg?s=612x612&w=0&k=20&c=Le1X-Y4V_YODT3vjm_hvdG86zneI8Tj9WoTjhxVAmLg=" />
            </div>
            <div class="swiper-slide custom-swiper-slide">
              <img   class="rounded-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLxi24Foq3wtjSAqzlk31pAqdZeV_7DkBO48ZhVSAqRA&s" />
            </div>
            <div  class="swiper-slide custom-swiper-slide">
              <img 
              class="rounded-lg" src="https://media.istockphoto.com/id/1077605220/photo/fiber-optics-in-blue-close-up-with-ethernet-and-keyboard-background-warm-lens-flare.jpg?s=612x612&w=0&k=20&c=_33iTfsf1BvUFQMNKrIiX0OLDliu8UFFIqrzNhTytzY=" />
            </div>
            <div class="swiper-slide custom-swiper-slide">
              <img   class="rounded-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8byVun_17IhpPr4lVjlevv3OII-qzjiZ0nu0GAFfdTbtuO4_Cx0NEDqVjFU0tYEe1uH0&usqp=CAU" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg xl:pl-20">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-orange-500">
            <svg class="text-teal-900 w-7 h-7" viewBox="0 0 24 24">
                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-miterlimit="10" points=" 8,5 8,1 16,1 16,5" stroke-linejoin="round"></polyline>
                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-miterlimit="10" points="9,15 1,15 1,5 23,5 23,15 15,15" stroke-linejoin="round"></polyline>
                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-miterlimit="10" points="22,18 22,23 2,23 2,18" stroke-linejoin="round"></polyline>
                <rect x="9" y="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-miterlimit="10" width="6" height="4" stroke-linejoin="round"></rect>
            </svg>
        </div>
        <div class="max-w-xl mb-6">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                BRING HOME THE
                <br class="hidden md:block" />
                SUPERIOR QUALITY
                <span class="inline-block text-deep-purple-accent-400">
                    HD BOX FROM JADOO
                </span>
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                BRING HOME THE
                SUPERIOR QUALITY
                HD BOX FROM JADOO
            </p>
        </div>
        <div>
            <a href="/" aria-label=""
                class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                Learn more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path
                        d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".myCustomSwiper", {
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>
