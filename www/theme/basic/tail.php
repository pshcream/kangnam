<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
  include_once(G5_THEME_MOBILE_PATH . '/tail.php');
  return;
}
?>

</div>
<style>
  .quick_list {
    background: #472B33;
  }

  .quick01 li:nth-of-type(1) a {
    background: white;
    border-top: 1px solid #f2f2f2;
  }

  .quick01 li:nth-of-type(2) a {
    background: white;
  }

  .quick01 li:nth-of-type(3) a {
    background: white;
  }

  .quick01 li:nth-of-type(4) a {
    background: white;
  }

  .quick01 li:nth-of-type(5) a {
    background: white;
  }

  .quick01 li:nth-of-type(1):hover a {
    background: #472B33;
  }

  .quick01 li:nth-of-type(2):hover a {
    background: #472B33;
  }

  .quick01 li:nth-of-type(3):hover a {
    background: #472B33;
  }

  .quick01 li:nth-of-type(4):hover a {
    background: #472B33;
  }

  .quick01 li:nth-of-type(5):hover a {
    background: #472B33;
  }

  .quick_list .quick02 li img {
    width: 30px;
    cursor: pointer;
  }

  .quick_list .quick02 div {
    color: white;
    font-weight: bold;
    font-size: 15px;
    position: absolute;
    cursor: pointer;
    bottom: 32px;
  }

  .quick_list .quick02 li {
    padding-top: 10px;
  }

  .quick_list .quick02 li:after {
    content: '\e944';
    font-family: xeicon;
    font-size: 20px;
    color: white;
    cursor: pointer;
  }
</style>



<!--퀵메뉴추가-->

<div class="quick_wrap">
  <div class="black_bg"></div>
  <div class="quick_list" id="quick_list">
    <ul class="quick01">
      <li style="display: none;">
        <a href="https://pf.kakao.com/_HJgJb/chat" target="_blank">
          <span></span>
          <p>카톡상담</p>
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UC6wAkhYi51UXAmZSO7lPJmA/videos" target="_blank">
          <span></span>
          <p>유튜브</p>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/alllitingps/" target="_blank">
          <span></span>
          <p>인스타그램</p>
        </a>
      </li>
      <li>
        <a href="https://blog.naver.com/psdrhyo" target="_blank">
          <span></span>
          <p>블로그</p>
        </a>
      </li>
      <li>
        <a href="/life-health-introduction/way-to-come-and-treatment-hours/#start">
          <span></span>
          <p>찾아오는길</p>
        </a>
      </li>
    </ul>
    <ul class="quick02" id="quick02" onclick="topFunction()">
      <li>
      </li>
      <div>TOP</div>
    </ul>
  </div>
  <!-- 탑버튼 기능 시작 -->
  <script>
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  </script>
  <!-- 탑버튼 기능 끝 -->
  <!--퀵메뉴펼치기스크립트시작-->
  <script>
    function myFunction() {
      var x = document.getElementById("quick_list", "quick_close", "quick_open");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
  <!--퀵메뉴펼치기스크립트끝-->
</div>
<!--하단상담신청란시작-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<script language="javascript">
  function showPopup() {
    window.open("/popup.php", "a", "width=450, height=300, left=350, top=80")
    window.opener.popUpClosed();
  }
</script>
<div class="" style="">
  <form method="post" name="newftFrm" id="gform" data-email="dodreamdb@gmail.com" action="https://script.google.com/macros/s/AKfycbwrEeC6IZy6SvN4_LkOefTLxA2cz83iBAfs3a47/exec" class="gform">
    <div id="fixedConsult">
      <div class="wrappers">
        <div class="txtWrap">
          <div>
            <p class="fixedName"><input type="text" name="u_name" id="fn_name" placeholder="성함" style="font-family: 'S-CoreDream-5Medium';" required></p>
            <p class="fixedPhone"><input type="text" name="u_cell" id="fn_cell" placeholder="연락처" style="font-family: 'S-CoreDream-5Medium';" required></p>
          </div>
          <div class="last">
            <p class="fixedPrivacy"><label><input type="checkbox" id="fn_privacy" name="fixedPrivacy" required checked> 개인정보처리방침 동의 <a href="/bbs/content.php?co_id=privacy" target="_blank">[자세히보기]</a> </label></p>
            <div class="fixedPart">
              <ul>
                <li><label><input type="radio" name="call_type" value="전화" checked> 전화 <i class="xi-call" style="margin-right:2vw"></i></label></li>
                <li><label><input type="radio" name="call_type" value="카톡"> 카톡 <i class="xi-kakaotalk"></i></label></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="btnWrap">
          <p class="fixedType">
            <select id="fn_type" name="u_type" required>
              <option value="">진료과목을 선택하세요</option>
              <option value="다이어트프로그램">다이어트프로그램</option>
              <option value="눈매교정">눈매교정</option>
              <option value="눈재수술">눈재수술</option>
              <option value="남자눈성형">남자눈성형</option>
              <option value="중년눈성형">중년눈성형</option>
              <option value="눈밑수술">눈밑수술</option>
              <option value="트임성형">트임성형</option>
              <option value="지방이식/이물질제거">지방이식/이물질제거</option>
              <option value="기타">기타</option>
            </select>
          </p>
          <button class="fixedSubmit" onclick="showPopup();"> 상담신청 </button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Submit the Form to Google Using "AJAX" -->
<script data-cfasync="false" type="text/javascript" src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
</div>
</div>
<!-- } 콘텐츠 끝 -->
<hr>
<!-- 하단 시작 { -->
<div id="ft">
  <div id="ft_wr">
    <div id="ft_link" class="ft_cnt">
      <a href="/bbs/board.php?bo_table=info">회사소개</a>
      <a href="/bbs/content.php?co_id=privacy">개인정보처리방침</a>
      <a href="/bbs/content.php?co_id=provision">서비스이용약관</a>
      <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
    </div>
    <div id="ft_company" class="ft_cnt">
      <h2>사이트 정보</h2>
      <p class="ft_info">
        회사명 : 회사명 / 대표 : 대표자명<br>
        주소 : OO도 OO시 OO구 OO동 123-45<br>
        사업자 등록번호 : 123-45-67890<br>
        전화 : 02-123-4567 팩스 : 02-123-4568<br>
        통신판매업신고번호 : 제 OO구 - 123호<br>
        개인정보관리책임자 : 정보책임자명<br>
      </p>
    </div>
    <?php
    //공지사항
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/notice', 'notice', 4, 13);
    ?>
    <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
    ?>
  </div>
  <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
  <!--최하단편집 시작-->
  <div class="footerTop wrappers" style="height:fit-content; background:#f4f4f4">
    <div class="footer_cs">
      <h2>INFORMATION</h2>
      <div class="con05_time">
        <div class="phone">
          <img src="https://dformula.speedgabia.com/_dodreamhairplant/con05_time_img01.png" alt="대표상담전화">
          <p>대표상담전화</p>
          <div>02-3477-9924</div>
        </div>
        <div class="time">
          <div class="ad">서울시 서초구 고무래로 22,<br> 쌍동빌딩 서관2층 </div>
          <div class="tm">
            <table>
              <tr>
                <td>월/금</td>
                <td>10:00~19:00</td>
              </tr>
              <tr>
                <td>금</td>
                <td>10:00~20:00</td>
              </tr>
              <tr>
                <td>토</td>
                <td>10:00~14:00</td>
              </tr>
              <tr>
                <td>목/일/공휴일</td>
                <td>휴진</td>
              </tr>
            </table>
          </div>
          <a class="fr" href="https://map.naver.com/v5/search/%EA%B9%80%EC%A7%80%EC%8A%B9%ED%95%9C%EC%9D%98%EC%9B%90/place/35075169?c=14138740.2669530,4509383.7864638,19,0,0,0,dh&isCorrectAnswer=true" target="_blank">빠른길 찾기</a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=50c538b298d8c5aef8359ade8f7dd5a5"></script>
    <div class="footer_map">
      <h2>LOCATION</h2>
      <div id="dd_map">
      </div>

      <script>
        var mapContainer = document.getElementById('dd_map'), // 지도를 표시할 div 
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

      <ul>
        <li>사평역 2번출구 도보 5분</li>
      </ul>
    </div>
    <div class="footer_sns">
      <h2>WITH ALL LITING</h2>
      <ul class="sns">
        <!-- <li><a href="https://www.facebook.com/%ED%8F%AC%EB%AE%AC%EB%9D%BC%EC%9D%98%EC%9B%90-%EB%AA%A8%EB%B0%9C%EC%9D%B4%EC%8B%9D%ED%81%B4%EB%A6%AC%EB%8B%89-104330572177168" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic/mobile/float_facebook.png" alt="생활건강한의원 한방다이어트병원 페이스북" title=""></a></li> -->
        <li><a href="https://www.instagram.com/alllitingps/" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic//mobile/float_instagram.png" alt="생활건강한의원 한방다이어트병원 인스타그램" title=""></a></li>
        <!-- <li><a href="https://pf.kakao.com/_HJgJb/chat" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic//mobile/float_kakao.png" alt="생활건강한의원 한방다이어트병원 카카오톡채널"></a></li> -->
        <li><a href="https://www.youtube.com/channel/UC6wAkhYi51UXAmZSO7lPJmA/videos" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic//mobile/float_youtube01.png" alt="생활건강한의원 한방다이어트병원 유튜브" title=""></a></li>
        <li><a href="https://blog.naver.com/psdrhyo" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic//mobile/float_blog.png" alt="생활건강한의원 한방다이어트병원 네이버클로그"></a></li>
        <!-- <li><a href="https://booking.naver.com/booking/13/bizes/261618/items/3162300?area=bmp" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic//mobile/float_reservation.png" alt="생활건강한의원 한방다이어트병원 네이버예약"></a></li> -->
      </ul>
      <h2 class="last">LANGUAGE</h2>
      <ul class="lang">
        <li><a href="/"><img src="/theme/hospital/img/korea.jpg" alt="생활건강한의원 한방다이어트병원 한국어페이지 이동" title=""></a></li>
      </ul>
      <h2 class="family">FAMILY SITE</h2>
      <div class="family_img">
        <a href="https://alllitingclinic.com/" target="_blank"><img src="https://dformula.speedgabia.com/_alllitingps/link_lifting.gif" alt="생활건강한의원 모발이식클리닉센터 이동" title=""></a>
      </div>
    </div>
  </div>
  <!--최하단추가 시작--->
  <div class="foot_con02">
    <ul>
      <li><a href="/bbs/content.php?co_id=provision" target="_blank">회원약관</a><span></span></li>
      <li><a href="/bbs/content.php?co_id=privacy" target="_blank">개인정보취급방침</a></li>
    </ul>
  </div>
  <div class="foot_con03">
    <img src="https://dformula.speedgabia.com/_alllitingps/all_liting_ps_logo_white.png">
    <p class="add">
      의료기관명칭 : 생활건강한의원 | 대표원장 : 김지승 | 사업자등록번호 : 114-91-17400<br>주소지 : 서울시 서초구 고무래로 22, 쌍동빌딩 서관2층

    </p>
    <p class="info">
    </p>
    <p class="cp_ryt">
      <!--COPYRIGHT ⓒ 2019 DODREAMPS.COM ALL RIGHT PRESERVED-->
    </p>
  </div>
  <!--최하단추가 끝-->
  <!--모바일에서만 보이는 모바일화면바로가기 시작--->
  <button type="button" id="top_btn">
    <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
  </button>
  <script>
    $(function() {
      $("#top_btn").on("click", function() {
        $("html, body").animate({
          scrollTop: 0
        }, '500');
        return false;
      });
    });
  </script>
</div>

<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
  echo $config['cf_analytics'];
}
?>
<!-- } 하단 끝 -->
<script>
  $(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
  });
</script>
<?php
include_once(G5_THEME_PATH . "/tail.sub.php");
