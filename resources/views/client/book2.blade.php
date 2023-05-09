@extends('userlayout.master')
@section('content')

    <body>
        <div class="wrapper">

            @include('client.header')

            <div class="body-con">
                <div id="image-part"></div>
                <div id="image-part-cont" class="divide-con">
                    <div class="container">
                        <div class="row" id="books-append">
                            <?php 
                            $i= 0;
                             foreach($book_list as $item){  
                             $i = rand(1,20);?>

                            <div class="col-lg-4 col-md-6 mb-5">
                                <div class="d-flex justify-center align-items-center flex-column">
                                    <div class="mb-4 pointer books-bg"
                                        style="background-image: url('<?= URL::asset($item->book_thumbnail) ?>');  cursor:pointer;"
                                        onclick="readPDF('<?= URL::asset($item->link) ?>')">
                                        {{-- <div class="d-flex w-100" style="background: url('<?= URL::asset('user_assets/images/background/book-bg.jpg') ?>'); align-items: center; justify-content: center; font-wight:bold;"><?= $item->book_name ?></div> --}}
                                    </div>
                                    <div id='<?= 'tool' . $i ?>' class="d-none" onmouseover="showTool(event,<?= $i ?>)"
                                        onmouseleave="mouseleave(event,<?= $i ?>)" style="border-radius: 10px;">
                                        <p class="ps-2 pe-2"
                                            style="background: #F2CA5C; color: white; cursor: pointer; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"
                                            onclick="readPDF('<?= URL::asset($item->link) ?>')">Read</p>
                                        <p class="ps-2 pe-2" style="background: #F8D77E; color: white; cursor: pointer"
                                            onclick="downloadPDF('<?= URL::asset($item->link) ?>')">Download</p>
                                        <p class="ps-2 pe-2"
                                            style="background: #FCE3A5; color: white; cursor: pointer; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"
                                            onclick="share('<?= URL::asset($item->link) ?>')">Share</p>
                                    </div>
                                    <img src="<?= URL::asset('user_assets/images/icons/share1.png') ?>" alt=""
                                        style="width: 30px" onmouseover="showTool(event,<?= $i ?>)"
                                        onmouseleave="mouseleave(event,<?= $i ?>)" />
                                </div>
                            </div>

                            <?php } ?>

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
                                <a href="" class="text-white">Contact us</a>
                            </div>
                            <p class="text-white mt-2 m-2">All Rights Reserved - IslamForNonMuslims © 2023</p>
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
@endsection
