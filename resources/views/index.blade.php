<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- vite仕様 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--BoxIcons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!--Swipper js cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--Swipper js cdn-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


</head>

<body>

    {{-- Header  --}}
    <header class="header">
        <a href="" class="logo">
            LOGO
        </a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="#" style="--i:0;">Home</a></li>
                <li><a href="#" style="--i:1;">About</a></li>
                <li><a href="#" style="--i:2;">Gallery</a></li>
                <li><a href="#" style="--i:3;">Services</a></li>
                <li><a href="#" style="--i:4;">Contact</a></li>
            </ul>
        
        </nav>
    </header>
    {{-- Header --}}
   
    {{-- SWIPER JS START --}}
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                {{-- 600px以下で画像を切り替えている --}}
                <picture>
                    <source media="(max-width: 1050px)" srcset="{{ asset('storage/images/img01.jpg') }}" />
                    <source media="(min-width: 1051px)" srcset="{{ asset('storage/images/img01.jpg') }}" />
                    <img src="{{ asset('storage/images/img01.jpg') }}" alt="" />
                </picture>
                {{-- Swipper TextContent Start --}}
                <div class="swiper-catch">
                    <div class="swiper-catch-inner">
                        <h1>Heading 01</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                        </p>
                        <p>
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text
                        </p>
                        <p>ever since the 1500s,</p>
                    </div>
                </div>
                {{-- Swipper TextContent End --}}
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('storage/images/img02.jpg') }}">
                {{-- Swipper TextContent Start --}}
                <div class="swiper-catch">
                    <div class="swiper-catch-inner">
                        <h1>Heading 01</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                        </p>
                        <p>
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text
                        </p>
                        <p>ever since the 1500s,</p>
                    </div>
                </div>
                {{-- Swipper TextContent End --}}
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('storage/images/img03.jpg') }}">
                {{-- Swipper TextContent Start --}}
                <div class="swiper-catch">
                    <div class="swiper-catch-inner">
                        <h1>Heading 01</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                        </p>
                        <p>
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text
                        </p>
                        <p>ever since the 1500s,</p>
                    </div>
                </div>
                {{-- Swipper TextContent End --}}
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script type="module">
        // import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'
        var mySwiper = new Swiper('.swiper-container', {
            loop: true, //ループ
            effect: 'fade', //フェード
            autoplay: { //自動再生
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            speed: 2000, // ２秒かけながら次の画像へ移動

        })
    </script>

</body>

</html>
