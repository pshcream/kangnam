<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
</div>
</div>

<!--
< ?php echo poll('theme/basic'); // 설문조사 ?>
< ?php echo visit('theme/basic'); // 방문자수 ?>
-->
<!--하단상담신청란시작-->

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">


<!-- 퀵메뉴시작 -->
<script>
  $(document).ready(function() {

    setTimeout(function() {
      $("#fixedConsult").removeClass('on');
      $(".mobile_quick").removeClass('on');
    }, 1000)
    // 스크롤시작    

    $(window).scroll(function() {
      $(".bigmenu_slider").addClass('on');
      $(".submenu_slider").addClass('on');
      $("#fixedConsult").addClass('on');
      $(".mobile_quick").addClass('on');
    });

    // 스크롤멈춤
    $.fn.scrollStopped = function(callback) {
      var that = this,
        $this = $(that);
      $this.scroll(function(ev) {
        clearTimeout($this.data('scrollTimeout'));
        $this.data('scrollTimeout', setTimeout(callback.bind(that), 1000, ev));
      });
    };

    $(window).scrollStopped(function(ev) {
      $("#fixedConsult").removeClass('on');
      $(".mobile_quick").removeClass('on');
      $(".bigmenu_slider").removeClass('on');
      $(".submenu_slider").removeClass('on');
      console.log(3);
    });
  });
</script>

<style>
  #fixedConsult.on {
    bottom: -110px;
    transition: 0.1s;
  }

  .mobile_quick {
    position: fixed;
    right: 10px;
    display: block;
    z-index: 999;
    bottom: 120px;
    transition: 0.1s;
  }

  .mobile_quick.on {
    right: -50px;
  }

  .mobile_quick .quickM {
    display: block;
    width: 40px;
    height: 40px;
    margin-bottom: 10px;
  }

  .mobile_quick .quickM.tel {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_call01.png);
    background-size: cover;
  }

  .mobile_quick .quickM.kakao {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_kakao.png);
    background-size: cover;
  }

  .mobile_quick .quickM.instagram {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_instagram.png);
    background-size: cover;
  }

  .mobile_quick .quickM.facebook {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_facebook.png);
    background-size: cover;
  }

  .mobile_quick .quickM.youtube {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_youtube01.png);
    background-size: cover;
  }

  .mobile_quick .quickM.blog {
    background: url(https://dformula.speedgabia.com/_formula/mobile/float_blog.png);
    background-size: cover;
  }

  .mobile_quick .quickM.reservation {
    background: url(/theme/hospital/img/float_reservation.png);
    background-size: cover;
  }
</style>

<div class="mobile_quick on">
  <!-- <a href="tel:010-9220-1537" class="quickM tel"></a> -->
  <!-- <a href="https://pf.kakao.com/_HJgJb/chat" target="_blank" class="quickM kakao"></a> -->
  <a href="https://www.instagram.com/alllitingps/" target="_blank" class="quickM instagram"></a>
  <!-- <a href="https://www.facebook.com/%ED%8F%AC%EB%AE%AC%EB%9D%BC%EC%9D%98%EC%9B%90-%EB%AA%A8%EB%B0%9C%EC%9D%B4%EC%8B%9D%ED%81%B4%EB%A6%AC%EB%8B%89-104330572177168" target="_blank" class="quickM facebook"></a> -->
  <a href="https://www.youtube.com/channel/UC6wAkhYi51UXAmZSO7lPJmA/videos" target="_blank" class="quickM youtube"></a>
  <a href="https://blog.naver.com/psdrhyo" target="_blank" class="quickM blog"></a>
  <!-- <a href="https://booking.naver.com/booking/13/bizes/261618/items/3162300?area=bmp" target="_blank" class="quickM reservation"></a> -->
</div>
<!-- 퀵메뉴끝 -->

<script>
  function showPopup() {
    window.open("/popup.php", "a", "width=450, height=300, left=350, top=80"); {
      window.opener.popUpClosed()
    }
  }
</script>


<div class="" style="">
  <form method="post" name="newftFrm" id="gform" data-email="dodreamdb@gmail.com" action="https://script.google.com/macros/s/AKfycbwrEeC6IZy6SvN4_LkOefTLxA2cz83iBAfs3a47/exec" class="gform">
    <!--<input type="hidden" name="kind" value="footer_consult">
        <input type="hidden" name="page" value="/m/index.php"> -->
    <div id="fixedConsult" class="on">
      <div class="wrapper">
        <div class="txtWrap">
          <div>
            <p class="fixedName"><input type="text" name="u_name" id="fn_name" placeholder="성함" style="font-family: 'S-CoreDream-5Medium';" required></p>
            <p class="fixedPhone"><input type="text" name="u_cell" id="fn_cell" placeholder="연락처" style="font-family: 'S-CoreDream-5Medium';" required></p>
          </div>
          <div class="last">
            <p class="fixedPrivacy"><label><input type="checkbox" id="fn_privacy" name="fixedPrivacy" required checked> 개인정보처리방침 동의 <a href="/bbs/content.php?co_id=privacy&device=mobile" target="_blank">[자세히보기]</a> </label></p>
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
            <select id="fn_type" name="u_type" required="">
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

    <!--  <input type="hidden" name="tableName" id="tableName" value="footer_consult" />
		<input type="hidden" name="cmd" value="write"> -->

    <!-- Customise the Thankyou Message People See when they submit the form: -->

  </form>



</div>




<!-- Submit the Form to Google Using "AJAX" -->
<script data-cfasync="false" type="text/javascript" src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
<!-- <script data-cfasync="false" type="text/javascript"
  src="/form-submission-handler.js"></script> -->
<!--하단상담신청란끝-->



<!---하단상담신청시작-->
<!--
<div class="" style="">
	<form method="post" name="newftFrm" id="newftFrm" action="/m/process.php">
        <input type="hidden" name="kind" value="footer_consult">
        <input type="hidden" name="page" value="/m/index.php">
		<div id="fixedConsult">
			<div class="wrapper">
				<div class="txtWrap">
					<div>
						<p class="fixedName"><input type="text" name="name" id="fn_name" placeholder="이름"></p>
						<p class="fixedPhone"><input type="text" name="cell" id="fn_cell" placeholder="연락처"></p>
					</div>
					<div class="last">
						<p class="fixedPrivacy"><label><input type="checkbox" id="fn_privacy" name="fixedPrivacy"> 개인정보처리방침 동의 <a href="/bbs/content.php?co_id=privacy" target="_blank">[자세히보기]</a></label></p>
						<div class="fixedPart">
							<ul>
								<li><label><input type="radio" name="call_type" value="2" checked=""> 전화 <i class="xi-call"></i></label></li>
								<li><label><input type="radio" name="call_type" value="1"> 카톡 <i class="xi-kakaotalk"></i></label></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="btnWrap">
					<p class="fixedType">
						<select id="fn_type" name="type">
						
							<option value="">상담부위를 선택하세요</option><option value="M자">M자</option><option value="정수리">정수리</option><option value="가르마">가르마</option><option value="관자놀이">관자놀이</option>						
						</select>
					</p>
					<a href="javascript:blur();" class="fixedSubmit" onclick="newInsert();">상담문의</a>
					
				</div>
			</div>
		</div>

		<input type="hidden" name="tableName" id="tableName" value="footer_consult">
		<input type="hidden" name="cmd" value="write">
	</form>
</div>
-->
<!--하단상담신청끝-->




<div id="ft">
  <!--sns링크시작-->
  <div class="foot_sns_wrap">
    <div class="foot_sns">
      <!-- <a href="https://www.facebook.com/%ED%8F%AC%EB%AE%AC%EB%9D%BC%EC%9D%98%EC%9B%90-%EB%AA%A8%EB%B0%9C%EC%9D%B4%EC%8B%9D%ED%81%B4%EB%A6%AC%EB%8B%89-104330572177168" target="_blank"><img src="https://dformula.speedgabia.com/_formula/mobile/float_facebook.png" alt="" loading="lazy"></a> -->
      <a href="https://www.instagram.com/alllitingps/" target="_blank"><img src="https://dformula.speedgabia.com/_formula/mobile/float_instagram.png" alt="" loading="lazy"></a>
      <!-- <a href="https://pf.kakao.com/_HJgJb/chat" target="_blank"><img src="https://dformula.speedgabia.com/_formula/mobile/float_kakao.png" alt="" loading="lazy"></a> -->
      <a href="https://www.youtube.com/channel/UC6wAkhYi51UXAmZSO7lPJmA/videos" target="_blank"><img src="https://dformula.speedgabia.com/_formula/mobile/float_youtube01.png" alt="" loading="lazy"></a>
      <a href="https://blog.naver.com/psdrhyo" target="_blank"><img src="https://dformula.speedgabia.com/_formula/mobile/float_blog.png" alt="" loading="lazy"></a>
      <!-- <a href="https://booking.naver.com/booking/13/bizes/261618/items/3162300?area=bmp" target="_blank"><img src="/theme/hospital/img/float_reservation.png" alt="" loading="lazy"></a> -->
    </div>
  </div>
  <!--sns링크끝--->
  <!--기타 푸터 시작-->w
  <div class="footerm">
    <div class="foot_lan">
      <a href="/"><img src="/theme/hospital/img/korea.jpg" loading="lazy" alt=""></a>
    </div>
    <div class="family_site">
      <a href="https://alllitingclinic.com/" target="_blank">
        <img src="https://dformula.speedgabia.com/_alllitingps/link_lifting.gif" alt="생활건강한의원 이동" title="">
      </a>
    </div>
    <div class="privacy">
      <ul>
        <li><a href="/bbs/content.php?co_id=privacy&device=mobile" style=" display: inline-block;  font-weight: bold; ">개인정보처리방침</a></li>
        <li><a href="/?device=pc">PC버전</a></li>
      </ul>
    </div>
    <div class="address">
      <p class="address_txt">서울시 서초구 고무래로 22,  쌍동빌딩 서관2층 </p>
      <div>
        <p class="infoDesc">
          의료기관명칭:생활건강한의원 | 대표원장:김지승 |사업자등록번호:114-91-17400<br>
        </p>
      </div>
      <p class="last">COPYRIGHT ⓒ 2022 ALLLITINGPS.COM<br>ALL RIGHT PRESERVED</p>
    </div>
  </div>
  <!--기타 푸터 끝-->
  <!--
    <div id="ft_copy">
        <div id="ft_company">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
        </div>
        Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.<br>
    </div>
    <div class="ft_cnt">
    	<h2>사이트 정보</h2>
        <p class="ft_info">
        	회사명 : 회사명 / 대표 : 대표자명<br>
			주소  : OO도 OO시 OO구 OO동 123-45<br>
			사업자 등록번호  : 123-45-67890<br>
			전화 :  02-123-4567  팩스  : 02-123-4568<br>
			통신판매업신고번호 :  제 OO구 - 123호<br>
			개인정보관리책임자 :  정보책임자명<br>
		</p>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    -->
  <!--
    <?php
    if (G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
-->
<?php
    }

    if ($config['cf_analytics']) {
      echo $config['cf_analytics'];
    }
?>
</div>
<script>
  jQuery(function($) {

    $(document).ready(function() {

      // 폰트 리사이즈 쿠키있으면 실행
      font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

      //상단고정
      if ($(".top").length) {
        var jbOffset = $(".top").offset();
        $(window).scroll(function() {
          if ($(document).scrollTop() > jbOffset.top) {
            $('.top').addClass('fixed');
          } else {
            $('.top').removeClass('fixed');
          }
        });
      }

      //상단으로
      $("#top_btn").on("click", function() {
        $("html, body").animate({
          scrollTop: 0
        }, '500');
        return false;
      });

    });
  });
</script>

<?php
include_once(G5_THEME_PATH . "/tail.sub.php");
