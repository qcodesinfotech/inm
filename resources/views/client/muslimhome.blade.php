@extends('userlayout.master')
@section('content')

    <body>
        <div class="wrapper">

            @include('client.header')

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <style>
                .inputform {
                    border: none;
                    width: 85%;
                    padding-left: 5%;
                    outline: none;
                }

                .alert-primary {
                    display: none;
                }

                .alert-warning {
                    display: none;
                }
            </style>

            <style>
                .navbar {
                    position: absolute !important;
                }
            </style>

            <div class="body-con">
                <div class="alert alert-primary" id="successMsg"
                    style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                </div>
                <div class="alert alert-warning" id="dangerMsg"
                    style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success"
                        style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (session()->has('popupmessage'))
                    <script>
                        $(document).ready(() => {

                            $("#modalbtn").click();
                            $("#sign-close").click()
                            $("#login-close").click()
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
                                <button style="margin-top: 10px; margin-right: 10px " type="button" class="close"
                                    data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Thank you for submitting details. Your Non-Muslim Friend has received a
                                    WhatsApp message with the links to download books and videos on Islam. May
                                    Almighty Allah reward you.</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" onclick="homeRuth()"
                                    data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divide-con">
                    <div class="m-card-con mb-5">
                        <div class="center-heading">I am a Muslim</div>
                        <div class="center-heading">
                            <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                                style="height: 10px; width: 200px" />
                        </div>
                        <div class="m-card-desc">
                            <a>Thank you for your interest to convey Islam.</a>
                            <br />
                            <a>We request you to fill out this form and your
                                non-Muslim friend
                                will receive our books and videos on different, yet important
                                topics on Islam through his/her contact details.</a>
                        </div>
                        <form action="create_islamuser" method="POST" id="CreateIslam">
                            @csrf
                            <div class="center-heading">My Details</div>

                            <div class="center-heading">
                                <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                                    style="height: 10px; width: 200px" />
                            </div>
                            <br />
                            <div class="input-card">
                                <div class="text-white input-icon-card">
                                    Name
                                </div>
                                <input value="" name="Name" id="UName" class="input-style" disabled />
                            </div>
                            <br />
                        </form>
                    </div>
                    <div class="m-card-con mb-5">
                        <div>
                            <div class="center-heading">Details of a Non-Muslim</div>
                            <div class="center-heading">
                                <img src="<?= URL::asset('user_assets/images/icons/bottomborder.png') ?>" alt=""
                                    style="height: 10px; width: 200px" />
                            </div>
                            <br />

                            <form action="addMuslim" method="post">
                                @csrf
                                <div class="input-card mt-4">
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
                                        <img src="<?= URL::asset('user_assets/images/icons/whatsapp.png') ?>"
                                            alt="" class="input-img-icon" />
                                    </div>
                                    <div class="d-flex">
                                        <select name="phone_code" style="border-right: 1px solid gray; width: 50px;"
                                            class="input-style" id="country_code">
                                        </select><input value="" name="phone_number" maxlength="13"
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
                                <input type="hidden" id="user_id_data" value="0" name="user_id"
                                    class="inputform" />
                        </div>
                        <br />
                        <div class="center-heading mt-3">
                            <button type="submit" class="sub-btn border-0">Submit</button>
                            <button type="submit" class="sub-btn border-0 ms-5 d-none">Add More</button>
                            </form>
                        </div>
                    </div>
                </div>

                <style>
                    @media (min-width: 576px) {

                        .modal-dialog {
                            max-width: 400px;
                        }

                        .modal-dialog .modal-content {
                            padding: 1rem;
                        }
                    }

                    .modal-header .close {
                        margin-top: -1.5rem;
                    }

                    .form-title {
                        margin: -2rem 0rem 2rem;
                    }

                    .btn-round {
                        border-radius: 3rem;
                    }

                    .delimiter {
                        padding: 1rem;
                    }

                    .social-buttons .btn {
                        margin: 0 0.5rem 1rem;
                    }

                    .signup-section {
                        padding: 0.3rem 0rem;
                    }

                    .btn-info,
                    .btn-info:hover,
                    .btn-info:active:hover,
                    .btn-info:active,
                    .btn-info:focus {
                        color: #fff;
                        background-color: #c2912a;
                        border-color: #c2912a;
                        box-shadow: none;
                        outline: none;
                    }

                    .text-info {
                        color: #c2912a !important;
                    }

                    .form-control:focus {
                        border-color: #c2912a;
                        outline: 0;
                    }
                </style>

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0 justify-content-end">
                                <button type="button" class="close" id="login-close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true" style="color:red">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-title text-center">
                                    <h4>Login</h4>
                                </div>
                                <div class="d-flex flex-column text-center">
                                    <form method="POST">

                                        @csrf

                                        <div class="form-group">
                                            <input type="name" class="form-control" name="user_name" id="user-name"
                                                placeholder="Username">
                                            <a class="text-danger" id="LoginUsername-error"
                                                style="display: flex; width:100%"></a>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                id="loginpassword" placeholder="Password">
                                            <a class="text-danger" id="LoginPassword-error"
                                                style="display: flex; width:100%"></a>
                                        </div>
                                        <button type="button" onclick="login()" class="btn btn-info btn-block btn-round"
                                            id="login-btn">Login</button>
                                        <p style="margin-top: 10px;">(OR)</p>
                                        <button id="skip-login" type="button"
                                            class="btn btn-info btn-block btn-round">Skip</button>
                                    </form>
                                </div>
                            </div>

                            <div class="modal-footer d-flex justify-content-center  flex-column">
                                <div class="signup-section">Not a member yet?<a style="cursor: pointer;"
                                        id="already-sign" class="text-info">Sign Up</a>
                                </div>
                                <div class="signup-section d-none">Do not want to a login? <a style="cursor: pointer;"
                                        id="skip-login" class="text-info"> Skip</a> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="signupModal" tabindex="-1" role="dialog"
                    aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0 justify-content-end">
                                <button type="button" id="sign-close" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true" style="color:red">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-title text-center">
                                    <h4>Signup</h4>
                                </div>
                                <div class="d-flex flex-column text-center">
                                    <form>
                                        <div class="form-group">
                                            <input type="name" class="form-control" id="name"
                                                placeholder="Name">

                                            <a class="text-danger" id="name-error" style="display: flex; width:100%"></a>
                                        </div>
                                        <div class="form-group">
                                            <input type="name" class="form-control" id="user-name-1"
                                                placeholder="Username">
                                            <a class="text-danger" id="username-error"
                                                style="display: flex; width:100%"></a>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password-1"
                                                placeholder="Password">
                                            <a class="text-danger" id="password-error"
                                                style="display: flex; width:100%"></a>
                                        </div>
                                        <button id="signup-btn" type="button"
                                            class="btn btn-info btn-block btn-round">Signup</button>
                                        <p style="margin-top: 10px;">(OR)</p>
                                        <button id="skip-signup" type="button"
                                            class="btn btn-info btn-block btn-round">Skip</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center flex-column">
                                <div class="signup-section">Already a member? <a style="cursor: pointer;"
                                        class="text-info" id="already-login"> Login</a>
                                </div>
                                <div class="signup-section d-none">Do not want to a signup? <a style="cursor: pointer;"
                                        id="skip-signup" class="text-info"> Skip</a> </div>
                            </div>
                        </div>
                    </div>
                </div>


                <style>
                    .table-bordered>tbody>tr>td,
                    .table-bordered>tbody>tr>th,
                    .table-bordered>tfoot>tr>td,
                    .table-bordered>tfoot>tr>th,
                    .table-bordered>thead>tr>td,
                    .table-bordered>thead>tr>th {
                        border: 1px solid #fee19b;
                    }

                    .table> :not(:last-child)> :last-child>* {
                        border-bottom-color: #fee19b;
                    }

                    @media screen and (max-width: 576px) {
                        .table-row {
                            font-size: 8px;
                        }

                        .table-row th {
                            vertical-align: middle !important;
                        }
                    }
                </style>
                <div class="w-100 p-2" id="usertable" style="overflow-x:scroll">
                    <table class="table table-bordered" style="border-color: #ffc107;">
                        <thead>
                            <tr class="table-row">
                                <th scope="col" class="text-center">
                                    <div> S.NO </div>
                                </th>
                                <th scope="col" class="text-center">NAME</th>
                                <th scope="col" class="text-center">EMAIL</th>
                                <th scope="col" class="text-center">ADDRESS</th>
                                <th scope="col" class="text-center">NUMBER</th>
                                <th scope="col" class="text-center">DELIVERED DATE</th>
                                <th scope="col" style="padding:0px;">
                                    <div class="d-flex justify-content-center align-items-center"
                                        style=" height:40px; border-bottom: 1px solid #ffc107"> Books </div>
                                    <div class="d-flex" style="justify-content:space-around; height:40px">
                                        <p
                                            class="w-50 m-0 d-flex justify-content-center align-items-center text-center p-2">
                                            Delivered</p>
                                        <a style="border-left: 1px solid #ffc107"></a>
                                        <p
                                            class="w-50 m-0 d-flex justify-content-center align-items-center text-center p-2">
                                            Not Delivered
                                        </p>
                                    </div>
                                </th>
                                <th scope="col" style="padding:0px;">
                                    <div class="d-flex justify-content-center align-items-center"
                                        style=" height:40px; border-bottom: 1px solid #ffc107"> Videos </div>
                                    <div class="d-flex" style="justify-content:space-around; height:40px">
                                        <p
                                            class="w-50 m-0 d-flex justify-content-center align-items-center text-center p-2">
                                            Delivered</p>
                                        <a style="border-left: 1px solid #ffc107"></a>
                                        <p
                                            class="w-50 m-0 d-flex justify-content-center align-items-center text-center p-2">
                                            Not Delivered
                                        </p>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="UserListappend">


                        </tbody>
                    </table>
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
        </div>

        <button id="sign-modal-btn" data-target="#signupModal" data-toggle="modal" class="d-none"></button>
        <button id="login-modal-btn" data-target="#loginModal" data-toggle="modal" class="d-none"></button>
        <img src="<?= URL::asset('user_assets/images/background/circle.png') ?>" alt="" class="circle-logo" />

        <script>
            function readPDF(urlLInk) {
                var read = "https://docs.google.com/gview?embedded=true&url=" + urlLInk
                window.open(read, '_blank');
            }

            function downloadPDF(urlLInk) {
                const url = urlLInk;
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
                const button = document.getElementById("tool" + index);
                button.classList.remove("d-none");
                button.classList.add("d-flex");
            }

            function mouseleave(event, index) {
                const button = document.getElementById("tool" + index);
                button.classList.add("d-none");
                button.classList.remove("d-flex");
            }

            function share(link) {
                window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
            }
        </script>

    </body>

    </html>
    <script>
        var datauser = localStorage.getItem("UserID");
        datauser = JSON.parse(datauser);
        if (!datauser || datauser == "" || datauser == null) {
            $("#sign-modal-btn").click()
            $("#CreateIslam").hide()
            // $("#usertable").hide()
        } else {
            // listUser(datauser.id);
            $("#user_id_data").val(datauser.id);
            $("#UName").val(datauser.name);
            listUser(datauser.id)
        }

        $("#already-login").click(function() {
            $("#sign-close").click()
            $("#login-modal-btn").click()
        })

        $("#already-sign").click(function() {
            $("#login-close").click()
            $("#sign-modal-btn").click()
        })

        $("#skip-signup").click(function() {
            $("#sign-close").click()
        })

        $("#skip-login").click(function() {
            $("#login-close").click()
        })

        function login() {
            var user_name = $("#user-name").val();
            var password = $("#loginpassword").val();
            var isValid = true;
            if (!password) {
                isValid = false;
                $("#LoginPassword-error").text("*Required Password")
            } else {
                $("#LoginPassword-error").text("")
            }

            if (!user_name) {
                isValid = false;
                $("#LoginUsername-error").text("*Required username")
            } else {
                $("#LoginUsername-error").text("")
            }

            if (isValid) {
                $.post("api/login", {
                    password,
                    user_name
                }).done(function(data) {
                    console.log(data);
                    if (data.status == "false") {
                        $(".alert-warning").show()
                        $("#LoginPassword-error").text(data.message)
                        $("#dangerMsg").text(data.message);

                    } else {

                        $("#login-close").click()
                        $(".alert-primary").show()
                        var obj = {
                            id: data.data.id,
                            name: data.data.name
                        };
                        listUser(data.data.id);
                        localStorage.setItem("UserID", JSON.stringify(obj));
                        $("#UName").val(data.data.name)
                        $("#user_id_data").val(data.data.id);
                        $("#CreateIslam").show()
                        $("#successMsg").text(data.message);

                    }

                    setTimeout(() => {

                        $(".alert-primary").hide()
                        $(".alert-warning").hide()

                    }, "2000");


                });
            }
        }

        $("#signup-btn").click(() => {
            var name = $("#name").val();
            var username = $("#user-name-1").val();
            var password = $("#password-1").val();
            var isValid = true;
            if (!name) {
                isValid = false;
                $("#name-error").text("*Required name")
            } else {
                $("#name-error").text("")
            }
            if (!username) {
                isValid = false;
                $("#username-error").text("*Required username")
            } else {
                $("#username-error").text("")
            }

            if (!password) {
                isValid = false;
                $("#password-error").text("*Required password")
            } else {
                $("#password-error").text("")
            }
            if (isValid) {
                $.post("api/create_islamuser", {
                    name,
                    password,
                    username
                }).done(function(data) {
                    if (data.status == "false") {
                        // $("#sign-close").click()  
                        $(".alert-warning").show()
                        $("#password-error").text(data.message)
                        $("#dangerMsg").text(data.message);
                    } else {
                        $("#sign-close").click()
                        $(".alert-primary").show()
                        $("#CreateIslam").show()
                        $("#user_id_data").val(data.id)
                        $("#UName").val(name)

                        var obj = {
                            id: data.id,
                            name: name
                        };

                        localStorage.setItem("UserID", JSON.stringify(obj));
                        $("#successMsg").text(data.message);
                    }

                    setTimeout(() => {
                        $(".alert-primary").hide()
                        $(".alert-warning").hide()
                    }, "2000");

                });
            }
        })



        function listUser(id) {
            var rigth = `<p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                            <img src="./user_assets/images/icons/right-mark.png" alt=""
                                                style="height: 24px; width: 24px" />
                                        </p>`;
            var wrong = `<p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                            <img src="./user_assets/images/icons/wrong-mark.png" alt=""
                                                style="height: 24px; width: 24px" />
                                        </p>`;
            $("#usertable").show();
            $.get("api/nonMuslimData/" + id, function(res) {
                var Arr = res.data;
                var i = 1
                Arr.map((item) => {

                    $('#UserListappend').append(`<tr class="table-row">
                                <td scope="col" class="text-center">${i++}</td>
                                <td scope="col" class="text-center">${item.name}</td>
                                <td scope="col">${item.email}</td>
                                <td scope="col" class="text-center">${item.nationlity,item.religion}</td>
                                <td scope="col" class="text-center">${item.phone}</td>
                                <td scope="col" class="text-center">XX-XX-XXXX</td>
                                <td scope="col" style="padding:0px;">
                                <div class="d-flex" style="justify-content:space-around; height:40px">
                                     ${wrong}
                                <a style="border-left: 1px solid #ffc107"></a>
                                     ${wrong}
                                </div>
                                </td>
                                <td scope="col" style="padding:0px;">
                                    <div class="d-flex" style="justify-content:space-around; height:40px">
                                     ${wrong}
                                    <a style="border-left: 1px solid #ffc107"></a>
                                     ${wrong}
                                    </div>
                                </td>
                            </tr>`)
                })

            })
        }
    </script>
@endsection
