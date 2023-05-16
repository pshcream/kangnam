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
        <img src="https://dformula.speedgabia.com/_alllitingps/mobile/main_slideM01.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_alllitingps/mobile/main_slideM02.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_alllitingps/mobile/main_slideM03.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_alllitingps/mobile/main_slideM04.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_alllitingps/mobile/main_slideM05.jpg" alt="　" loading="eager">
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



<!--올리팅 시술 시작-->

<style>
  .kin_sec img {
    width: 100%;
    border: 1px solid rgb(0, 0, 0, 0.1);
  }

  .theolimSurgery {
    padding: 3.75rem 0;
    background: #f4f4f4;
  }

  .theolimSurgery .mainTitle {
    text-align: left;
    padding-left: 10px;
  }

  .theolimSurgery .mainTitle h2 {
    /* float: none;
    float: left; */
    line-height: 5.6vw;
    font-size: 5.6vw;
    font-weight: 800;
    color: #333;
    vertical-align: top;
    margin-right: 2px;
    font-family: 'Montserrat';
    padding-bottom: 1.875rem !important;
  }

  .theolimSurgery .wrappers {
    width: 100%;
    margin: 0 auto;
  }

  .theolimSurgery .swiper-container {
    padding-left: 10vw;
    padding-right: 10vw;
  }

  .theolimSurgery .swiper-wrapper {
    /* overflow: visible !important;
    padding-left: 2.5rem !important;
    padding-right: 2.5rem !important; */
  }

  .theolimSurgery .swiper-slide {
    margin-right: 4vw;
    background: white;
    position: relative;
  }

  .theolimSurgery .swiper-slide img {
    width: 100%;
  }

  .theolimSurgery .swiper-slide .surgery_type {
    padding-left: 1.875rem !important;
    padding-top: 1.875rem !important;
    padding-right: 1.875rem !important;
  }

  .theolimSurgery .swiper-slide .surgery_type .hashtag {
    color: #472B33;
    text-align: left;
    font-size: 1.1rem;
    letter-spacing: -0.06rem;
    line-height: 1.6rem;
    font-family: NotoSansKRMedium, "sans-serif";
    word-break: keep-all;
  }

  .theolimSurgery .swiper-slide .surgery_type .name {
    text-align: left;
    font-size: 1.4rem;
    letter-spacing: -0.06rem;
    line-height: 1.9rem;
    color: black;
    font-family: NotoSansKRRegular, "sans-serif";
    padding-top: 0.912rem !important;
    padding-bottom: 0.625rem !important;
    word-break: keep-all;
  }

  .theolimSurgery .swiper-slide .surgery_type .content {
    text-align: left;
    font-size: 1rem;
    letter-spacing: -0.06rem;
    line-height: 1.5rem;
    color: #767676;
    font-family: NotoSansKRLight, "sans-serif";
    padding-bottom: 5rem !important;
    word-break: keep-all;
  }

  .theolimSurgery .swiper-slide .link_button {
    background: #F6B9C8;
    width: 3rem;
    height: 3rem;
    font-size: 2rem;
    line-height: 2.8rem;
    text-align: center;
    color: white;
    display: block;
    margin-top: -3rem;
    float: right;
  }

  .theolimSurgery .swiper-slide .link_button:hover {
    background: #472B33;
  }

  .theolimSurgery .swiper-slide .dark_cover {
    width: 100%;
    height: 100%;
    background: #ACA5A7;
    opacity: 50%;
    z-index: 99;
    position: absolute;
    left: 0;
    top: 0;
  }

  .theolimSurgery .swiper-slide.swiper-slide-active .dark_cover {
    display: none;
  }

  .theolimSurgery .swiper-button-next {
    right: 0;
    top: 0;
    width: 35px;
    height: 35px;
  }

  .theolimSurgery .swiper-button-prev {
    left: 0;
    top: 0;
    width: 35px;
    height: 35px;
  }

  .theolimSurgery .swiper-button-next:after {
    content: '\e90b';
    font-family: xeicon;
    color: black;
    font-size: 28px;
    position: absolute;
    top: 20px;
    right: 310px;
    background: white;
    width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    border-radius: 100%;
  }

  .theolimSurgery .swiper-button-prev:after {
    content: '\e908';
    font-family: xeicon;
    color: black;
    font-size: 28px;
    position: absolute;
    top: 20px;
    left: 310px;
    background: white;
    width: 48px;
    height: 48px;
    border-radius: 100%;
    line-height: 48px;
    text-align: center;
  }

  .theolimSurgery .swiper-button-next:hover::after {
    color: white;
    background: black;
  }

  .theolimSurgery .swiper-button-prev:hover::after {
    color: white;
    background: black;
  }

  .kin_sec {
    padding: 0;
  }
</style>

<!--  -->
<div class="theolimSurgery">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>ALL LITING 추천시술&수술</h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_01.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#비절개 #절개 #재수술</p>
            <p class="name">다이어트프로그램</p>
            <p class="content">흉터,실밥 걱정없이 자연스럽고 또렷한 쌍커풀 라인 완성!</p>
          </div>
          <a href="/diet-program/life-health-diet/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_02.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#비절개 #절개</p>
            <p class="name">눈매교정</p>
            <p class="content">졸려보이는 눈에서 벗어나 선명하고 또렷한 눈매로!</p>
          </div>
          <a href="/eye-correction/non-incision-eyelid-correction/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_03.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#꺼진눈 #두툼한눈 #속눈썹찔림</p>
            <p class="name">눈재수술</p>
            <p class="content">두번의 실패는 없다! 원인을 분석하여 흉터는 줄이고 만족도는 높이자!</p>
          </div>
          <a href="/eye-revision-surgery/squint-eye-correction/non-incision-drooping-eye-correction/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_04.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#무쌍 #속쌍</p>
            <p class="name">남자눈성형</p>
            <p class="content">수술한듯 안한듯 자연스러운 눈성형으로 호감형 눈매 완성!</p>
          </div>
          <a href="/male-eye-surgery/none-diet-program/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_05.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#내시경이마리프팅 #이마축소술</p>
            <p class="name">토탈아이리프팅</p>
            <p class="content">이마주름+미간주름+눈매교정+눈썹교정 한번에 해결</p>
          </div>
          <a href="/total-eye-lifting/endoscopic-forehead-lifting/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_06.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#상안검 #하안검 #눈썹하리프팅</p>
            <p class="name">중년눈성형</p>
            <p class="content">눈처짐, 이마주름, 볼륨 감소 등 얼굴에 드러난 세월의 흔적을 지우자!</p>
          </div>
          <a href="/middle-aged-eye-surgery/upper-eyelid/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_07.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#눈밑지방재배치 #하안검재배치</p>
            <p class="name">눈밑수술</p>
            <p class="content">어둡고 피곤해 보이는 눈에서 화사하고 어려보이는 눈으로 완성</p>
          </div>
          <a href="/under-eye-surgery/redistribution-of-fat-under-the-eyes/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_08.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#앞트임 #뒷/밑트임 #트임복원</p>
            <p class="name">트임성형</p>
            <p class="content">1mm의 차이로 여신 눈매 완성! 풀리거나 붙을 걱정없는 올리팅트임</p>
          </div>
          <a href="/slit-molding/anterior-slit-surgery/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>

        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_alllitingps/model_09.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#지방이식 #이물질제거</p>
            <p class="name">지방이식/이물질제거</p>
            <p class="content">볼륨감을 살리고 자연스러운 눈밑라인 회복</p>
          </div>
          <a href="/fat-grafting-and-removal-of-foreign-substances/eye-fat-grafting/#start" class="link_button">+</a>
          <div class="dark_cover"></div>
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

<!--올리팅 시술끝-->

<!-- 올리팅 칼럼시작 -->
<style>
  .wrappers .mainTitle {
    overflow: hidden;
    position: relative;
  }

  .wrappers .mainTitle h2 {
    float: left;
    line-height: 40px;
    font-size: 5.6vw;
    font-weight: 800;
    color: #333;
    font-family: 'Montserrat';
    vertical-align: top;
    margin-right: 2px;
  }

  .wrappers .mainTitle h2 span {
    color: #49bc91;
  }

  .wrappers .mainTitle .more {
    float: right;
    font-size: 12px;
    line-height: 40px;
    color: #747271;
  }

  /* .main_column {
    padding: 15px 0 50px;
    background: #f4f4f4;
  } */

  .main_column .column_sec a.column_box {
    display: inline-block;
    width: 47%;
    margin-right: 4%;
    margin-bottom: 25px;
    vertical-align: top;
  }

  .main_column.wrapper {
    margin: 0;
    padding: 3.75rem 10px;
    background: #f5e9ec;
  }

  .main_column.wrapper .mainTitle h2 {
    line-height: 5.6vw;
    font-size: 5.6vw;
    font-weight: 800;
    color: #333;
    vertical-align: top;
    margin-right: 2px;
    font-family: 'Montserrat';
    /* text-align: center; */
    padding-bottom: 1.875rem !important;
    padding-left: 10px;
  }

  .main_column .column_sec a.column_box:nth-child(2n) {
    margin-right: 0;
  }

  .main_column .column_sec a.column_box:nth-child(n+3) {
    margin-bottom: 0;
  }

  .main_column .column_sec a.column_box .colum_thumb {
    width: 100%;
    height: auto;
    position: relative;
  }

  .main_column .column_sec a.column_box .colum_thumb img {
    width: 100%;
    position: relative;
  }

  .main_column .column_sec a.column_box .column_cont .column_category {
    color: #747271;
    line-height: 1.3;
    margin-top: 5px;
    font-size: 13px;
  }

  .main_column .column_sec a.column_box .column_cont .column_title {
    font-size: 14px;
    font-weight: bold;
    word-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    /* word-break: keep-all; */
  }

  .main_column .column_sec a.column_box .column_cont .column_sum {
    padding-top: 5px;
    word-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    line-height: 130%;
    font-size: 12px;
  }

  .ddEvent .update_cover {
    width: 80%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 10%;
    background: rgb(0, 0, 0, 0.9);
    color: white;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    line-height: calc(67vw + 53px);
  }
</style>
<div class="main_column wrapper">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>ALL LITING 칼럼</h2>
      <a href="/column" class="more">더 보기 <i class="xi-angle-right"></i></a>
    </div>
    <div class="column_sec">
      <a href="/column/1" class="column_box">
        <div class="colum_thumb">
          <img src="https://dformula.speedgabia.com/_alllitingps/column_thumb01.jpg" alt="[의학채널 비온뒤] 김지승의 예뻐지는 이야기_쌍액 쌍테를 하면 안되는 이유">
        </div>
        <div class="column_cont">
          <div class="column_title">[의학채널 비온뒤] 김지승의 예뻐지는 이야기_쌍액 쌍테를 하면 안되는 이유</div>
          <div class="column_sum">쌍꺼풀 테이프와 쌍꺼풀 접착액, 속칭 쌍테, 쌍액으로 쌍꺼풀을 만드는 어린 학생들이 많습니다.

            그러나, 인위적으로 쌍꺼풀을 만드는 행위는 실제로 득보다 실이 많습니다.

            외모에 관심이 많은 어린 학생들은 수술 없이 쌍꺼풀을 만들 수 있는 간편함 때문에 접착식 쌍꺼풀 테이프를 이용하거나, 접착액으로 쌍꺼풀을 만들기도 합니다.

            심지어 눈두덩이에 선을 물리적으로 반복적으로 그어주면 쌍꺼풀이 생긴다는 잘못된 속설이 유행처럼 번져 주변에서 손쉽게 구할 수 있는 실핀이나 이쑤시개 등을 이용하여 인위적으로 눈두덩이에 선을 매일 그어준다는 분들도 있습니다.

            쌍꺼풀 테이프나, 쌍꺼풀 액 자체의 접착 성분이 설사 피부 안정성 테스트를 거쳐 유해성분이 아닌 것으로 판명되었다고 하더라도, 이들 자체의 직접적인 자극은 접촉성 피부염이나 결막염을 일으킬 수 있어 주의를 하여야 합니다.

            또한 피부 표면을 지속적이고 반복적으로 자극하면 이로 인하여, 눈꺼풀 피부의 과각화, 모세혈 확장증, 염증 등이 발생할 수 있으며, 한번 과각화나 모세혈관 확장증, 염증이 발생하면 오랜 기간 피부과나 안과 치료를 받아야 하는 경우도 생길 수 있습니다.

            여러 가지 상황에 맞게 필요한 정돈된 메이크업을 위해 한 두 번의 사용하는 것은 사실상 크게 영향을 주지는 않지만, 쌍꺼풀 테이프와 쌍꺼풀 접착액으로 쌍꺼풀을 만드는 행위가 장기간 반복될 경우 그 자체적 자극만으로도 눈꺼풀의 노화과정이 촉진되어 눈꺼풀이 쳐지고 눈뜨는 근육의 힘이 약해지는 현상이 나타나게 됩니다.

            눈뜨는 힘이 약해지면 눈뜨기가 피로해질 뿐 아니라, 눌어난 눈꺼풀이 검은 눈동자 상연을 정상 범주보다 더 덮어버리게 되어, 보여지는 검은 눈동자의 크기가 작아지기 때문에, 타인에게 졸립고, 피곤한 인상으로 비춰지기 쉽습니다. 또한 약해진 눈뜨는 힘을 보상하기 위해서 자연스럽게 이마 근육을 이용하게 되기 때문에, 이마에 가로주름이 생기기 쉽습니다.
            이러한 일련의 변화들은 모두 비가역적이어서 추후에 쌍꺼풀 테이프와 쌍꺼풀 액을 더 이상 사용하지 않는다고 하여도, 이전 상태로 회복되는 것은 아니며, 늘어난 눈꺼풀이 눈매를 덮어 버려 쉽게는 화장이 번지거나, 눈꺼풀의 가장 바깥쪽, 즉 외안각 부위의 위 아래 눈꺼풀 피부가 서로 맞닿아 짓무르기도 하며, 아주 심각한 경우에는 늘어난 눈꺼풀 피부가 시야를 가리기도 합니다.

            이 때에는 미용적 목적이 아니라고 하더라도 기능적 목적을 위해 반드시 수술로 이를 교정하여야 하며, 수술 이 외에 다른 어떠한 방법으로 늘어난 눈꺼풀 피부의 교정은 힘들게 됩니다.수술 전 쌍꺼풀 테이프와 쌍꺼풀 액을 오랜 기간 사용한 경우, 교정을 위한 수술방법에도 영향을 미치게 되는데, 수술 중 눈꺼풀 피부 및 근육 절제 양에 영향을 미치게 되고, 수술의 회복기간 및 최종적 결과에도 영향을 미치게 됩니다.

            예를 들면, 간단히 실만을 이용하는 매몰법이나, 부분 절개법으로 교정하지 못하고, 눈두덩의 늘어난 피부과 근육을 제거하기 위해서 절개법으로 수술을 하여야만 한다거나, 졸리운 눈매를 교정하기 위해 안검 하수 수술 혹은 눈매 교정 등의 추가 술식이 필요하게 됩니다.

            따라서, 쌍꺼풀 테이프와 쌍꺼풀액을 무분별하게 사용하는 것은 의학적으로는 추천되지 않으며, 쌍꺼풀 테이프와 쌍꺼풀액을 통한 자극은 되도록 피하셔야 하겠습니다.
          </div>
        </div>
      </a>
      <a href="/column/2" class="column_box">
        <div class="colum_thumb">
          <img src="https://dformula.speedgabia.com/_alllitingps/column_thumb02.jpg" alt="풀리지 않는 매몰법 쌍꺼풀 수술, '삼중루프 매몰법'이란">
        </div>
        <div class="column_cont">
          <div class="column_title">풀리지 않는 매몰법 쌍꺼풀 수술, '삼중루프 매몰법'이란</div>
          <div class="column_sum">여름방학 시즌을 맞아 성형외과가 문전성시를 이루고 있다.

            비교적 시간적 여유를 가질 수 있는 때인 만큼 성형수술을 받으려는 학생들이 증가했기 때문인데, 최근 대학생은 물론이고 고등학생들도 많이 받고 있는 성형은 단연 쌍꺼풀 수술이다.

            눈 성형 중에서도 쌍꺼풀 수술은 눈의 크기가 커지는 효과 뿐만 아니라 얼굴의 전체 비율이 바뀌어 보일 수 있기 때문일 터.

            김지승 원장은 "아주 작은 변화로도 얼굴의 인상에 많은 변화를 가지게 하는 부위가 '눈'으로, 실제 쌍꺼풀 수술은 이제 성형수술 가운데서도 가장 보편적인 수술로 여겨지고 있는 분위기"라고 전했다.

            특히 최근 성형수술 트렌드는 자연스러운 변화인 만큼 쌍꺼풀 수술 방법 중에서도 자연스럽게 쌍꺼풀 라인을 만들 매몰법 수술에 관심을 보이는 경우가 많다.

            하지만 기존 매몰법의 경우 쌍꺼풀 라인이 금방 풀릴 확률이 높아 이후 재수술이 불가피해 다시 병원을 찾는 환자들도 적지 않았다.

            이와 관련해 김지승 원장은 '삼중루프 매몰법'을 소개했다.

            삼중루프 매몰법은 쌍꺼풀 라인이 풀리는 것은 방지하기 위해 더블 루프방법에서 루프를 한 개 더 추가한 방식으로 일반 매몰법에 비해 잘 풀리지 않으면서 회복기간이 짧아 일상생활로의 복귀도 빠르게 가능하다.

            실제 삼중루프 매몰법으로 쌍꺼풀 수술을 받은 환자들은 수술 후 눈꺼풀의 무거운 느낌 없이 라인이 더 길고 뚜렷하게 잡힌다는 것이 석 원장의 의견이다.

            무엇보다 삼중루프 매몰법의 큰 특징은 매듭이 한군데만 있는 것이다. 석 원장은 "매듭이 한군데만 있기 때문에 혹시 쌍꺼풀 라인이 마음에 들지 않아 교정을 원하는 경우 쉽게 실을 제거할 수 있다"고 설명했다.

            다른 방법으로 매몰법을 받은 환자 중에는 실을 제거하기 어려운 경우가 있으나 삼중루프 매몰법의 경우 재수술 역시 용이하다는 장점을 가지고 있는 것.

            한편, 대부분 쌍꺼풀 수술을 쉽고 간단한 수술이라 여기지만 눈의 위치나 크기, 각도 등을 고려하여 수술계획을 세워야만 만족도 높은 결과를 얻을 수 있다.

            따라서 체계적인 계획 없는 수술은 재수술로 이어질 확률이 높다는 사실을 기억해야 할 것이며, 마지막으로 석 원장 역시 "삼중루프 매몰법의 장점만을 보기 보다는 수술 전 전문의와의 충분한 상담 아래 자신에게 적합한 시술로 만족도 높은 쌍꺼풀 라인을 연출할 수 있기 바란다."고 조언했다.</div>
        </div>
      </a>
      <a href="/column/3" class="column_box">
        <div class="colum_thumb">
          <img src="https://dformula.speedgabia.com/_alllitingps/column_thumb03.jpg" alt="[김지승 원장의 성형외과 이야기③] 절개법 쌍꺼풀 수술이 효과적인 눈은 따로 있다? ">
        </div>
        <div class="column_cont">
          <div class="column_title">[김지승 원장의 성형외과 이야기③] 절개법 쌍꺼풀 수술이 효과적인 눈은 따로 있다? </div>
          <div class="column_sum">Q.
            이제 성형이 연예인뿐 아니라 일반인 사이에도 크게 유행하면서 어느새 우리나라는 성형수술을 가장 많이 하는 국가로 손꼽힐 정도이다.

            특히 수술 후 큰 이미지 변화를 느낄 수 있으며 비교적 간단한 수술로 손꼽히는 쌍꺼풀 수술은 필수로까지 여겨지는 분위기가 팽배해지고 있는 가운데 최근 성형 트랜드가 빠른 회복과 티 나지 않는 자연스러움에 초점이 맞춰지면서 눈 성형 시에도 절개를 하지 않는 방법을 선호하는 편이다.

            하지만 눈은 얼굴에서 첫인상을 결정짓는 중요한 부분으로 쌍꺼풀 수술 시에도 환자 각각의 눈의 위치와 크기, 각도 등을 고려해 수술 계획을 세워야 하며 충분한 상담을 통해 매몰법, 부분절개법, 절개법 등을 선택해야 한다.

            특히 눈꺼풀이 늘어져 있어 제거가 필요하거나 눈위지방이나 근육이 심하게 두꺼워 눈이 상당히 두툼해 보이는 경우라면 절개법 쌍꺼풀 수술이 보다 적합하다. 안검하수가 있어 눈매교정이 필요하거나 1차 수술의 실패로 눈재수술이 필요한 경우, 눈처짐이 있는 경우 역시 절개법을 적용하게 된다.

            매몰쌍꺼풀 수술보다는 회복시간이 다소 오래 걸리지만 시간이 지나면 마찬가지로 자연스러운 결과를 얻을 수 있기에 크게 염려할 필요 없으며 오히려 보다 섬세하고 커진 눈을 원한다면 절개법 쌍꺼풀 수술에 대한 만족도가 높을 수 있다.

            그럼에도 불구하고 절개쌍꺼풀 수술에 대한 부담이 크다면 매몰법과 절개법의 중간 정도라 볼 수 있는 부분절개법을 적용한 쌍꺼풀 수술을 고려 해 보는 것이 좋다.

            위 눈꺼풀에 3개 정도의 작은 절개를 통해 지방을 제거하거나 불필요한 피부를 제거해 쌍꺼풀 라인을 만들어 주는 방법으로 최소 절개를 통해 매듭을 단단히 묶어주고 자연스러운 유착을 유도하기 때문에 자연스럽고 부드러운 쌍꺼풀 라인이 생겨난다.

            따라서 이미 상당히 보편화된 수술이라 할지라도 섣불리 수술을 결정하기 보다는 다양한 눈 성형 경험과 쌍꺼풀 수술법에 대한 노하우를 가진 전문의와 상담 후 수술 계획을 세우는 것이 바람직하다.

            한편, 최근에는 청소년들 사이 성형 열풍이 번져 겨울방학과 더불어 요즘과 같은 여름방학 시즌에도 성형외과들이 성수기를 맞는다고 할 정도로 진료 대기실이 상담자들로 붐비며 이에 발맞춰 다양한 이벤트들이 즐비하다.

            이에 눈 성형을 고려하던 학생들의 발길을 잡기에 충분할 터. 하지만 쌍꺼풀 수술 후 흉터가 생기는 등의 부작용이나 만족스럽지 못한 결과 등으로 수술 불만 건수가 가장 높아지는 시기이기도 한 만큼 병원 선택 및 수술 계획을 세우는 데 있어 보다 신중할 것을 거듭 당부하는 바이다.</div>
        </div>
      </a>
      <a href="/column/4" class="column_box">
        <div class="colum_thumb">
          <img src="https://dformula.speedgabia.com/_alllitingps/column_thumb04.jpg" alt="중년의 처지고 주름진 눈, 상안검 수술로 젊고 아름다운 눈매로 거듭날 수 있어">
        </div>
        <div class="column_cont">
          <div class="column_title">중년의 처지고 주름진 눈, 상안검 수술로 젊고 아름다운 눈매로 거듭날 수 있어</div>
          <div class="column_sum">나이가 들면 피부 탄력이 떨어지고 피부 조직도 늘어나게 되는데, 요즘처럼 동안 이미지가 각광 받는 사회 분위기에서는 얼굴에 나타나는 나이의 흔적이 반가울 리 없을 터.

            특히 눈은 나이에 따른 노화가 가장 빠르게 나타나는 부위로 눈처짐과 주름이 동반되는 경우가 많아 위 눈꺼풀이 점점 처지거나 눈 밑이 불룩해지면 더 나이 들어 보이고 피곤해 보이는 인상을 주기 십상이다.

            심한 경우 시야를 가려 일상생활에 불편을 주기도 하며, 눈을 크게 뜨려 노력하다 보면 이마의 주름도 점점 심해질 수밖에 없어 중년층의 고민을 키우고 있다.

            이와 관련해 김지승 원장은 중년 성형수술로 상안검수술을 추천한다. “눈은 다른 부위보다 피부 조직이 얇아 탄력 저하가 두드러질 수밖에 없다”고 운을 떼며, “늘어난 근육이나 피부조직을 당겨주는 상안검 수술로 눈처짐 현상을 개선하고 젊고 생기 있는 눈매를 기대할 수 있다”고 했다.

            상안검 수술은 절개 쌍꺼풀 수술과 비슷한 방법으로, 쌍꺼풀라인을 따라 절개 후 늘어진 피부와 근육, 지방을 적당히 제거 및 재배치한다. 개개인에 따라 쌍꺼풀의 모양 및 높이는 다양하게 만들 수 있다.

            경우에 따라 눈썹 밑 절개를 통해 쌍꺼풀을 만들지 않고도 상안검 수술을 할 수 있으며, 자연스럽게 본인의 젊은 눈매로 돌아갈 수 있어 중년층에게 특히 각광받고 있다

            더불어 필러나 지방이식 등으로 볼륨을 채워주면서 보톡스 등으로 잔주름을 개선한다면 더 큰 효과를 볼 수 있다는 것이 김지승 원장의 의견이다.


            이처럼 중년층의 상안검 수술은 눈처짐의 근본 원인을 해결해 줌으로써 아름답고 젊어 보이는 눈매를 연출할 수 있는 방법인 것은 사실이나 개인의 피부 탄력과 노화 정도, 증상 등을 충분히 고려해야 하는 만큼 성형외과 전문의와 상의하여 수술을 받는 것이 중요하다.

            특히 피부와 근육을 동시에 교정해 주어야 하므로 경험이 풍부한 전문의와 상의해 수술을 받아야 한다.

            한편, 김지승 원장은 “눈가 피부가 얇아지면서 지방이 밀려나와 눈 아래쪽이 심하게 볼록해졌다면 복합 하안검 수술로 함께 개선할 수 있다.”고 전한다.

            하안검 복합수술은 단순히 지방만을 제거하는 것이 아닌 눈 밑 주름과 지방 일부를 제거하고 늘어진 눈을 당겨줌으로써 효과가 오래 지속되며, 처진 지방과 주름은 물론 다크서클도 개선할 수 있다.

            따라서 눈꺼풀 처짐과 눈 밑 주름 등 노화로 인한 눈매의 변화로 스트레스를 받고 있다면 상안검 수술 및 복합 하안검 수술로 본인에게 맞는 ‘젊음’을 되찾아 보는 것은 어떨까.
          </div>
        </div>
      </a>

    </div>
  </div>
</div>
<!-- 올리팅 칼럼끝 -->


<!--생활건강지식인 시작-->
<div class="kin_sec">
  <a href="/jisikin">
    <img src="https://dformula.speedgabia.com/_alllitingps/mobile/kin.png" alt="지식 iN">
  </a>
</div>
<!--생활건강지식인 끝-->

<!-- 올리팅팝업 시작 -->
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
<!-- 올리팅 팝업 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH . '/tail.php');
