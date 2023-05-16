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
            <div class="swiper-slide on">
                <a href="/life-health-introduction/take-a-tour/" class="">둘러보기</a>
            </div>
            <div class="swiper-slide">
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
        initialSlide: 2,
    });
</script>

<!-- 상세페이지슬라이더 끝 -->

<div class="page">
    <div class="con">
        <div class="hos_info">
            <div class="hi">
                <img src="../hospital-introduction/mobile/img/banner.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="int_info">
        <div class="ii">
            <div class="ii_left">
                <div class="ii_pick on" onclick="openMap(event, 'ii_01')">
                    <div><b>안내데스크</b></div>
                </div>
                <div class="ii_pick" onclick="openMap(event, 'ii_02')">
                    <div><b>대기실</b></div>
                </div>
                <div class="ii_pick" onclick="openMap(event, 'ii_03')">
                    <div><b>상담실</b></div>
                </div>
                <div class="ii_pick" onclick="openMap(event, 'ii_04')">
                    <div><b>치료실</b></div>
                </div>
                <div class="ii_pick" onclick="openMap(event, 'ii_05')">
                    <div><b>치료실2</b></div>
                </div>
                <div class="ii_pick" onclick="openMap(event, 'ii_06')">
                    <div><b>치료실3</b></div>
                </div>
            </div>
            <div class="ii_right">
                <div class="ii_view on" id="ii_01">
                    <img src="./pc/img/tour01.jpeg" alt="안내데스크 - 병원 진료 시간 동안 직원이 상주하며, 층별 이동 안내를 도와드리고 있습니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>안내데스크</b></div>
                        <div class="ii_ment">병원 진료 시간 동안 직원이 상주하며,<br>층별 이동 안내를 도와드리고 있습니다.</div>
                    </div>
                </div>
                <div class="ii_view" id="ii_02">
                    <img src="./pc/img/tour01.jpeg" alt="대기실 - 생활건강한의원를 방문해주시는 고객님을 처음 만나는 공간입니다. 고객님의 편의를 위해 편의시설 및 대기공간을 마련하였습니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>대기실</b></div>
                        <div class="ii_ment">생활건강한의원를 방문해주시는 고객님을 처음 만나는 공간입니다.<br>고객님의 편의를 위해 편의시설 및 대기공간을 마련하였습니다.</div>
                    </div>
                </div>
                <div class="ii_view" id="ii_03">
                    <img src="./pc/img/tour03.jpeg" alt="상담실 - 전담 의료인과의 1:1 상담을 통해 고객을 위한 최선의 방안을 찾고 진정으로 원하는 아름다움을 제공합니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>상담실</b></div>
                        <div class="ii_ment">전담 의료인과의 1:1 상담을 통해<br>고객을 위한 최선의 방안을 찾고 진정으로 원하는 아름다움을 제공합니다.</div>
                    </div>
                </div>
                <div class="ii_view" id="ii_04">
                    <img src="./pc/img/tour04.jpeg" alt="치료실 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>치료실</b></div>
                        <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                    </div>
                </div>
                <div class="ii_view" id="ii_05">
                    <img src="./pc/img/tour05.jpeg" alt="치료실2 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>치료실2</b></div>
                        <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                    </div>
                </div>
                <div class="ii_view" id="ii_06">
                    <img src="./pc/img/tour06.jpeg" alt="치료실3 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                    <div class="ii_exp">
                        <div class="ii_nm"><b>치료실3</b></div>
                        <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                    </div>
                </div>
            </div>

            <script>
                function openMap(evt, mapName) {
                    // Declare all variables
                    var i, ii_view, ii_pick;

                    // Get all elements with class="tabcontent" and hide them
                    ii_view = document.getElementsByClassName("ii_view");
                    for (i = 0; i < ii_view.length; i++) {
                        ii_view[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    ii_pick = document.getElementsByClassName("ii_pick");
                    for (i = 0; i < ii_pick.length; i++) {
                        ii_pick[i].className = ii_pick[i].className.replace(" on", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(mapName).style.display = "inline-block";
                    evt.currentTarget.className += " on";
                }
            </script>

        </div>
    </div>
</div>