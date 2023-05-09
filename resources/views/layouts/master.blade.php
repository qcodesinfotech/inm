<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name">QcodesUI Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="shortcut icon" href="{{ URL::asset("assets/images/favicon.ico") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/core/libs.min.css") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/qompac-ui.min.css?v=1.0.1") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/custom.min.css?v=1.0.1") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/dark.min.css?v=1.0.1") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/customizer.min.css?v=1.0.1") }}">

    <link rel="stylesheet" href="{{ URL::asset("assets/css/rtl.min.css?v=1.0.1") }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
label {
    color: grey;
    padding: 2px;
}
</style>
<script>
    window.onload = function() {
        setTimeout(function() {
            let alertDangerElements = document.getElementsByClassName("alert-danger");
if (alertDangerElements.length > 0) {
    alertDangerElements[0].classList.add("d-none");
}
        }, 1200); // 5000 milliseconds = 5 seconds
 setTimeout(function() {
  let alertDangerElements = document.getElementsByClassName("alert-success");
if (alertDangerElements.length > 0) {
    alertDangerElements[0].classList.add("d-none");
}
 }, 1200); // 5000 milliseconds = 5 seconds
    }
</script>
<?php
$base_url ="http://localhost/islamapp/fileupload/";
?>
<body class="">
    @include('common.nav')
    @yield('content')
    @include('common.footer')
</body>
<script src="{{ URL::asset("assets/js/plugins/slider-tabs.js") }}"></script>
<script src="{{ URL::asset("assets/vendor/lodash/lodash.min.js") }}"></script>
<!-- Utilities Functions -->
<script src="{{ URL::asset("assets/js/iqonic-script/utility.min.js") }}"></script>

<!-- Settings Script -->
<script src="{{ URL::asset("assets/js/iqonic-script/setting.min.js") }}"></script>

<!-- Settings Init Script -->
<script src="{{ URL::asset("assets/js/core/external.min.js") }}"></script>
<script src="{{ URL::asset("assets/js/charts/widgetcharts.js?v=1.0.1") }}" defer></script>
<script src="{{ URL::asset("assets/js/charts/dashboard.js?v=1.0.1") }}" defer></script>
<script src="{{ URL::asset("assets/js/qompac-ui.js?v=1.0.1") }}" defer></script>

{{-- <script src="{{ URL::asset("assets/js/sidebar.js?v=1.0.1") }}" defer></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</html>