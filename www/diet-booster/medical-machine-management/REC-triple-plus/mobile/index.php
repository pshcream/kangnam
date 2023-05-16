<!-- 상세페이지슬라이더 시작 -->

<script>
    $(document).ready(function() {
        // 스크롤시작
        var wTop = $(this).scrollTop();
        $(window).on('scroll', function() {
            wTop = $(this).scrollTop();
            if (wTop > 0) {
                $('#wrapper').addClass('on');
            } else {
                setTimeout(function() {
                    $('#wrapper').removeClass('on');
                }, 1000)

            }
        });
    });
</script>

<div id="" class="bigmenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/life-health-introduction/hospital-introduction/" class="">생활건강소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/diet-program/life-health-diet/" class="">다이어트프로그램</a>
            </div>
            <div class="swiper-slide on">
                <a href="/diet-booster/fat-cut-injection/" class="">다이어트부스터</a>
            </div>
            <div class="swiper-slide">
                <a href="/device-introduction/main/" class="">장비소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/childhood-and-adolescent-obesity/" class="">1대1다이어트</a>
            </div>
            <div class="swiper-slide">
                <a href="/event" class="">커뮤니티</a>
            </div>
            <div class="swiper-slide">
                <a href="/consult" class="">상담예약</a>
            </div>

        </div>
    </div>
</div>

<script>
    var bigmenuSlider = new Swiper('.bigmenu_slider .swiper-container', {
        direction: "horizontal",
        slidesPerView: "auto",
        speed: 600,
        spaceBetween: 0,
        initialSlide: 2,
    });
</script>

<div id="" class="submenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/diet-booster/fat-cut-injection/" class="">팻컷주사</a>
            </div>
            <div class="swiper-slide">
                <a href="/diet-booster/lifting-tying/" class="">리프팅매선</a>
            </div>
            <div class="swiper-slide on">
                <a href="/diet-booster/medical-machine-management/REC-triple-plus//" class="">메디컬기계관리</a>
            </div>

        </div>
    </div>
</div>

<script>
    var submenuSlider = new Swiper('.submenu_slider .swiper-container', {
        direction: "horizontal",
        slidesPerView: "auto",
        speed: 600,
        spaceBetween: 0,
        initialSlide: 2,
    });
</script>

<!-- 상세페이지슬라이더 끝 -->

<div class="page">

    <div class="con">
        <div class="hos_info">
            <div class="hi">
                <img src="./mobile/img/banner.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="sub">
        <ul class="sub_tab three">
            <li class="on">
                <a href="/diet-booster/medical-machine-management/REC-triple-plus/#start">REC트리플플러스</a>
            </li>
            <li>
                <a href="/diet-booster/medical-machine-management/3E-shaper/#start">3E쉐이퍼</a>
            </li>
            <li>
                <a href="/diet-booster/medical-machine-management/medical-thermal-management/#start">메디컬온열관리</a>
            </li>
        </ul>
    </div>
    <div class="con">
        <div class="hos_info">
            <img class="mobile_content" src="./mobile/img/content.jpg">
        </div>
    </div>
</div>