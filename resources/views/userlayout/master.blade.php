<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>IslamForNonMuslims</title>
    <!-- Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,585;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@1,400;1,600&family=Mulish:ital,wght@0,667;0,778;0,1000;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,585;1,400;1,600&family=Mulish:wght@200&family=Open+Sans&display=swap"
        rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/plugins-css.css') }}" />
    <!-- Style   -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/mobile.css') }}" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('user_assets/css/responsive.css') }}" />
    <!--link PWA-->
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        
</head>

<body class="bg-white">
    <div id="preloader" style="display: flex">
        <div class="bg-circle">
            <div class="bg-circle-con"> <img src="{{ URL::asset('user_assets/images/background/circle.png') }}"
                    alt="" class="bg-top-circle" /></div>
            <img src="{{ URL::asset('user_assets/images/icons/logo.png') }}" alt="" class="bg-center-logo" />
            <div class="bg-circle-con justify-content-end">
                <img src="{{ URL::asset('user_assets/images/background/circle.png') }}" alt=""
                    class="bg-bottom-circle" />
            </div>
        </div>
    </div>
    </div>

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 120px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: #c2912a;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #ffffff;
            /*------ background-color: #0E6EB8; ---------*/
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #ffffff;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(85px);
        }

        .slider:after {
            content: 'ENGLISH';
            color: black;
            display: block;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 10px;
            font-family: Verdana, sans-serif;
        }

        input:checked+.slider:after {
            content: 'ARABIC';
        }
    </style>

    <script>
        window.onload = function() {
            setTimeout(function() {
                let alertDangerElements = document.getElementsByClassName("alert-danger");
                if (alertDangerElements.length > 0) {
                    alertDangerElements[0].classList.add("d-none");
                }
            }, 2700); // 5000 milliseconds = 5 seconds
            setTimeout(function() {
                let alertDangerElements = document.getElementsByClassName("alert-success");
                if (alertDangerElements.length > 0) {
                    alertDangerElements[0].classList.add("d-none");
                }
            }, 1500); // 5000 milliseconds = 5 seconds
        }
    </script>

    <body class="">
        @yield('content')
    </body>
    <script src={{ URL::asset('user_assets/js/jquery-3.6.0.min.js') }}></script>
    <script src={{ URL::asset('user_assets/js/nav-link-click.js') }}></script>
    <script src={{ URL::asset('user_assets/js/mobile-nav.js') }}></script>
</body>

</html>
