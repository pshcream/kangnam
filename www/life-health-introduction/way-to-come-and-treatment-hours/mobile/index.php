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
            <div class="swiper-slide on">
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
        // initialSlide: 0,
    });
</script>

<div id="" class="submenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/life-health-introduction/hospital-introduction/" class="">병원소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/life-health-introduction/medical-staff-introduction/" class="">의료진소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/life-health-introduction/take-a-tour/" class="">둘러보기</a>
            </div>
            <div class="swiper-slide on">
                <a href="/life-health-introduction/way-to-come-and-treatment-hours/" class="">진료안내/찾아오는길</a>
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
        initialSlide: 3,
    });
</script>

<!-- 상세페이지슬라이더 끝 -->

<div class="page">
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=50c538b298d8c5aef8359ade8f7dd5a5"></script>

    <div class="con">
        <div class="hos_info">
            <div class="hi">
                <img src="../hospital-introduction/mobile/img/banner.jpg" alt="">
            </div>
        </div>
        <div class="map_info">
            <div class="mi">
                <div id="di_map">
                </div>
                <div class="map_box">
                    <div class="nm"><b>생활건강한의원</b></div>
                    <div class="ad">부산 부산진구 중앙대로691번길 5 <br> 천우빌딩 4층  </div>
                    <div class="pn"><b>051-802-3313</b></div>
                    <div class="tm">
                        <table>
                            <tr>
                                <td>월~금</td>
                                <td>10:00~20:00</td>
                            </tr>
                            <!-- <tr>
                                <td>화/수/목</td>
                                <td>10:00~19:00</td>
                            </tr> -->
                            <tr>
                                <td>토</td>
                                <td>10:00~14:00</td>
                            </tr>
                            <tr>
                                <td>일/공휴일</td>
                                <td>휴진</td>
                            </tr>
                        </table>
                    </div>
                    <a class="fr" href="https://map.naver.com/v5/search/%EA%B9%80%EC%A7%80%EC%8A%B9%ED%95%9C%EC%9D%98%EC%9B%90/place/35075169?c=14138740.2669530,4509383.7864638,19,0,0,0,dh&isCorrectAnswer=true" target="_blank">빠른길 찾기</a>
                </div>

                <script>
                    var mapContainer = document.getElementById('di_map'), // 지도를 표시할 div 
                        mapOption = {
                            center: new kakao.maps.LatLng(37.50255950663105, 127.01076084477108), // 지도의 중심좌표
                            level: 3 // 지도의 확대 레벨
                        };

                    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

                    // 마커가 표시될 위치입니다 
                    var markerPosition = new kakao.maps.LatLng(37.50255950663105, 127.01076084477108);

                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({
                        position: markerPosition
                    });

                    // 마커가 지도 위에 표시되도록 설정합니다
                    marker.setMap(map);
                </script>




            </div>




            <!---da시작---->

            <div class="mi">
                <img src="./mobile/img/content.jpg" alt="">
            </div>

            <!---da끝---->



        </div>
    </div>
</div>