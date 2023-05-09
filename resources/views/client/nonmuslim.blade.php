@extends('userlayout.master')
@section('content')

    <body>
        <style>
            .navbar {
                position: absolute !important;
            }

            @media screen and (min-height: 900px) {
                .non-muslim-container {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    height: 100vh;
                }
            }
            
        </style>

        <div class="wrapper non-muslim-container">
            @include('client.header')

            <style>
                .inputform {
                    border: none;
                    width: 85%;
                    padding-left: 5%;
                    outline: none;
                }
            </style>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


            @if (session()->has('message'))
                <div class="alert alert-success" style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('popupmessage'))
                <script>
                    $(document).ready(() => {

                        $("#modalbtn").click();
                    })
                </script>
            @endif
            @if (session()->has('warning'))
                <div class="alert alert-danger" style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                    {{ session()->get('warning') }}
                </div>
            @endif

            <button id="modalbtn" data-target="#myModal" data-toggle="modal" class="d-none"></button>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <h4 class="modal-title w-100">Form submitted Successfully.</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Thank you for submitting your details. You will be receiving a WhatsApp message with the
                                links to download books and videos on different topics on Islam.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" onclick="homeRuth()"
                                data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="body-con">
                <div class="divide-con">
                    <div class="m-card-con mb-5">
                        <div class="center-heading">I am a non Muslim</div>
                        <div class="center-heading">
                            <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                                style="height: 10px; width: 200px" />
                        </div>
                        <div class="m-card-desc">
                            <a>Thank you for your interest to know more about Islam.</a>
                            <br />
                            <a>We request you to fill out this form and you
                                will receive our books and videos on different, yet important
                                topics on Islam through your contact details.</a>
                        </div>
                    </div>

                    <div class="m-card-con mb-5">
                        <div>
                            <div class="center-heading">My Details</div>
                            <div class="center-heading">
                                <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                                    style="height: 10px; width: 200px" />
                            </div>
                            <br />

                            <form action="addMuslim" method="post">
                                @csrf
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/user.png') ?>" alt=""
                                            class="input-img-icon" />
                                    </div>
                                    <input value="" name="name" placeholder="Name" id=""
                                        class="input-style" required />
                                </div>
                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/gender.png') ?>" alt=""
                                            class="input-img-icon" />
                                    </div>
                                    <input value="" name="gender" placeholder="Gender" class="input-style"
                                        required />
                                </div>

                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/nationality.png') ?>"
                                            alt="" class="input-img-icon" />
                                    </div>
                                    <input value="" name="nationality" placeholder="Nationality" class="input-style"
                                        required />
                                </div>

                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/religion.png') ?>" alt=""
                                            class="input-img-icon" />
                                    </div>
                                    <input value="" name="religion" placeholder="Religion" class="input-style"
                                        required />
                                </div>

                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/email.png') ?>" alt=""
                                            class="input-img-icon" />
                                    </div>
                                    <input type="email" value="" name="email" placeholder="Email(Optional)"
                                        class="input-style" />
                                </div>

                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/whatsapp.png') ?>" alt=""
                                            class="input-img-icon" />
                                    </div>
                                    <div class="d-flex">
                                        <select name="phone_code" style="border-right: 1px solid gray; width: 50px;"
                                            class="input-style" id="country_code">
                                        </select>
                                        <input value="" maxlength="13" name="phone_number"
                                            placeholder="Whatsapp Number" class="input-style" required />
                                    </div>
                                </div>

                                <br />
                                <div class="input-card">
                                    <div class="input-icon-card">
                                        <img src="<?= URL::asset('user_assets/images/icons/language.png') ?>"
                                            alt="" class="input-img-icon" />
                                    </div>
                                    <input value="" name="language" placeholder="Preferred Language"
                                        class="input-style" required />
                                </div>
                                <input type="hidden" value="1" name="status" class="inputform" />

                        </div>

                        <br />
                        <div class="center-heading mt-5">
                            <button type="submit" class="sub-btn border-0">Submit</button>

                            </form>
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
                                <a href="index" class="text-white">Home</a>
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
        <script>
            function readPDF(urllink) {
                var read = "https://docs.google.com/gview?embedded=true&url=" + urllink
                window.open(read, '_blank');
            }

            function downloadPDF(urllink) {
                const url = urllink;
                const link = document.createElement("a");
                link.setAttribute("href", url);
                link.setAttribute("download", "");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }

            function share(link) {
                window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
            }
        </script>

        <script>
            function showTool(event, index) {
                const button = document.getElementById("tool" + index);
                button.classList.remove("d-none");
                button.classList.add("d-flex");
            }

            function mouseleave(event, index) {
                const button = document.getElementById("tool" + index);
                button.classList.add("d-none");
                button.classList.remove("d-flex");
            }
        </script>
    </body>
@endsection
