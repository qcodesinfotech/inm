<header id="header" class="header light" style="position: fixed; width: 100%; top: 0%">

    <div class="desktop-nav" style="height: 70px; overflow: hidden; justify-content: space-between">

        <ul class="" style="padding: 0%; margin:0%; display:flex">
            <a class="header-log">
                <div style="padding-right: 10%">
                    <img src="<?= URL::asset('user_assets/images/icons/logo.png') ?>" alt=""
                        style="width: 200px; height: 50px" />
                </div>
                <div class="rotate-side"></div>
            </a>
            <div style="z-index:1" id="home" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/home-icon.png') ?>" alt="" />
                <a style="color: white">Home</a>
            </div>
        </ul>

        <div style="display: flex; width: 100%; align-items: center; justify-content: flex-end;">
            <div id="book" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/open_book.png') ?>" alt="" />
                <a style="color: white">Read</a>
            </div>
            <div id="video" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/play-button.png') ?>" alt="" />
                <a style="color: white">Watch</a>
            </div>
            <div id="posts" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/posts.png') ?>" alt="" />
                <a style="color: white">Post</a>
            </div>

            <div id="inspire" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/letter.png') ?>" alt="" />
                <a style="color: white">Inspire</a>
            </div>

            <div id="share" onclick="sharethis()" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/share.png') ?>" alt="" />
                <a style="color: white; display:flex"> Share <span class="d-sm-none d-md-block ps-1" style="font-family: serif"> Website<span> </a>
            </div>
        </div>

        <script>
            function sharethis() {
                var link = 'https://qcodesinfotech.com/inm/';

                window.open("https://api.whatsapp.com/send/?text=" + link, "_blank")
            }
        </script>
    </div>

    <div class="mobile-nav" style=" width: 100%; align-items: center; justify-content: center; flex-wrap: wrap; ">

        <a class="bg-white"
            style="display: flex; width: 100%; align-items: center; justify-content: center; padding: 2%; ">
            <img src="<?= URL::asset('user_assets/images/icons/logo.png') ?>" alt=""
                style="width: 200px; height: 50px" />
        </a>

        <div style=" display: flex; width: 100%; align-items: center; justify-content: space-evenly;">
            <div id="homeMob" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/home-icon.png') ?>" alt="" />
                <a style="color: white">Home</a>
            </div>
            <div id="book1" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/open_book.png') ?>" alt="" />
                <a style="color: white">Read</a>
            </div>
            <div id="video1" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/play-button.png') ?>" alt="" />
                <a style="color: white">Watch</a>
            </div>
            <div id="posts1" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/posts.png') ?>" alt="" />
                <a style="color: white">Post</a>
            </div>
            <div id="inspireMob" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/letter.png') ?>" alt="" />
                <a style="color: white">Inspire</a>
            </div>
            <div id="share1" class="nav-items nav-conten">
                <img src="<?= URL::asset('user_assets/images/icons/share.png') ?>" alt="" />
                <a style="color: white">Share</a>
            </div>
        </div>
    </div>
</header>
