<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
  include_once(G5_THEME_MOBILE_PATH . '/index.php');
  return;
}

include_once(G5_THEME_PATH . '/head.php');
?>

<h2 class="sound_only">최신글</h2>
<div class="main_visual">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide01.jpg" alt="오늘의 시작이 나를 바꾼다, 펫컷주사">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide02.jpg" alt="오직 아이어트만 집중하겠습니다. 모든분들의 일상속을 더 자신감 있게 만들어 드리겠습니다. - 대표원장 김지승">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide03.jpg" alt="3가지 레이저로 꿈구던 바디라인, 3E 쉐이퍼">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide04.jpg" alt="지방은 분해하고 탄력은 유지하고! REC 트리플플러스">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide05.jpg" alt="상체밸런스를 위한 적정체온 36.5°C, 메디컬온열관리 - 체지방감소, 혈액순환개선, 부종개선, 대사증진">
      </div>
      <div class="swiper-slide" style="overflow:hidden;">
        <img src="/theme/hospital/img/main_slide06.jpg" alt="오늘,감량 오늘나는 100g 더 가벼워진다">
      </div>
    </div>
  </div>
  <div class="coverLeft"></div>
  <div class="coverRight"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<script>
  var mainSlide = new Swiper('.main_visual .swiper-container', {
    direction: "horizontal",
    autoplay: {
      delay: 3000,
    },
    slidesPerView: 1,
    speed: 600,
    loop: true,
    centeredSlides: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.main_visual .swiper-button-next',
      prevEl: '.main_visual .swiper-button-prev',
    },
  });
</script>
<div class="mainCon">
  <!-- 시술슬라이드 시작 -->
  <div class="theolimSurgery">
    <div class="wrappers">

      <!-- <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg recommend_bg2"> -->
      <div class="swiper-container">
        <div class="mainTitle">
          <h2>생활건강 추천 <span>Best</span></h2>
        </div>

        <div class="recommend_box">
          <img src="/theme/hospital/img/recommend_border.png" alt="" class="recommend_bg">
        </div>

        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="/diet-program/today-weight-loss-premium-oriental-medicine/#start">
            </a>
            <img src="/theme/hospital/img/recommend01.jpg" alt="생활건강 체중감량한약 - " 오늘,감량"">
            <div class="surgery_type">
              <p class="name">생활건강 체중감량한약 - "오늘,감량"</p>
              <p class="content">오늘 더 가벼워지고싶다면?</p>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="/one-on-one-diet/wedding-diet/#start">
            </a>
            <img src="/theme/hospital/img/recommend02.jpg" alt="웨딩다이어트">
            <div class="surgery_type">
              <p class="name">웨딩다이어트</p>
              <p class="content">내 인생에서 가장 아름다운 순간을 더 아름답게</p>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="/diet-booster/lifting-tying/#start">
            </a>
            <img src="/theme/hospital/img/recommend03.jpg" alt="리프팅매선">
            <div class="surgery_type">
              <p class="name">리프팅매선</p>
              <p class="content">절개없이 완벽한 몸매만들기</p>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="/one-on-one-diet/menopause-diet/#start">
            </a>
            <img src="/theme/hospital/img/recommend04.jpg" alt="갱년기다이어트">
            <div class="surgery_type">
              <p class="name">갱년기다이어트</p>
              <p class="content">제 2의 인생을 살아가는 엄마들의 이야기</p>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="/one-on-one-diet/childhood-and-adolescent-obesity/#start">
            </a>
            <img src="/theme/hospital/img/recommend05.jpg" alt="소아청소년비만">
            <div class="surgery_type">
              <p class="name">소아청소년비만</p>
              <p class="content">체중은 마이너스-, 성장은 플러스+</p>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="/one-on-one-diet/mens-diet/#start">
            </a>
            <img src="/theme/hospital/img/recommend06.jpg" alt="남성다이어트">
            <div class="surgery_type">
              <p class="name">남성다이어트</p>
              <p class="content">티 나지 않는 다이어트</p>
            </div>
          </div>
        </div>


        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  <script>
    var olimSurgery = new Swiper('.theolimSurgery .swiper-container', {

      loop: true,
      slidesPerView: 'auto',
      // slidesPerView: 3,
      spaceBetween: 0,
      speed: 200,
      direction: "horizontal",
      centeredSlides: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".theolimSurgery .swiper-button-next",
        prevEl: ".theolimSurgery .swiper-button-prev",
      },
    });
  </script>
  <!-- 칼럼시작 -->
  <div class="main_column">
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
        <a href="/column/5" class="column_box">
          <div class="colum_thumb">
            <img src="/theme/hospital/img/column05.jpg" alt="다이어트 할 때 즐기는 마실 것들 (부제 : 알면 즐길 것들이 넘쳐난다) ">
          </div>
          <div class="column_cont">
            <div class="column_title">다이어트 할 때 즐기는 마실 것들<span>(부제 : 알면 즐길 것들이 넘쳐난다)</span></div>
            <div class="column_sum">음식(飮食)은 마실 음, 먹을식이 합쳐진 단어입니다.</div>
          </div>
        </a>
        <a href="/column/6" class="column_box">
          <div class="colum_thumb">
            <img src="/theme/hospital/img/column06.jpg" alt="요요를 막는 다섯가지방법   (부제 : 이것만 지켜도 다시 살찌기 정말 어렵다)  ">
          </div>
          <div class="column_cont">
            <div class="column_title">요요를 막는 다섯가지방법<span>(부제 : 이것만 지켜도 다시 살찌기 정말 어렵다)</span></div>
            <div class="column_sum">다이어트를 함에있어서 사실 체중을 빼는 것보다 더</div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- 칼럼끝 -->

  <!-- 지식인시작 -->
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
        <div class="daKinlist">
          <a href="/jisikin/5">
            <div class="textWrap">
              <div class="question">
                <!-- <h3><span class="kinIcon">Q.</span>안검하수 고민</h3> -->
                <h3>생활건강한의원 지식IN</h3>
                <p>코로나 급찐살로 운동중인데(두달째) 체중은 –1키로에요.. ㅠㅠ</p>
              </div>
              <div class="answer">
                <!-- <span class="kinIcon">A.</span> -->
                안녕하세요. 생활건강한의원입니다. 코로나로 인해서 생활 리듬이 무너지고 체중에 변화가 생긴 분들이 많이 계십니다. 그래서 운동을 하면서 다이어트를 하시고자 하시는 분들이 많이 계시는데요. 희는 다이어트를 할 때 운동을 하시는 것을 가급적 피하시라고 말씀드립니다.
              </div>
            </div>
          </a>
        </div>
        <div class="daKinlist">
          <a href="/jisikin/7">
            <div class="textWrap">
              <div class="question">
                <!-- <h3><span class="kinIcon">Q.</span>눈위 주름</h3> -->
                <h3>생활건강한의원 지식IN</h3>
                <p>1일 1식하면서 다이어트중인데 탈모가 너무 심합니다</p>
              </div>
              <div class="answer">
                안녕하세요. 생활건강한의원입니다. 다이어트 중 탈모로 인해서 고민이 많으실 것 같습니다.다이어트를 할 때 식단을 하는 방법은 크게 두 가지 종류가 있습니다. 칼로리를 제한하는 방법과 영양소를 제한하는 방법이 있습니다.질문자분께서 하신 방법은
              </div>
            </div>
          </a>
        </div>
        <div class="daKinlist">
          <a href="/jisikin/9">
            <div class="textWrap">
              <div class="question">
                <!-- <h3><span class="kinIcon">Q.</span>쌍커풀 수술에 대해서</h3> -->
                <h3>생활건강한의원 지식IN</h3>
                <p>지흡은 무서워서 못하겠고.. 약먹으면서
                  같이 할 수있는 다이어트 시술은 어떤게 있나요?
                </p>
              </div>
              <div class="answer">
                <!-- <span class="kinIcon">A.</span> -->
                안녕하세요. 생활건강한의원입니다. 다이어트 시술은 바늘로 찌르는 것과 찌르지 않는 것으로 구분해볼 수 있는데 각 시술마다의 효과와 적용 대상이 다르기 때문에 나의 몸 상태에 따른 시술들을 디자인해주는 병원을 만나시는게 중요합니다.
              </div>
            </div>
          </a>
        </div>
        <div class="daKinlist">
          <a href="/jisikin/11">
            <div class="textWrap">
              <div class="question">
                <!-- <h3><span class="kinIcon">Q.</span>옅은 쌍꺼풀라인때문에 고민입니다.</h3> -->
                <h3>생활건강한의원 지식IN</h3>
                <p>다이어트 중인데 뱃살보다 가슴이
                  더 많이 빠지는거 같아여 ㅠㅠㅠㅠ</p>
              </div>
              <div class="answer">
                <!-- <span class="kinIcon">A.</span> -->
                안녕하세요. 생활건강한의원입니다. 다이어트 하시면서 가슴이 빠지는 것으로 고민이 많으실 것 같습니다. 질문자분께서 말씀하신 것처럼 가슴은 다른 신체부위보다 지방층이 두껍게 있는 편이기 때문에 다이어트를 할 때 가슴이 빠지는 경우가 있습니다.
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- 유튜브탭 -->
  <!-- <div class="ddtv">
    <div class="mainTitle">
      <div class="wrappers">
        <h2>생활건강 TV</h2>
      </div>
    </div>
    <div class="ddtv_wrap">
      <div class="ddtv_list">
        <div class="cate01">
          <div class="ddtv_pick on">
            <div class="thumb">
              <img src="/theme/hospital/img/youtube01.jpg" alt="https://www.youtube.com/embed/87xMYKldhdA" style="margin-top:0;">
              <div class="datv_pager_over"></div>
            </div>
            <div class="subject">
              <h3>한의사가 알려주는 올바른 척추형태와 생활습관</h3>
              <span>골반교정 / 추나교정 / 굽은자세 / 척추신경 / 척추교정 / 요추전만 / 골반운동 / 스트레칭 / 오늘의건강꿀팁 / 매일경제TV</span>
            </div>
          </div>

        </div>
      </div>
      <div class="ddtv_view on" id="ddtv">
        <iframe src="https://www.youtube.com/embed/87xMYKldhdA" width="920" height="517" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
    </div>
     -->
    <!-- <script>
      $(".ddtv_list .cate01 .ddtv_pick").click(function() {
        if ($(this).attr("class") != "on") {
          var video_src = $(this).find(".thumb img").attr("alt");

          $(".ddtv_list .cate01 .ddtv_pick").removeClass("on");
          $(this).addClass("on");
          $(".ddtv_view.on iframe").attr("src", video_src);
        }
      });
    </script> -->
  <!-- </div>
</div> -->
<!-- 팝업시작 -->
<!-- <div id="mainTabPopup1" class="st-popup" role="alertdialog" aria-modal="true" aria-hidden="true" title="클릭하면 팝업창이 닫힙니다" onclick="closePopup('1', 2);">
  <div class="stp-wrap" onclick="clickPopup()" title="">
    <div class="mainTabPopup autoPlay-swiper">
      <div class="swiper-container">
        <div class="mainTabSlideWrap swiper-wrapper">
          <div class="swiper-slide" data-title="5월 봄이벤트-2">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/popup_slide05_1.jpg" alt="5월 봄이벤트-1">
            </div>
          </div>
          <div class="swiper-slide" data-title="5월 봄이벤트-3">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/popup_slide05_2.jpg" alt="5월 봄이벤트-2">
            </div>
          </div>
          <div class="swiper-slide" data-title="토탈아이리프팅">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/popup_slide05_3.jpg" alt="5월 봄이벤트-3">
            </div>
          </div>
          <div class="swiper-slide" data-title="5월 봄이벤트-1">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/popup_slide04.jpg" alt="토탈아이리프팅">
            </div>
          </div>
        </div>
      </div>
      <div class="mainTabBottom swiper-pagination"></div>
    </div>
    <div class="stp-btn">
      <button type="button" class="" onClick="closePopup('1', 1);"><input type="checkbox" class="" onclick="closePopup('1', 1);" style="  cursor: pointer;
    margin-bottom: 3px;
    margin-right: 4px;">오늘하루 그만보기</button>
      <button type="button" class="" onClick="closePopup('1', 2);">
        <img src="https://dformula.speedgabia.com/all/close.png" onclick="closePopup('1', 2);" alt="팝업닫기">
      </button>
    </div>
  </div>
  <div class="swiper-button-next" onclick="clickPopup()"></div>
  <div class="swiper-button-prev" onclick="clickPopup()"></div>
</div> -->
<!-- <script>
  $(function() {
    var mainEventSlideNum = $('.mainTabSlideWrap > .swiper-slide').length;
    var brandPopSwiper = new Swiper('.mainTabPopup > .swiper-container', {
      resistanceRatio: 0,
      allowTouchMove: false,
      pagination: {
        el: '.mainTabBottom.swiper-pagination',
        clickable: true,
        renderBullet: function(index, className) {
          var eTit = '';
          eTit = $('.mainTabSlideWrap > .swiper-slide:eq(' + (index) + ')').attr('data-title');
          return '<div class="' + className + '"><p><span>' + eTit + '</span></p></div>';
        },
      },
      navigation: {
        nextEl: '.st-popup .swiper-button-next',
        prevEl: '.st-popup .swiper-button-prev',
      },
      loop: true,
      reachEnd: function() {
        oboMainSwiper.update();
      }
    });
    //오토플레이 
    if (mainEventSlideNum > 1) {
      brandPopSwiper.autoplay.start(5000);
    };

    if (brandPopSwiper.autoplay.running) {
      $('.stp-wrap').hover(function() {
        brandPopSwiper.autoplay.stop();
      }, function() {
        brandPopSwiper.autoplay.start(5000);
      });
    };
    /*지점이벤트 스와이프*/
    var oboMainSwiper = new Swiper('.branch-eventPack-swiper', {
      resistanceRatio: 0,
      loop: false,
      navigation: {
        nextEl: '.branch-event-area2 .swiper-button-next',
        prevEl: '.branch-event-area2 .swiper-button-prev',
      },
    });
  });
</script> -->
<!--//swiper event 팝업 -->
<!-- popup -->
<!-- <script>
  openPopup('mainTabPopup');
  //메인 팝업 닫기
  function closePopup(target, type) {
    event.stopPropagation();
    $('#mainTabPopup' + target).attr('aria-hidden', 'true').removeClass('on');
    if (type == 1) {
      setCookie('mainTabPopup' + target, "done", 1);
    }
  };
  //메인 팝업 열기(쿠키에 없으면 보이고 있으면 안보임)
  function openPopup(target) {
    var $target;
    var cookieDone;
    cookiedata = document.cookie;
    //나중에 3대신 공지팝업 갯수만큼 루프
    for (var i = 1; i < 3; i++) {
      $target = $('#' + target + i);
      cookieDone = target + i + '=done';
      if (cookiedata.indexOf(cookieDone) < 0) {
        $target.attr('aria-hidden', 'false').addClass('on');
      } else {
        $target.attr('aria-hidden', 'true').removeClass('on');
      }
    }
  };
  // 쿠키 가져오기  
  function getCookie(name) {
    var nameOfCookie = name + "=";
    var x = 0;
    while (x <= document.cookie.length) {
      var y = (x + nameOfCookie.length);
      if (document.cookie.substring(x, y) == nameOfCookie) {
        if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
          endOfCookie = document.cookie.length;
        return unescape(document.cookie.substring(y, endOfCookie));
      }
      x = document.cookie.indexOf(" ", x) + 1;
      if (x == 0)
        break;
    }
    return "";
  }
  //쿠키 설정  
  function setCookie(name, value, expiredays) {
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + parseInt(expiredays));
    todayDate.setHours(0, 0, 0, 0);
    document.cookie = name + "=" + escape(value) + "; domain=formulaliftingclinic.com; expires=" + todayDate.toGMTString() + ";";
  }

  // 220311 추가
  function clickPopup() {
    event.stopPropagation();
    openPopup('mainTabPopup');
  }
</script> -->
<!--//swiper event 팝업 -->
<!-- 슬라이드팝업끝 -->
<!--  -->
<!-- 팝업끝 -->

<?php
include_once(G5_THEME_PATH . '/tail.php');
