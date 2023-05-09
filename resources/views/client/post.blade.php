@extends('userlayout.master')
@section('content')

    <body>
        <div class="wrapper">

            @include('client.header')

            <div class="body-con">
                <div id="image-part-cont" class="divide-con">
                    <div class="container">
                        <div class="row" id="books-append" style="justify-content: center">

                            <?php 

                          $i= 0;
                          for ($i=1; $i <=42 ; $i++) {              
                            $item =  URL::asset('user_assets/InmPosts/inm-post-'.$i.'.jpg');  

                         ?>
                            <div class="col-lg-5 col-md-6 mb-5">
                                <div class="d-flex justify-center align-items-center flex-column">
                                    <div class="mb-4 pointer books-bg"
                                        style="background-image: url('<?= URL::asset($item) ?>');  cursor:pointer;">
                                    </div>
                                    <div id='<?= 'post-' . $i ?>' class="invisible d-flex mt-1"
                                        onmouseover="showTool(event,'<?= 'post-' . $i ?>')"
                                        onmouseleave="mouseleave(event,'<?= 'post-' . $i ?>')"
                                        style="border-radius: 10px;">
                                        <p class="ps-2 pe-2 mb-1"
                                            style="background: #c2912a; color: white; cursor: pointer; border-radius: 5px;"
                                            onclick="share('<?= URL::asset($item) ?>')">Share</p>
                                    </div>

                                    <img src="<?= URL::asset('user_assets/images/icons/share1.png') ?>"alt=""
                                        style="width: 30px;" onmouseover="showTool(event, '<?= 'post-' . $i ?>')"
                                        onmouseleave="mouseleave(event,'<?= 'post-' . $i ?>')" />

                                </div>
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
                                    <a href="{{ route('/') }}" class="text-white">Home</a>
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

        <img src="<?= URL::asset('user_assets/images/background/circle.png') ?>" alt="" class="circle-logo" />

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
                const links = document.querySelectorAll("#"+ index);
                links.forEach(link => {
                    console.log(link)

                    link.classList.remove("invisible");
                });

                links.forEach(link => {
                    link.classList.add("visible");
                });
            }

            function mouseleave(event, index) {
                const links = document.querySelectorAll("#"+ index);
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
    </body>
@endsection
