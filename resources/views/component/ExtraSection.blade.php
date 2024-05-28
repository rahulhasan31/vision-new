<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Responsive Swiper Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-custom {
            width: 540px;
            height: 320px;
        }

        .swiper-slide-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
        }

        .swiper-slide-custom:nth-child(1n) {
            
        }

        .swiper-slide-custom:nth-child(2n) {
          
        }

        .swiper-slide-custom:nth-child(3n) {
           
        }

        .swiper-slide-custom:nth-child(4n) {
           
        }

       
    </style>
</head>

<body class="bg-orange-50">
    <div  class=" px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-orange-400 text-white">
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
            <div class="flex items-center justify-center -mx-4 lg:pl-8">
              <div class="swiper swiper-custom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-custom"><img src="https://isotechgh.com/wp-content/uploads/2020/02/Broadband-Internet.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://insidetelecom.com/wp-content/uploads/2021/10/optical-fiber-internet.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://www.acc-chad.com/bibliotheque/redaction/redaction6580780.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://mlgv8bgurweu.i.optimole.com/w:300/h:188/q:mauto/f:best/https://estreamnetworks.net/elitewifi/wp-content/uploads/2024/01/b5de4f473dcf200a8ba49a0701125b94.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://en.banglatribune.com/contents/cache/images/800x0x1/uploads/media/2017/09/17/73a5571765cb7440d05f5c873fcf366c-59be19c248028.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://isotechgh.com/wp-content/uploads/2020/02/Broadband-Internet.jpg" alt="" srcset="">
                    </div>
                    <div class="swiper-slide swiper-slide-custom"><img src="https://etimg.etb2bimg.com/thumb/msid-81943229,width-1200,height-900,resizemode-4/.jpg" alt="" srcset="">
                    </div>
                   
                </div>
            </div>
            </div>
        </div>
    </div>

    

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-custom", {
            effect: "cards",
            grabCursor: true,
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
