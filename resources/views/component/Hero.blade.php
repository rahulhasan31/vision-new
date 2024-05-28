


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            background: #eee;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            body {
                font-size: 12px;
            }

            .swiper-slide {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            
            <img src="https://i.ibb.co/7KGWKQ3/Black-Orange-Modern-Food-Promotion-Banner.gif" alt="Banner 1">
        </div>
        <div class="swiper-slide">
            <img src="https://i.ibb.co/6BnHkVP/Black-White-Simple-Opening-Banner-1.gif" alt="Banner 2">
        </div>
        <div class="swiper-slide">
            <img src="https://i.ibb.co/2tQrZ6J/Black-White-Simple-Opening-Banner.gif" alt="Banner 3">
        </div>
        <div class="swiper-slide">
            <img src="https://i.ibb.co/RvRPMjg/Dark-Grey-and-Orange-Modern-Simple-Food-Promotion-Banner.gif" alt="Banner 4">
        </div>
        <div class="swiper-slide">
            <img src="https://i.ibb.co/BLLKyxC/Black-White-Simple-Opening-Banner-3.gif" alt="Banner 5">
        </div>
       
    </div>

    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>

</html>
