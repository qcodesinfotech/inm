@extends('userlayout.master')
@section('content')

    <body>
        <div class="wrapper">

            @include('client.header')

            <div class="d-flex body-con">
                <div style="width: 100%; padding: 5%">
                    <div class="center-heading" style="font-size: 26px; font-weight: bold">
                        Inspire
                    </div>
                    <div class="center-heading">
                        <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                            style="height: 10px; width: 200px" />
                    </div>
                    <br />
                    <br />
                    <div class="center-heading" style="text-align: justify;     text-transform: math-auto;">

                        <div style="text-align: justify;">
                            <style>
                                @media screen and (max-width:568px) {
                                    .quote-con-1 {
                                        font-size: 16px !important;
                                        margin-right: 9% !important;
                                    }

                                    .quote-con-1 p::before {
                                        margin: -1.8rem 0 0 -3rem;
                                    }

                                    .quote-img {
                                        width: 18px !important;
                                    }
                                }

                                .quote-con-1 {
                                    color: rgba(52, 43, 32, 0.876);
                                    font-family: Tahoma, sans-serif;
                                    font-size: 25px;
                                    width: 75%;
                                    margin: 0 auto;
                                    margin-top: 2%;
                                    margin-bottom: 8%;
                                    text-transform: none !important;
                                }

                                .quote-con-1 h1 {
                                    font-size: 4rem;
                                }

                                .quote-con-1 p {
                                    font-style: italic;
                                    margin-bottom: 0;
                                }

                                .quote-con-1 p::before,
                                .quote-con-1 p::after {
                                    content: "“";
                                    font-family: Georgia;
                                    font-size: 5rem;
                                    margin: -2rem 0 0 -3rem;
                                    position: absolute;
                                    opacity: 1;
                                    color: #c2912a;
                                }

                                .quote-con-1 p::after {
                                    content: "”";
                                    margin: -1rem -4rem 0 0;
                                }

                                .quote-img {
                                    width: 25px;
                                    margin-right: 3px
                                }
                            </style>

                            <div class="quote-container" id="quotes">
                                @foreach ($inspire as $item)
                                    <blockquote class="quote-con-1">
                                        <p><strong>
                                                <img src="<?= URL::asset($item['img']) ?>" class="quote-img" />
                                                {{ $item['quote'] }}
                                            </strong> </p>
                                    </blockquote>
                                @endforeach
                            </div>
                        </div>
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
                                <a href="{{ route('/') }}" class="text-white">Home</a>
                                <p class="ms-4 me-4 m-0">|</p>
                                <a href="aboutus" class="text-white">About us</a>
                                <p class="ms-4 me-4 m-0">|</p>
                                <a  class="text-white">Contact us</a>
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


    </body>
@endsection
