@extends('userlayout.master')
@section('content')
    <link rel="stylesheet" href="<?= URL::asset('user_assets/swiper/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" href="<?= URL::asset('user_assets/swiper/style.css') ?>">
    <link rel="stylesheet" href="<?= URL::asset('user_assets/css/slider.css') ?>">

    <style type="text/css">
        .bg-primary {
            background-color: #c2912a !important;
        }

        #navbar_main {
            display: none;
        }

        .container-fluid {
            padding: 0%;
        }

        li.nav-item {
            padding-left: 10px;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }

        @media all and (max-width: 700px) {

            #navbar_main {
                display: block;
            }
        }

        @media all and (max-width: 991px) {
            .offcanvas-header {
                display: block;
            }

            .mobile-offcanvas {
                visibility: hidden;
                transform: translateX(-100%);
                border-radius: 0;
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                z-index: 1200;
                width: 80%;
                overflow-y: scroll;
                overflow-x: hidden;
                transition: visibility .3s ease-in-out, transform .3s ease-in-out;
            }

            .mobile-offcanvas.show {
                visibility: visible;
                transform: translateX(0);
            }

            .mobile-offcanvas .container,
            .mobile-offcanvas .container-fluid {
                display: block;
            }
        }
    </style>

    <div class="wrapper"
        style="background-image: url('<?= URL::asset('user_assets/images/background/wallpaper.jpg') ?>'); background-size: cover;">

        <span class="screen-darken"></span>

        <header id="header" class="header light " style="position: fixed; width: 100%; top: 0%">
            <div class="desktop-nav" style="height: 70px; overflow: hidden; justify-content: space-between">
                <ul class="" style="padding: 0%; margin:0%; display:flex">
                    <a class="header-log">
                        <div style="padding-right: 10%">
                            <img src="<?= URL::asset('user_assets/images/icons/logo.png') ?>" alt=""
                                style="width: 200px; height: 50px" />
                        </div>
                        <div class="rotate-side"></div>
                    </a>
                </ul>

                <div style="display: flex; width: 100%; align-items: center; justify-content: flex-end;">
                    <div id="book" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/open_book.png ') ?>" alt="" />
                        <a style="color: white">Read</a>
                    </div>
                    <div id="video" class="nav-items nav-conten">
                        <img src="<?= URL::asset('/user_assets/images/icons/play-button.png') ?>" alt="" />
                        <a style="color: white">Watch</a>
                    </div>
                    <div id="posts" class="nav-items nav-conten">
                        <img src="<?= URL::asset('/user_assets/images/icons/posts.png') ?>" alt="" />
                        <a style="color: white">Posts</a>
                    </div>

                    <div id="inspire" class="nav-items nav-conten">
                        <img src="<?= URL::asset('/user_assets/images/icons/letter.png') ?>" alt="" />
                        <a style="color: white">Inspire</a>
                    </div>

                    <div id="share" onclick="sharethis()" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/share.png') ?>" alt="" />
                        <a style="color: white; display:flex"> Share <span class="d-sm-none d-md-block ps-1"
                                style="font-family: serif"> Website<span> </a>
                    </div>

                </div>
            </div>

            <div class="mobile-nav" style=" width: 100%; align-items: center; justify-content: center; flex-wrap: wrap; ">

                <a class="bg-white"
                    style="display: flex; width: 100%; align-items: center; justify-content: center; padding: 2%; ">
                    <img src="<?= URL::asset('user_assets/images/icons/logo.png') ?>" alt=""
                        style="width: 200px; height: 50px" />
                </a>

                <div style=" display: flex; width: 100%; align-items: center; justify-content: space-evenly;">
                    <div id="book1" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/open_book.png') ?>" alt="" />
                        <a style="color: white">Read</a>
                    </div>
                    <div id="video1" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/play-button.png') ?>" alt="" />
                        <a style="color: white">Watch</a>
                    </div>
                    <div id="posts1" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/posts.png') ?>" alt="" />
                        <a style="color: white">Post</a>
                    </div>
                    <div id="inspireMob" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/letter.png') ?>" alt="" />
                        <a style="color: white">Inspire</a>
                    </div>
                    <div id="share1" class="nav-items nav-conten">
                        <img src="<?= URL::asset('user_assets/images/icons/share.png') ?>" alt="" />
                        <a style="color: white">Share</a>
                    </div>
                </div>
            </div>

            <script>
                function sharethis() {
                    var link = 'https://qcodesinfotech.com/inm/';
                    window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
                }
            </script>
        </header>

        <button id="mobile-btn-1" data-trigger="navbar_main" class="d-none" type="button"></button>

        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="offcanvas-header"><button class="btn-close float-end"></button></div>
                <ul class="navbar-nav">
                    <li class="nav-item" id="mob-home" style="display:flex"> <a class="nav-link" id="mob-home-text">Home
                        </a> </li>
                    <li class="nav-item" id="mob-aboutus"><a class="nav-link" id="mob-aboutus-text"> About Us </a></li>
                    <li class="nav-item" id="mob-book"><a class="nav-link" id="mob-book-text"> Books </a></li>
                    <li class="nav-item" id="mob-video"><a class="nav-link" id="mob-video-text"> Videos </a></li>
                    <li class="nav-item" id="mob-posts"><a class="nav-link" id="mob-posts-text"> Posts </a></li>
                    <li class="nav-item" id="mob-article"><a class="nav-link" id="mob-article-text"> Articles </a></li>
                </ul>
            </div>
        </nav>

        <style>
            .swiper-slide-active .slide__overlay,
            .swiper-slide-active .slide__text {
                opacity: 1;
                transform: translateX(0);
            }
        </style>

        <div class="body-con website-slider" style="display: flex; align-items: center; justify-content: center;">
            <div class="mt-10 slide-container home-slider swiper">
                <div class="slide-content">
                    <div id="web-slider" class="card-wrapper swiper-wrapper">
                        @foreach ($banner as $item)
                            <div class="card swiper-slide border-0 slice-card">
                                <img src="<?= URL::asset($item->banner_image) ?>" alt="" class="slice-bood" />
                                <div class="slide__content">
                                    <svg class="slide__overlay" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 990 1080"
                                        style="enable-background:new 0 0 990 1080;" xml:space="preserve">
                                        <g>
                                            <rect x="280" y="630" width="500" height="450"
                                                style="fill:rgb(194 145 42 / 80%);" />
                                            <text x="325" y="830" font-size="50" fill="white"
                                                style="font-family: 'Poppins', sans-serif;font-weight: bold;">ISLAM FOR</text>
                                            <text x="325" y="930" font-size="50" fill="white"
                                                style="font-family: 'Poppins', sans-serif;font-weight: bold;">NON MUSLIMS</text>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="body-con mobile-slider" style="display: flex; align-items: center; justify-content: center;">
            <div class="mt-10 slide-container home-slider swiper">
                <div class="slide-content">
                    <div id="mob-slider" class="card-wrapper swiper-wrapper">
                        @foreach ($banner as $item)
                            <div class="card swiper-slide border-0 slice-card">
                                <img src="<?= URL::asset($item->banner_image) ?>" alt=""
                                    class="mob-slider-image" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="home-body mt-0">
            <div style="display:flex; flex-direction:row">
                <div class="home-card-cont">
                    <img src="<?= URL::asset('user_assets/images/home/leftlogo.png') ?>" alt=""
                        class="small-img-log" style="width:70px; z-index:1" />
                    <div class="home-card" style="flex-direction: column;">
                        <a class="homefont" href="nonmuslim"> I am a non-Muslim </a>
                        <img src="<?= URL::asset('user_assets/images/icons/down-arrow.png') ?>" alt=""
                            class="home-bottom-arrow" />
                    </div>
                </div>

                <div class="home-card-cont">
                    <img src="<?= URL::asset('user_assets/images/home/rightlogo.png') ?>" alt=""
                        class="small-img-log" style="width:70px;  z-index:1" />
                    <div class="home-card" style="flex-direction: column;">
                        <a class="homefont" href="muslimhome"> I am a Muslim </a>
                        <img src="<?= URL::asset('user_assets/images/icons/down-arrow.png') ?>" alt=""
                            class="home-bottom-arrow" />
                    </div>
                </div>

            </div>
        </div>

        <style>
            @media screen and (min-width: 654px) and (min-height : 600px) {
                .home-body {
                    position: absolute !important;
                    bottom: 0;
                }
            }

            @media screen and (max-width: 868px) {
                .slice-bood {
                    height: 200px !important;
                }
            }

            @media screen and (max-width:568px) {

                #web-slider,
                .website-slider {
                    display: none !important;
                }

                #mob-slider,
                .mobile-slider {
                    display: flex !important;
                }

                .mob-slider-image {
                    width: 100%;
                    box-shadow: 0px -1px 14px rgb(0 0 0);
                    border: 1px solid white;
                    height: 40vh !important;
                }

                .slice-bood {
                    height: 40vh !important;
                }

                .body-con {
                    margin-top: 119px !important;
                }
                
                .slide-content {
                    margin: 0px !important;
                }
            }

            @media screen and (min-width:569px) {

                #web-slider,
                .website-slider {
                    display: flex !important;
                }

                #mob-slider,
                .mobile-slider {
                    display: none !important;
                }
            }

            .slice-card {

                border-radius: 0;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .slice-bood {
                width: 100%;
                height: 75vh;
                box-shadow: 0px -1px 14px rgb(0 0 0);
                border: 1px solid white;
            }

            .slide-container.home-slider {
                margin: 0;
                padding: 0;
            }

            .home-body {
                position: initial;
                height: auto;
                margin-top: 20px;
            }

            .card {
                background-color: transparent;
            }
        </style>

        <script>
            function readPDF(path) {

                var read = "https://docs.google.com/gview?embedded=true&url=" + path
                window.open(read, '_blank');
            }

            function downloadPDF(path) {
                const url = path;
                const link = document.createElement("a");
                link.setAttribute("href", url);
                link.setAttribute("download", "");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        </script>

        <script>
            function showTool(event, index) {
                const links = document.querySelectorAll("#tool" + index);
                links.forEach(link => {
                    console.log(link)

                    link.classList.remove("invisible");
                });

                links.forEach(link => {
                    link.classList.add("visible");
                });
            }

            function mouseleave(event, index) {
                const links = document.querySelectorAll("#tool" + index);
                links.forEach(link => {
                    link.classList.add("invisible");
                });

                links.forEach(link => {
                    link.classList.remove("visible");
                });
            }

            function share(link) {
                window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
            }
        </script>

        <script src="<?= URL::asset('user_assets/swiper/swiper-bundle.min.js') ?>"></script>
        <script src="<?= URL::asset('user_assets/swiper/script1.js') ?>"></script>
        <script src="<?= URL::asset('user_assets/js/jquery-3.6.0.min.js') ?>"></script>
        <script src={{ URL::asset('user_assets/js/mobile-nav.js') }}></script>
    </div>
@endsection
