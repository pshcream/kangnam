<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH . '/head.php');
?>


<!--메인슬라이더시작-->
<div class="main_visual">
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_formulaclinic//mobile/main_slidem05.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_formulaclinic//mobile/main_slidem01.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_formulaclinic//mobile/main_slidem02.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_formulaclinic//mobile/main_slidem03.jpg" alt="　" loading="eager">
      </div>

      <div class="swiper-slide" style="overflow:hidden;">
        <img src="https://dformula.speedgabia.com/_formulaclinic//mobile/main_slidem04.jpg" alt="　" loading="eager">
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


<!-- 올리팅 의사슬라이드 시작 -->

<style>

</style>

<div class="formulaDoctor">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>FORMULA DOCTORS</h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/doctor_slideM01.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/doctor_slideM02.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/doctor_slideM03.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/doctor_slideM04.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/doctor_slideM05.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var formulaDoc = new Swiper('.formulaDoctor .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    speed: 1000,
    direction: "horizontal",
    autoplay: {
      delay: 10000,
    },
  });
</script>
<!-- 올리팅 의사슬라이드 끝 -->

<!-- 올리팅 세대별 추천 시술 시작 -->
<!--  -->
<style>
  #wrapper {
    padding-top: 18vw;
  }

  .theolimAge {
    padding: 3.75rem 0;
    background: #F8F6F4;
  }

  .theolimAge .wrappers {
    width: 100%;
    margin: 0 auto;
  }

  .theolimAge .mainTitle {
    text-align: center;
  }

  .theolimAge .age_box {
    width: 47.5vw;
    height: 31.7vw;
    margin-right: 5vw;
    display: inline-block;
    position: relative;
    float: left;
    text-align: center;
    margin-bottom: 4vw;
  }

  .theolimAge .mainTitle h2 {
    line-height: 5.6vw;
    font-size: 5.6vw;
    font-weight: 800;
    color: #333;
    vertical-align: top;
    margin-right: 2px;
    font-family: 'Montserrat';
    padding-bottom: 1.875rem !important;
  }

  .theolimAge .wrappers .age_list div.age_box:nth-child(3n+1) {
    /* background: #D1E4E8; */
  }

  .theolimAge .wrappers .age_list div.age_box:nth-child(3n+2) {
    /* background: #D9D8E8; */
  }

  .theolimAge .wrappers .age_list div.age_box:nth-child(n+4) {
    margin-bottom: 0;
  }

  .theolimAge .wrappers .age_list div.age_box:nth-child(2n) {
    /* background: #E4DAD9; */
    margin-right: 0;
  }

  /* .theolimAge .wrappers .age_list div.age_box:nth-child(n+4) {
      margin-bottom: 50px
    } */

  .theolimAge .age_box img {
    width: auto;
    height: 100%;
  }

  .theolimAge .age_link {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    text-align: center;
    background: rgb(103, 192, 183, 0.4);
    opacity: 1;
    color: white;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .theolimAge .age_link span {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    transform: translate(-50%, -50%);
  }

  /* .theolimAge .age_box:hover .age_link {
    opacity: 0.7;
    cursor: pointer;
  } */

  .clearfix:before,
  .clearfix:after {
    display: block;
    content: '';
    line-height: 0;
  }

  .clearfix:after {
    clear: both;
  }

  .clearfix {
    *zoom: 1;
  }
</style>
<!--  -->
<div class="theolimAge">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>FORMULA TREATMENT FOR YOU</h2>
    </div>
    <div class="age_list">
      <!--  -->
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_w30.jpg" alt="">
        <a href="/recommend/30w/#start" class="age_link" data-age="30">
          <span>30대여성 추천시술</span>
        </a>
      </div>
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_m30.jpg" alt="">
        <a href="/recommend/30m/#start" class="age_link" data-age="30">
          <span>30대남성 추천시술</span>
        </a>
      </div>
      <!--  -->
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_w40.jpg" alt="">
        <a href="/recommend/40w/#start" class="age_link" data-age="40">
          <span>40대여성 추천시술</span>
        </a>
      </div>
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_m40.jpg" alt="">
        <a href="/recommend/40m/#start" class="age_link" data-age="40">
          <span>40대남성 추천시술</span>
        </a>
      </div>
      <!--  -->
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_w50.jpg" alt="">
        <a href="/recommend/50w/#start" class="age_link" data-age="50">
          <span>50대이상여성 추천시술</span>
        </a>
      </div>
      <div class="age_box">
        <img src="https://dformula.speedgabia.com/_formulaclinic/age_m50.jpg" alt="">
        <a href="/recommend/50m/#start" class="age_link" data-age="50">
          <span>50대이상남성 추천시술</span>
        </a>
      </div>
      <!--  -->
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- 올리팅 세대별 추천 시술 끝 -->
<!--올리팅 시술 시작-->

<style>
  .kin_sec img {
    width: 100%;
    border: 1px solid rgb(0, 0, 0, 0.1);
  }

  .theolimSurgery {
    padding: 3.75rem 0;
    background: #f5e9ec;
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
          <img src="https://dformula.speedgabia.com/_formulaclinic/treatment_model01.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#모공 #흉터 #개인맞춤 #복합시술<br>#완전정복</p>
            <p class="name">흉터/모공치료</p>
            <p class="content">흉터/모공의 특성에 따른 1:1 맞춤치료로 손상된 피부 개선</p>
          </div>
          <a href="/skincare/pore-scar.php" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>
        <!--  -->
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/treatment_model02.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#기미 #주근깨잡티 #색소치료<br>#색소레이저</p>
            <p class="name">기미 복합치료</p>
            <p class="content">색소 양상에 맞는 다양한 프리미엄 레이저로 기미, 잡티, 주근깨, 오타모반 등을 말끔하게!</p>
          </div>
          <a href="/skincare/" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>
        <!--  -->
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/treatment_model03.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#내시경이마리프팅 #더블로골드 #안티에이징<br>#디에이징</p>
            <p class="name">리프팅</p>
            <p class="content">얼굴에 맞는 섬세한 디자인으로 V라인 맞춤 솔루션! 어느 각도에서도 자신있는 V라인!</p>
          </div>
          <a href="/face/" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>
        <!--  -->
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/treatment_model04.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#홍조 #혈관치료 #주사질환치료<br>#복합치료</p>
            <p class="name">홍조/주사</p>
            <p class="content">올리팅눈재수술전문병원의 정밀한 진단으로 원인과 피부 상태에 따라 복합적인 맞춤치료</p>
          </div>
          <a href="/skincare/acne-blush.php" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>
        <!--  -->
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/treatment_model05.jpg" alt="">
          <div class="surgery_type">
            <p class="hashtag">#여드름 #여드름완전정복 #원인치료<br>#맞춤치료</p>
            <p class="name">여드름</p>
            <p class="content">올리팅눈재수술전문병원의 개인별 1:1 맞춤 진료로 원인부터 해결하고 재발을 억제하는 여드름 치료</p>
          </div>
          <a href="/skincare/acne-blush.php" class="link_button">+</a>
          <div class="dark_cover"></div>
        </div>
      </div>
      <!--  -->
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
      <!--  -->
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

<!-- 올리팅플랜1,2 시작-->

<style>
  .theolim_plan {
    padding: 3.75rem 0;
    background: #F8F6F4;
  }

  .theolim_plan2 {
    background: #F8F6F4;
  }

  .theolim_plan .wrappers {
    width: 100%;
    margin: 0 auto;
  }

  .theolim_plan .mainTitle {
    text-align: left;
  }

  .theolim_plan .mainTitle h2 {
    line-height: 5.6vw;
    font-size: 5.6vw;
    font-weight: 800;
    color: #333;
    vertical-align: top;
    margin-right: 2px;
    font-family: 'Montserrat';
    padding-bottom: 1.875rem !important;
    padding-left: 10px;
  }

  .theolim_plan img {
    width: 100%;
  }

  .theolim_plan .swiper-container {
    padding-left: 10vw;
    padding-right: 10vw;
  }

  .theolim_plan .swiper-slide {
    margin-right: 4vw;
    position: relative;
  }
</style>

<div class="theolim_plan theolim_plan1">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>FORMULA PLAN</h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/theolim_deviceM01.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/theolim_deviceM02.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/theolim_deviceM03.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/theolim_deviceM04.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var olimPlan = new Swiper('.theolim_plan .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    speed: 200,
    direction: "horizontal",
    autoplay: {
      delay: 6000,
    },
    // navigation: {
    //   nextEl: ".theolimSurgery .swiper-button-next",
    //   prevEl: ".theolimSurgery .swiper-button-prev",
    // },
    // freeMode: true
  });
</script>


<!-- 올리팅플랜1,2 끝-->

<!-- 올리팅 기기슬라이드 시작 -->
<style>
  .ddModel.wrapper {
    margin: 0;
    background: #f5e9ec;
    padding: 3.75rem 10px !important;
  }

  .ddModel .mainTitle h2 {
    line-height: 1;
    padding-bottom: 1.875rem;
  }

  .ddModel .swiper-slide {
    width: 39%;
    margin-right: 1%;
  }

  .deviceSlider {
    padding: 3.75rem 0;
    background: #f5e9ec;
  }

  .deviceSlider .wrappers {
    margin: 0 auto;
  }

  .deviceSlider .mainTitle h2 {
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

  .deviceSlider .swiper-container {
    padding: 0 10vw;
  }

  .deviceSlider .swiper-slide {
    width: 100%;
    margin-right: 4vw;
    height: 97vw;
    background-size: cover !important;
    padding-top: 10vw;
    padding-left: 10vw;
    border-radius: 7vw;
    border: 1px solid #472B33;
    background-repeat: no-repeat !important;
    opacity: 0.5;
  }

  .deviceSlider .swiper-slide .device_name div {
    text-align: left;
    font-size: 1.1rem;
    letter-spacing: -0.06rem;
    line-height: 1.6rem;
    color: rgb(0, 0, 0);
    font-family: NotoSansKRLight, "sans-serif";
    word-break: keep-all;
  }

  .deviceSlider .swiper-slide .device_name p {
    text-align: left;
    font-size: 1.7rem;
    letter-spacing: 0rem;
    line-height: 2.2rem;
    color: rgb(0, 0, 0);
    font-family: NotoSansKRBold, "sans-serif";
    padding-top: 0.312rem !important;
    padding-bottom: 4.5rem !important;
    word-break: keep-all;
  }

  .deviceSlider .swiper-slide .device_detail {
    cursor: pointer;
    display: block;
    font-family: 'NotoSansKRLight', 'sans-serif';
    font-size: 1rem;
    width: 9.5rem;
    height: 2.5rem;
    -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    -ms-border-radius: 5px 5px 5px 5px;
    -khtml-border-radius: 5px 5px 5px 5px;
    -o-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    background-color: #472B33;
    color: white;
    line-height: 2.5rem;
    text-align: center;
    letter-spacing: 1px;
    margin-top: -2.5rem;
  }

  .deviceSlider .swiper-slide .device_detail:hover {
    background: black;
  }

  .deviceSlider .swiper-slide.swiper-slide-active {
    opacity: 1;
    border: 2px solid #472B33;
  }

  .deviceSlider .swiper-button-prev {
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 35px;
    height: 35px;
  }

  .deviceSlider .swiper-button-prev:after {
    content: '\e93d';
    font-family: xeicon;
    color: #fff;
    font-size: 35px;
    position: absolute;
    bottom: 0;
    left: -110px;
    background: grey;
    width: 60px;
    height: 60px;
    border-radius: 100%;
    line-height: 60px;
    text-align: center;
    padding-right: 6px;
  }

  .deviceSlider .swiper-button-prev:hover::after {
    background: black;
  }

  .deviceSlider .swiper-button-next {
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 35px;
    height: 35px;
  }

  .deviceSlider .swiper-button-next:after {
    content: '\e940';
    font-family: xeicon;
    color: #fff;
    font-size: 35px;
    position: absolute;
    bottom: 0;
    right: -110px;
    background: grey;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    border-radius: 100%;
    padding-left: 6px;
  }

  .deviceSlider .swiper-button-next:hover::after {
    background: black;
  }
</style>

<div class="deviceSlider">
  <div class="wrappers">
    <div class="mainTitle">
      <h2>FORMULA DEVICE</h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device02.jpg)" alt="더블로골드">
          <div class="device_name">
            <div>HIFU장비 더블로골드로 강력한 리프팅</div>
            <p>더블로골드</p>
          </div>
          <a href="/device/#shrink" class="device_detail">자세히 보기 +</a>
        </div>
        <!--  -->
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device03.jpg)" alt="인모드">
          <div class="device_name">
            <div>토탈 페이스 리프팅</div>
            <p>인모드</p>
          </div>
          <a href="/device/#inmode" class="device_detail">자세히 보기 +</a>
        </div>
        <!--  -->
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device05.jpg)" alt="네오빔">
          <div class="device_name">
            <div>피지를 억제해 여드름 개선</div>
            <p>네오빔</p>
          </div>
          <a href="/device/#neobim" class="device_detail">자세히 보기 +</a>
        </div>
        <!--  -->
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device06.jpg)" alt="실펌X">
          <div class="device_name">
            <div>기미, 색소, 홍조, 흉터, 탄력을 한번에</div>
            <p>실펌X</p>
          </div>
          <a href="/device/#silperm" class="device_detail">자세히 보기 +</a>
        </div>
        <!--  -->
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device07.jpg)" alt="내시경이마리프팅">
          <div class="device_name">
            <div>수술없이 주름과 처진 피부를 싹~</div>
            <p>내시경이마리프팅</p>
          </div>
          <a href="/device/#ulsera" class="device_detail">자세히 보기 +</a>
        </div>
        <!--  -->
        <div class="swiper-slide" style="background:url(https://dformula.speedgabia.com/_formulaclinic/olim_device08.jpg)" alt="아쿠아필">
          <div class="device_name">
            <div>피부 속 노폐물 제거와 영양 보충</div>
            <p>아쿠아필</p>
          </div>
          <a href="/device/#aquafill" class="device_detail">자세히 보기 +</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var deviceSlider = new Swiper('.deviceSlider .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    speed: 200,
    direction: "horizontal",
    autoplay: {
      delay: 3000,
    },
  });
</script>
<!-- 올리팅 기기슬라이드 끝 -->

<!--생활건강지식인 시작-->
<div class="kin_sec">
  <a href="/jisikin">
    <img src="https://dformula.speedgabia.com/_formulaclinic/mobile/kin.png" alt="지식 iN">
  </a>
</div>
<!--생활건강지식인 끝-->

<!-- 올리팅팝업 시작 -->
<!-- 팝업슬라이드시작 -->
<style>
  /* popup_slide 시작 */

  .st-popup {
    visibility: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9999;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .st-popup.on {
    visibility: visible;
    overflow-x: hidden;
    overflow-y: auto;
    z-index: 9999;
  }

  .stp-wrap {
    position: fixed;
    /* width: 82.4vw; */
    width: 100%;
    height: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 100;
    max-width: 300px;
  }

  .st-popup.on .stp-wrap {
    display: block;
  }

  .stp-wrap>.swiper-container {
    background-color: #c4c7ce;
  }

  .stp-wrap .stp-img a {
    display: block;
  }

  .stp-wrap .stp-img img {
    display: block;
    border: 0;
    /* width: 82.4vw !important; */
    width: 100% !important;
    max-width: 300px;
    height: auto !important;
  }

  .stp-wrap .stp-btn {
    overflow: hidden;
    background-color: #303231;
    position: absolute;
    /* bottom: calc(-10vw - 34px); */
    width: 100%;
    top: -40px;
    height: 40px;
  }


  .stp-wrap .stp-btn button {
    position: relative;
    float: left;
    color: #fff;
    font-size: 13px;
    cursor: pointer;
    background: transparent;
    border: none;
    padding: 12px;
    /* width: 50%; */
    line-height: 1;
    font-weight: bold;
  }

  .stp-wrap .stp-btn button:last-child {
    float: right;
    /* border-left: 1px solid white; */
    padding: 7.5px;
  }

  .stp-wrap .stp-btn button:last-child img {
    width: 20px;
    height: 20px;
    margin: 2.5px;
  }

  /*swiper popup */
  .stp-wrap .swiper-pagination {
    display: -webkit-flex;
    -webkit-flex-flow: row wrap;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    height: 10vw;
    background: #fff;
    cursor: pointer;
    bottom: -10vw;
    user-select: none;
    left: 0;
  }

  .stp-wrap .swiper-pagination-bullets .swiper-pagination-bullet {
    position: relative;
    width: 100%;
    height: 100%;
    border-radius: 0;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin: 0;
    border-top: 1px solid #ddd;
    background: #fff;
    text-align: center;
    opacity: 1;
    outline: 0;
  }

  .stp-wrap .swiper-pagination-bullets .swiper-pagination-bullet::before {
    content: "";
    position: absolute;
    left: 0;
    width: 1px;
    height: 100%;
    background: #d9d9d9;
  }

  .stp-wrap .swiper-pagination-bullet-active {
    color: #ac3539;
    font-weight: 600;
  }

  .stp-wrap .swiper-pagination-bullets .swiper-pagination-bullet>p {
    width: 100%;
    height: 100%;
    display: inline-table;
    vertical-align: top;
    padding: 0 3px;
    margin: 0;
  }

  .stp-wrap .swiper-pagination-bullets .swiper-pagination-bullet>p>span {
    display: table-cell;
    line-height: 1.1;
    word-break: keep-all;
    vertical-align: middle;
    font-size: 12px;
  }

  /* popup_slide끝 */


  .st-popup .swiper-button-prev {
    left: 17px;
    top: calc(50% - 20px);
    transform: translateY(-50%);
    width: 35px;
    height: 35px;
    z-index: 999;
    -webkit-tap-highlight-color: transparent;
  }

  .st-popup .swiper-button-prev:after {
    content: "\e93d";
    font-family: xeicon;
    color: white;
    font-size: 25px;
    position: absolute;
    bottom: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    font-weight: 900;
    -webkit-tap-highlight-color: transparent;
    background: rgb(0, 0, 0, 0.4);
    padding-right: 5px;
    left: 0;
    left: calc(50vw - 167px);
  }

  .st-popup .swiper-button-next {
    right: 17px;
    top: calc(50% - 20px);
    transform: translateY(-50%);
    width: 35px;
    height: 35px;
    z-index: 999;
    -webkit-tap-highlight-color: transparent;
  }

  .st-popup .swiper-button-next:after {
    content: "\e940";
    font-family: xeicon;
    color: white;
    font-size: 25px;
    position: absolute;
    bottom: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    font-weight: 900;
    -webkit-tap-highlight-color: transparent;
    background: rgb(0, 0, 0, 0.4);
    padding-left: 5px;
    right: 0;
    right: calc(50vw - 167px);
  }

  /* @media (min-width: 481px) {
    .st-popup .swiper-button-prev:after {
      left: calc(50vw - 20vh - 50px);
    }

    .st-popup .swiper-button-next:after {
      right: calc(50vw - 20vh - 50px);
    }
  } */
</style>

<script>
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
</script>

<div id="mainTabPopup1" class="st-popup" role="alertdialog" aria-modal="true" aria-hidden="true">
  <div class="stp-wrap">
    <div class="mainTabPopup autoPlay-swiper">
      <div class="swiper-container">
        <div class="mainTabSlideWrap swiper-wrapper">

          <div class="swiper-slide" data-title="얼굴지방 V라인 이벤트">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM02.jpg" alt="" />
            </div>
          </div>
          <div class="swiper-slide" data-title="생활건강한의원 오픈이벤트">
            <div class="stp-img">
              <img class="" src="https://dformula.speedgabia.com/_formulaclinic/mobile/popup_slideM01.jpg" alt="" />
            </div>
          </div>

          <!--  -->
        </div>
      </div>
      <!-- <div class="mainTabBottom swiper-pagination"></div> -->
    </div>
    <div class="stp-btn">
      <button type="button" class="" onclick="closePopup('1', 1);"><input type="checkbox" class="" onclick="closePopup('1', 1);" style="margin-bottom: 2px; margin-right: 1px;">
        오늘하루 그만보기
      </button>
      <button type="button" class="" onclick="closePopup('1', 2);"><img src="https://dformula.speedgabia.com/all/close.png" onclick="closePopup('1', 2);"></button>
    </div>
  </div>

  <!--  -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <!--  -->
</div>

<script>
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
</script>
<!--//swiper event 팝업 -->

<!-- popup -->
<script>
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
</script>
<!--//swiper event 팝업 -->
<!-- 슬라이드팝업끝 -->
<!-- 올리팅 팝업 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH . '/tail.php');
