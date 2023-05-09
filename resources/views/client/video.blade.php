@extends('userlayout.master')
@section('content')

    <body>
        <div class="wrapper">
            @include('client.header')

            <div class="body-con">
                <div id="video-part"></div>
                <div id="video-part-cont" class="divide-con">
                    <div class="container">
                        <div class="row" id="video-append" style="justify-content: center">
                            <?php $i= 0; foreach($video_list as $item){ $i++;
                                
                                $vt = $item["video_thumbnail"];
                                $id = $item["id"];
                                $link = $item["link"];
                                $count = $item["count"];
                                
                                ?>
                            <div class="col-lg-5 col-md-6 mb-5">
                                <div class="d-flex justify-center align-items-center flex-column">
                                    <div class="mb-4 pointer books-bg align-items-end"
                                        style="background-image: url('<?= URL::asset($vt) ?>');  cursor:pointer;"
                                        onclick="openVideo('<?= URL::asset($link) ?>','<?= $id ?>')">
                                        <div
                                            style="width: 100%;  height: 40px; background: #00000070; display : flex; align-items: center; justify-content: space-between; padding: 5px;     border-radius: 3px;">
                                            <img src="user_assets/images/icons/play-button1.png"
                                                style="height: 100%; filter:invert(1)" alt="" />
                                            <div
                                                style="display: flex; align-items: center; justify-content: center; height: 100%">
                                                <img src="user_assets/images/icons/view-icon.png"
                                                    style="height: 20px; filter:invert(1)" alt="" />
                                                <a class="text-white" style="margin-left:3px; font-size; 6px"><?= $count ?></a>
                                            </div>
                                        </div>
                                    </div>
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
                                <p class="text-white mt-2 m-2" style="text-align: center">All Rights Reserved - IslamForNonMuslims © 2023</p>
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
            function openVideo(path,id) {
                $.get(`api/hitcount/${id}`,function(data,status){
                   console.log(data);
                  })
                window.open(path, '_blank');
            }

            function share(link) {
                window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
            }
 
        </script>
    </body>
@endsection
