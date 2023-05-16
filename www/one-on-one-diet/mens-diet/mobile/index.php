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
            <div class="swiper-slide">
                <a href="/diet-booster/fat-cut-injection/" class="">다이어트부스터</a>
            </div>
            <div class="swiper-slide">
                <a href="/device-introduction/main/" class="">장비소개</a>
            </div>
            <div class="swiper-slide on">
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
        initialSlide: 4,
    });
</script>

<div id="" class="submenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/one-on-one-diet/childhood-and-adolescent-obesity/#start">소아청소년비만</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/wedding-diet/#start">웨딩다이어트</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/postpartum-diet/#start">산후다이어트</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/high-obesity-diet/#start">고도비만다이어트</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/menopause-diet/#start">갱년기다이어트</a>
            </div>
            <div class="swiper-slide on">
                <a href="/one-on-one-diet/mens-diet/#start">남성다이어트</a>
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
        initialSlide: 5,
    });
</script>

<!-- 상세페이지슬라이더 끝 -->

<div class="page">
    <div class="con">
        <div class="hos_info">
            <div class="hi">
                <img src="./mobile/img/banner.jpg" alt="남성다이어트">
            </div>
        </div>
    </div>
    <div class="con">
        <div class="hos_info">
            <img class="mobile_content" src="./mobile/img/content.jpg" alt="0601내용">
        </div>
    </div>
</div>