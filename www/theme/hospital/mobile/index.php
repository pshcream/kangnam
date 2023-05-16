<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH . '/head.php');
?>

<style>
  #wrapper {
    padding-top: 18vw;
  }
</style>

<!--메인슬라이더시작-->
<div class="main_visual">
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM01.jpg" alt="　" loading="eager">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM02.jpg" alt="　" loading="eager">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM03.jpg" alt="　" loading="eager">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM04.jpg" alt="　" loading="eager">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM05.jpg" alt="　" loading="eager">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/mobile/main_slideM06.jpg" alt="　" loading="eager">
      </div>

    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<script>
  var mainSlide = new Swiper('.main_visual .swiper-container', {
    direction: "horizontal",
    slidesPerView: "auto",
    speed: 600,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    centeredSlides: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.main_visual .swiper-button-next',
      prevEl: '.main_visual .swiper-button-prev',
    },
  });
</script>
<!--메인슬라이더끝-->



<!--생활건강 시술 시작-->

<div class="theolimSurgery">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>생활건강 추천 <span>Best</span></h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="/diet-program/today-weight-loss-premium-oriental-medicine/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend01.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">생활건강 체중감량한약 -<br>"오늘,감량"</p>
              <p class="content">오늘 더 가벼워지고싶다면?</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="/one-on-one-diet/wedding-diet/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend02.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">웨딩다이어트</p>
              <p class="content">내 인생에서 가장 아름다운 순간을 더 아름답게</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="/diet-booster/lifting-tying/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend03.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">리프팅매선</p>
              <p class="content">절개없이 완벽한 몸매만들기</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="/one-on-one-diet/menopause-diet/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend04.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">갱년기다이어트</p>
              <p class="content">제 2의 인생을 살아가는 엄마들의 이야기</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="/one-on-one-diet/childhood-and-adolescent-obesity/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend05.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">소아청소년비만</p>
              <p class="content">체중은 마이너스-, 성장은 플러스+</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="/one-on-one-diet/mens-diet/#start">
            <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
            <img src="/theme/hospital/img/recommend06.jpg" alt="" class="recommend_img">
            <div class="surgery_type">
              <p class="name">남성다이어트</p>
              <p class="content">티 나지 않는 다이어트</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var olimSurgery = new Swiper('.theolimSurgery .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    speed: 200,
    direction: "horizontal",
    autoplay: {
      delay: 3000,
    },
    // navigation: {
    //   nextEl: ".theolimSurgery .swiper-button-next",
    //   prevEl: ".theolimSurgery .swiper-button-prev",
    // },
    // freeMode: true
  });
</script>

<!--생활건강 시술끝-->

<!-- 생활건강 칼럼시작 -->

<div class="main_column wrapper">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>생활건강 칼럼</h2>
      <a href="/column" class="more">MORE <i class="xi-angle-right"></i></a>
    </div>
    <div class="column_sec">
      <a href="/column/1" class="column_box">
        <div class="colum_thumb">
          <img src="/theme/hospital/img/column01.jpg" alt="최고의 다이어트 식단을 찾아서 (부제 : 인간은 원래 육식동물이었다)">
        </div>
        <div class="column_cont">
          <div class="column_title">최고의 다이어트 식단을 찾아서<span>(부제 : 인간은 원래 육식동물이었다)</span></div>
          <div class="column_sum">10년이 넘는 시간동안 임상현장에서 많은 다이어트
          </div>
        </div>
      </a>
      <a href="/column/2" class="column_box">
        <div class="colum_thumb">
          <img src="/theme/hospital/img/column02.jpg" alt="다이어트 한약의 효과 (부제 : 약이라고 다 똑같은 약이 아니다)  ">
        </div>
        <div class="column_cont">
          <div class="column_title">다이어트 한약의 효과<span>(부제 : 약이라고 다 똑같은 약이 아니다)</span></div>
          <div class="column_sum">오늘은 다이어트한약을 처방할 때 어떤 약재가 쓰이는지</div>
        </div>
      </a>
      <a href="/column/3" class="column_box">
        <div class="colum_thumb">
          <img src="/theme/hospital/img/column03.jpg" alt="냉장고에서 버려야할 음식 (부제 : 버려라! 빠질 것이다)  ">
        </div>
        <div class="column_cont">
          <div class="column_title">냉장고에서 버려야할 음식<span>(부제 : 버려라! 빠질 것이다)</span></div>
          <div class="column_sum">감자와 고구마는 대표적인 다이어트식품으로 알려져</div>
        </div>
      </a>
      <a href="/column/4" class="column_box">
        <div class="colum_thumb">
          <img src="/theme/hospital/img/column04.jpg" alt="냉장고에 꼭 넣어야할 음식 (부제 : 채워라! 빠질 것이다)">
        </div>
        <div class="column_cont">
          <div class="column_title">냉장고에 꼭 넣어야할 음식<span>(부제 : 채워라! 빠질 것이다)</span></div>
          <div class="column_sum">그릭요거트는 아침 식사대용으로먹기 매우 좋습니다.</div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- 생활건강 칼럼끝 -->

<div class="daKin">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>생활건강 지식인</h2>
      <a href="/jisikin/" class="more">MORE <i class="xi-angle-right"></i></a>
    </div>
    <div id="knowledge_ajax_block" class="daKinlistwrap">
      <div class="daKinlist">
        <a href="/jisikin/1">
          <div class="textWrap">
            <div class="question">
              <!-- <h3><span class="kinIcon">Q.</span>한약 절개 재수술 문의해여ㅠㅠ
                </h3> -->
              <h3>생활건강한의원 지식IN</h3>
              <p>다이어트약 먹고 요요와서 다시 약먹는중인데 이번에는 너무 안빠져요</p>
            </div>
            <div class="answer">
              <!-- <span class="kinIcon">A.</span> -->
              안녕하세요. 생활건강한의원입니다.요요 때문에 고민이시군요. 요요가 생기는 원인은 여러 가지가 있지만 가장 대표적인 것은 다이어트를 할 때와 그 이후의 생활에 차이가 크기 때문입니다. 다이어트를 할 때의 노력을 100이라고 한다면 그 이후에 유지를 위해서는
            </div>
          </div>
        </a>
      </div>
      <div class="daKinlist">
        <a href="/jisikin/3">
          <div class="textWrap">
            <div class="question">
              <!-- <h3><span class="kinIcon">Q.</span>꺼진 눈 해결방법</h3> -->
              <h3>생활건강한의원 지식IN</h3>
              <p>옆구리살이 너무 안빠져요 ㅠㅠㅠㅠ</p>
            </div>
            <div class="answer">
              <!-- <span class="kinIcon">A.</span> -->
              안녕하세요. 생활건강한의원입니다. 먼저 목표하신 체중까지 감량을 잘하신 점 너무나도 축하드립니다. 다이어트를 해서 목표치까지 감량을 했음에도 부분적으로 좀 더 관리가 필요한 부위가 있다면 부분적인 시술을 통해서 이를 해결할 수 있습니다. 질문자분께서
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- 유튜브시작 -->
<!-- <div class="doctv">
  <div class="doctv_wrap wrapper wrappers">
    <div class="mainTitle">
      <h2>생활건강 TV</h2>

    </div>
    <div class="doctv_view on" id="doctv">
      <iframe src="https://www.youtube.com/embed/87xMYKldhdA" width="" height="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
    <div class="doctv_list">
      <ul>
        <li class="doc doc1 on">
          <div class="thumb">
            <img src="/theme/hospital/img/youtube01.jpg" alt="https://www.youtube.com/embed/87xMYKldhdA" style="margin-top:0;">
            <div class="doctv_pager_over"></div>
          </div>
          <div class="subject">
            <h3>한의사가 알려주는 올바른 척추형태와 생활습관</h3>
            <span>골반교정 / 추나교정 / 굽은자세 / 척추신경 / 척추교정 / 요추전만 / 골반운동 / 스트레칭 / 오늘의건강꿀팁 / 매일경제TV</span>
          </div>
        </li>

      </ul>
    </div> -->

    <!-- <script>
      $(".doctv_list ul .doc").click(function() {
        if ($(this).attr("class") != "on") {
          var video_src = $(this).find(".thumb img").attr("alt");

          $(".doctv_list ul .doc").removeClass("on");
          $(this).addClass("on");
          $(".doctv_view.on iframe").attr("src", video_src);
        }
      });
    </script> -->

  <!-- </div>

</div> -->
<!-- 유튜브끝 -->
<!-- 팝업슬라이드시작 -->


<!-- <script>
  $(document).ready(function() {
    // 스크롤시작
    var wTop = $(this).scrollTop();
    $(window).on('scroll', function() {
      wTop = $(this).scrollTop();
      if (wTop > 0) {
        closePopup('1', 2);
      } else {}
    });
  });
</script> -->

<!-- <div id="mainTabPopup1" class="st-popup" role="alertdialog" aria-modal="true" aria-hidden="true">
  <div class="stp-wrap">
    <div class="mainTabPopup autoPlay-swiper">
      <div class="swiper-container">
        <div class="mainTabSlideWrap swiper-wrapper">

          <div class="swiper-slide" data-title="5월봄이벤트1">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM05_1.jpg" alt="5월봄이벤트1" />
            </div>
          </div>
          <div class="swiper-slide" data-title="5월봄이벤트2">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM05_2.jpg" alt="5월봄이벤트2" />
            </div>
          </div>
          <div class="swiper-slide" data-title="5월봄이벤트3">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM05_3.jpg" alt="5월봄이벤트3" />
            </div>
          </div>

          <div class="swiper-slide" data-title="토탈아이리프팅">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM04.jpg" alt="토탈아이리프팅" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="stp-btn">
      <button type="button" class="" onclick="closePopup('1', 1);"><input type="checkbox" class="" onclick="closePopup('1', 1);" style="margin-bottom: 2px; margin-right: 1px;">
        오늘하루 그만보기
      </button>
      <button type="button" class="" onclick="closePopup('1', 2);"><img src="https://dformula.speedgabia.com/all/close.png" onclick="closePopup('1', 2);"></button>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div> -->

<!-- <script>
  $(function() {
    var mainEventSlideNum = $(".mainTabSlideWrap > .swiper-slide").length;
    var brandPopSwiper = new Swiper(".mainTabPopup > .swiper-container", {
      resistanceRatio: 0,
      // allowTouchMove: false,
      // pagination: {
      //   el: '.mainTabBottom.swiper-pagination',
      //   clickable: true,
      //   renderBullet: function(index, className) {
      //     var eTit = '';
      //     eTit = $('.mainTabSlideWrap > .swiper-slide:eq(' + (index) + ')').attr('data-title');
      //     return '<div class="' + className + '"><p><span>' + eTit + '</span></p></div>';
      //   },
      // },
      navigation: {
        nextEl: ".st-popup .swiper-button-next",
        prevEl: ".st-popup .swiper-button-prev",
      },
      loop: true,
      reachEnd: function() {
        oboMainSwiper.update();
      },
    });

    //오토플레이
    if (mainEventSlideNum > 1) {
      brandPopSwiper.autoplay.start(5000);
    }

    if (brandPopSwiper.autoplay.running) {
      $(".stp-wrap").hover(
        function() {
          brandPopSwiper.autoplay.stop();
        },
        function() {
          brandPopSwiper.autoplay.start(5000);
        }
      );
    }

    /*지점이벤트 스와이프*/
    var oboMainSwiper = new Swiper(".branch-eventPack-swiper", {
      resistanceRatio: 0,
      loop: false,
      navigation: {
        nextEl: ".branch-event-area2 .swiper-button-next",
        prevEl: ".branch-event-area2 .swiper-button-prev",
      },
    });
  });
</script> -->
<!--//swiper event 팝업 -->

<!-- popup -->
<!-- <script>
  openPopup("mainTabPopup");

  //메인 팝업 닫기
  function closePopup(target, type) {
    $("#mainTabPopup" + target)
      .attr("aria-hidden", "true")
      .removeClass("on");
    if (type == 1) {
      setCookie("mainTabPopup" + target, "done", 1);
    }
  }
  //메인 팝업 열기(쿠키에 없으면 보이고 있으면 안보임)
  function openPopup(target) {
    var $target;
    var cookieDone;
    cookiedata = document.cookie;
    //나중에 3대신 공지팝업 갯수만큼 루프
    for (var i = 1; i < 3; i++) {
      $target = $("#" + target + i);
      cookieDone = target + i + "=done";
      if (cookiedata.indexOf(cookieDone) < 0) {
        $target.attr("aria-hidden", "false").addClass("on");
      } else {
        $target.attr("aria-hidden", "true").removeClass("on");
      }
    }
  }

  // 쿠키 가져오기
  function getCookie(name) {
    var nameOfCookie = name + "=";
    var x = 0;
    while (x <= document.cookie.length) {
      var y = x + nameOfCookie.length;
      if (document.cookie.substring(x, y) == nameOfCookie) {
        if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
          endOfCookie = document.cookie.length;
        return unescape(document.cookie.substring(y, endOfCookie));
      }
      x = document.cookie.indexOf(" ", x) + 1;
      if (x == 0) break;
    }
    return "";
  }

  //쿠키 설정
  function setCookie(name, value, expiredays) {
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + parseInt(expiredays));
    todayDate.setHours(0, 0, 0, 0);
    document.cookie =
      name +
      "=" +
      escape(value) +
      "; domain=formulaliftingclinic.com; expires=" +
      todayDate.toGMTString() +
      ";";
  }
</script> -->
<!--//swiper event 팝업 -->
<!-- 슬라이드팝업끝 -->
<!-- 생활건강 팝업 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH . '/tail.php');
