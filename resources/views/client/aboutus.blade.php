@extends('userlayout.master')
@section('content')
    <div class="wrapper">

        @include('client.header')


        <div class="body-con d-flex" style="width: 100%; border-radius: 0; box-shadow: none; padding: 5%">
            <div style="width: 100%; border: 2px solid #be9034; padding: 5%">
                <div class="center-heading" style="font-size: 26px; font-weight: bold">
                    Aims &amp; Objectives of INM
                </div>
                <div class="center-heading">
                    <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                        style="height: 10px; width: 200px" />
                </div>
                <br />
                <br />
                <div class="center-heading" style="text-align: justify;">

                    <div style="text-align: justify;">

                        <div class="d-flex">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Helping Non-Muslims to know Islam.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mt-2">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Helping Muslims to convey the message of Islam to
                                    Non-Muslims.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mt-2">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Presenting Islam through its authentic sources.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mt-2">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Presenting Islam with positive, simple, brief, and new methods.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Presenting Islam in 20 international languages.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <img src="<?= URL::asset('user_assets/images/icons/check-mark.png') ?>" alt=""
                                style="height: 24px; width: 24px" />
                            <div>
                                <p class="ms-4 letter" style="font-size: 20px; font-weight: 500; color: black">
                                    Printing booklets to distribute among Non-Muslims.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= URL::asset('user_assets/js/jquery-3.6.0.min.js') ?>"></script>
        <script src={{ URL::asset('user_assets/js/mobile-nav.js') }}></script>

    </div>
@endsection
