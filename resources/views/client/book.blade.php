@extends('userlayout.master')
@section('content')
    <link rel="stylesheet" href="<?= URL::asset('user_assets/swiper/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" href="<?= URL::asset('user_assets/swiper/style.css') ?>">

    <body>

        <style>
            .book-slider {
                height: 100%;
                align-items: center;
                display: flex;
            }

            @media screen and (min-height: 800px) {
                .book-container {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    height: 100vh;
                }
            }

            .swiper-button-next,
            .swiper-button-prev {
                top: auto !important;
            }

            @media screen and (max-width:500px) {
                .book-container {
                    height: auto !important;
                }

                .mob-body {
                    display: flex !important;
                }

                .web-body {
                    display: none !important;
                }
            }

            @media screen and (min-width:501px) {
                .mob-body {
                    display: none !important;
                }

                .web-body {
                    display: flex !important;
                }
            }
        </style>

        <div class="wrapper book-container">

            @include('client.header')

            <style>
                .slice-card {
                    border-radius: 0;
                    padding: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .slice-bood {
                    width: 80%;
                    box-shadow: 0px -1px 14px rgb(0 0 0);
                    border: 1px solid white;
                }
            </style>

            <div class="web-body body-con slide-container swiper book-slider">
                <div class="slide-content" style="display: flex; align-items: center; justify-content: center;">
                    <div id="books-append" class="card-wrapper swiper-wrapper">
                        <?php $i= 0; foreach($book_list as $item){ $i = rand(1,20);?>
                        <div class="card swiper-slide border-0 slice-card" style="background: none">
                            <img src='<?= URL::asset($item->book_thumbnail) ?>' alt="" class="slice-bood"
                                onclick="readPDF('<?= URL::asset($item->link) ?>')" />

                            <div id="tool<?= $i ?>" class="invisible d-flex mt-2" onmouseover="showTool(event,<?= $i ?>)"
                                onmouseleave="mouseleave(event,<?= $i ?>)" style="border-radius: 10px;">
                                <p class="ps-2 pe-2 mb-1"
                                    style="background: #F2CA5C; color: white; cursor: pointer; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"
                                    onclick="readPDF('<?= URL::asset($item->link) ?>')">Read</p>
                                <p class="ps-2 pe-2 mb-1" style="background: #F8D77E; color: white; cursor: pointer"
                                    onclick="downloadPDF('<?= URL::asset($item->link) ?>')">
                                    Download</p>
                                <p class="ps-2 pe-2 mb-1"
                                    style="background: #FCE3A5; color: white; cursor: pointer; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"
                                    onclick="share('<?= URL::asset($item->link) ?>')">Share</p>
                            </div>
                            <img src="<?= URL::asset('user_assets/images/icons/share1.png') ?>" alt=""
                                style="width: 30px;" onmouseover="showTool(event,<?= $i ?>)"
                                onmouseleave="mouseleave(event,<?= $i ?>)" />
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
            </div>

            <div class="mob-body body-con">
                <div class="container">
                    <div class="row" id="mob-books-append" style="justify-content: center;">
                        <?php $i= 0; foreach($book_list as $item){ $i = rand(1,20);?>
                        <div class="card swiper-slide border-0 slice-card" style="background: none">
                            <img src='<?= URL::asset($item->book_thumbnail) ?>' alt="" class="slice-bood"
                                onclick="readPDF('<?= URL::asset($item->link) ?>')" />

                            <div id="tool<?= $i ?>" class="invisible d-flex mt-2" onmouseover="showTool(event,<?= $i ?>)"
                                onmouseleave="mouseleave(event,<?= $i ?>)" style="border-radius: 10px;">
                                <p class="ps-2 pe-2 mb-1"
                                    style="background: #F2CA5C; color: white; cursor: pointer; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"
                                    onclick="readPDF('<?= URL::asset($item->link) ?>')">Read</p>
                                <p class="ps-2 pe-2 mb-1" style="background: #F8D77E; color: white; cursor: pointer"
                                    onclick="downloadPDF('<?= URL::asset($item->link) ?>')">
                                    Download</p>
                                <p class="ps-2 pe-2 mb-1"
                                    style="background: #FCE3A5; color: white; cursor: pointer; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"
                                    onclick="share('<?= URL::asset($item->link) ?>')">Share</p>
                            </div>
                            <img src="<?= URL::asset('user_assets/images/icons/share1.png') ?>" alt=""
                                style="width: 30px;" onmouseover="showTool(event,<?= $i ?>)"
                                onmouseleave="mouseleave(event,<?= $i ?>)" />
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="bg-primary">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3 ps-5 pe-5">
                        <div class="d-flex justify-center flex-column">
                            <p class="text-white mt-3 mb-2">Subscribe to our mailing list</p>
                            <div class="w-100 d-flex justify-center align-items-center flex-column bg-white">
                                <input class="text-black m-0 p-2 w-100" placeholder="Email" type="email"
                                    style="outline: none; border:none; text-align:center;" />
                            </div>
                            <div class="w-100 d-flex justify-center align-items-center flex-column mt-2 bg-primary-light"
                                style="cursor:pointer">
                                <p class="text-white m-0 p-2">Subscribe</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex justify-center align-items-center flex-column">
                            <div class="d-flex justify-center align-items-center flex-row mt-4  ">
                                <a href="index" class="text-white">Home</a>
                                <p class="ms-4 me-4 m-0">|</p>
                                <a href="aboutus" class="text-white">About us</a>
                                <p class="ms-4 me-4 m-0">|</p>
                                <a class="text-white">Contact us</a>
                            </div>
                            <p class="text-white mt-2 m-2" style="text-align: center">All Rights Reserved -
                                IslamForNonMuslims © 2023</p>
                            <div class="d-flex justify-center align-items-center flex-row mt-3 mb-3 ">
                                <a href=""><img
                                        src="<?= URL::asset('user_assets/images/socialicons/whatsapp.png') ?>"
                                        alt="" style="height: 24px; width: 24px" /></a>
                                <p class="ms-4 me-4"></p>
                                <a href=""><img
                                        src="<?= URL::asset('user_assets/images/socialicons/instagram.png') ?>"
                                        alt="" style="height: 24px; width: 24px" /></a>
                                <p class="ms-4 me-4"></p>
                                <a href=""><img
                                        src="<?= URL::asset('user_assets/images/socialicons/facebook.png') ?>"
                                        alt="" style="height: 24px; width: 24px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?= URL::asset('user_assets/images/background/circle.png') ?>" alt="" class="circle-logo" />

        <script>
            function readPDF(path) {

                var read = "https://docs.google.com/gview?embedded=true&url=" + path
                // var read = "https://docs.google.com/viewer?url=" + path
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
        <script src="<?= URL::asset('user_assets/swiper/script.js') ?>"></script>
        <script src="<?= URL::asset('user_assets/js/jquery-3.6.0.min.js') ?>"></script>
    </body>
@endsection
