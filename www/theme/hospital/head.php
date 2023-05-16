<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
  include_once(G5_THEME_MOBILE_PATH . '/head.php');
  return;
}

include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>


<!-- 상단 시작 { -->
<div id="hd">
  <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
  <?php
  if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
  }
  ?>
  <div id="tnb">
    <div class="inner">
      <div class="language">
        <a class="on" href="/">
          <img src="/theme/hospital/img/korea.jpg" alt="생활건강한의원 한방다이어트병원 한국어페이지 이동">
          <div class="c_name">KOREA</div>
        </a>
      </div>
      <ul id="hd_qnb">
        <?php if ($is_member) {  ?>
          <li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
          <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
          <?php }  ?>
        <?php } else {  ?>
          <li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
          <li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
        <?php }  ?>
      </ul>
    </div>
  </div>
  <div id="hd_wrapper">
    <div id="logo">
      <a href="<?php echo G5_URL ?>">
        <img src="/theme/hospital/img/logo.svg" alt="생활건강한의원 한방다이어트병원 로고">
      </a>
    </div>
    <!-- <div class="direct_menu">
      <div onclick="$('.gnb_menu_btn').click();">전체보기</div>
      <div><a href="/event">EVENT</a></div>
      <div><a href="/consult">TALK</a></div>
    </div> -->
    <div class="hd_sch_wr">
      <fieldset id="hd_sch">
        <legend>사이트 내 전체검색</legend>
        <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
          <input type="hidden" name="sfl" value="wr_subject||wr_content">
          <input type="hidden" name="sop" value="and">
          <label for="sch_stx" class="sound_only">검색어 필수</label>
          <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
          <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
        </form>

        <script>
          function fsearchbox_submit(f) {
            if (f.stx.value.length < 2) {
              alert("검색어는 두글자 이상 입력하십시오.");
              f.stx.select();
              f.stx.focus();
              return false;
            }

            // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
            var cnt = 0;
            for (var i = 0; i < f.stx.value.length; i++) {
              if (f.stx.value.charAt(i) == ' ')
                cnt++;
            }

            if (cnt > 1) {
              alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
              f.stx.select();
              f.stx.focus();
              return false;
            }

            return true;
          }
        </script>

      </fieldset>

      <?php echo popular('theme/basic'); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  
      ?>
    </div>

    <div class="livechat">
      <ul>
        <li><a href="https://pf.kakao.com/_qxiSqb/chat" target="_blank"><img src="https://dformula.speedgabia.com/_formulaclinic/kakaotalk_logo.png" alt="카카오톡"></a></li>
      </ul>
    </div>

    <ul class="hd_login">
      <?php if ($is_member) {  ?>
        <!-- <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li> -->
        <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
        <?php if ($is_admin) {  ?>
          <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
        <?php }  ?>
      <?php } else {  ?>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
      <?php }  ?>
    </ul>
  </div>

  <nav id="gnb">
    <h2>메인메뉴</h2>
    <div class="gnb_wrap">
      <div id="gnb_1dul">
        <div class="gnb_1dli gnb_mnal">
          <button type="button" class="gnb_menu_btn" title="전체메뉴">
            <i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span>
          </button>
        </div>
        <div class="gnb_1dli gnb_al_li_plus" style="z-index:998">
          <a href="/life-health-introduction/hospital-introduction/" class="gnb_1da">생활건강소개</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_lifehealth.jpg" alt="생활건강소개">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/life-health-introduction/hospital-introduction/" class="gnb_2da"><span class="gnb_2da_name"></span>병원소개</a></div>
                <div class="gnb_2dli"><a href="/life-health-introduction/medical-staff-introduction/" class="gnb_2da"><span class="gnb_2da_name"></span>의료진소개</a></div>
                <div class="gnb_2dli"><a href="/life-health-introduction/take-a-tour/" class="gnb_2da"><span class="gnb_2da_name"></span>둘러보기</a></div>
                <div class="gnb_2dli"><a href="/life-health-introduction/way-to-come-and-treatment-hours/" class="gnb_2da"><span class="gnb_2da_name"></span>진료시간/찾아오는길</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:998">
          <a href="/diet-program/life-health-diet/" class="gnb_1da">다이어트프로그램</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_program.jpg" alt="다이어트프로그램">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/diet-program/life-health-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>생활건강다이어트</a></div>
                <div class="gnb_2dli"><a href="/diet-program/today-weight-loss-premium-oriental-medicine/" class="gnb_2da"><span class="gnb_2da_name"></span>오늘,감량프리미엄한약</a></div>
                <div class="gnb_2dli"><a href="/diet-program/yesterday-maintenance-yo-yo-prevention-oriental-medicine/" class="gnb_2da"><span class="gnb_2da_name"></span>내일,유지요요방지한약</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:998">
          <a href="/diet-booster/fat-cut-injection/" class="gnb_1da">다이어트부스터</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_booster.jpg" alt="다이어트부스터">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/diet-booster/fat-cut-injection/" class="gnb_2da"><span class="gnb_2da_name"></span>다이어트약침</a></div>
                <div class="gnb_2dli"><a href="/diet-booster/lifting-tying/" class="gnb_2da"><span class="gnb_2da_name"></span>리프팅매선</a></div>
                <div class="gnb_2dli"><a href="/diet-booster/medical-machine-management/REC-triple-plus/" class="gnb_2da"><span class="gnb_2da_name"></span>메디컬기계관리</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:998">
          <a href="/device-introduction/main/" class="gnb_1da">장비소개</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_equipment.jpg" alt="장비소개">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/device-introduction/main/" class="gnb_2da"><span class="gnb_2da_name"></span>장비소개</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:998">
          <a href="/one-on-one-diet/childhood-and-adolescent-obesity/" class="gnb_1da">1대1다이어트</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_onediet.jpg" alt="1대1다이어트">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/one-on-one-diet/childhood-and-adolescent-obesity/" class="gnb_2da"><span class="gnb_2da_name"></span>소아청소년비만</a></div>
                <div class="gnb_2dli"><a href="/one-on-one-diet/wedding-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>웨딩다이어트</a></div>
                <div class="gnb_2dli"><a href="/one-on-one-diet/postpartum-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>산후다이어트</a></div>
                <div class="gnb_2dli"><a href="/one-on-one-diet/high-obesity-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>고도비만다이어트</a></div>
                <div class="gnb_2dli"><a href="/one-on-one-diet/menopause-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>갱년기다이어트</a></div>
                <div class="gnb_2dli"><a href="/one-on-one-diet/mens-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>남성다이어트</a></div>
              </div>
            </div>
          </div>
        </div>


        <style>
          .gnb_1da {
            padding: 0 25px;
            margin: 0 25px;
          }
        </style>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:993">
          <a href="/event" class="gnb_1da">커뮤니티</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_communuity.jpg" alt="커뮤니티">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/event" class="gnb_2da"><span class="gnb_2da_name"></span>이벤트</a></div>
                <div class="gnb_2dli"><a href="/column" class="gnb_2da"><span class="gnb_2da_name"></span>칼럼</a></div>
                <div class="gnb_2dli"><a href="/before_and_after" class="gnb_2da"><span class="gnb_2da_name"></span>전후사진</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="gnb_1dli gnb_al_li_plus" style="z-index:992">
          <a href="/consult" class="gnb_1da">상담예약</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="/theme/hospital/img/menu_consult.jpg" alt="상담예약/문의">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="https://booking.naver.com/booking/13/bizes/261618/items/3162300?area=bmp" class="gnb_2da" target="_blank"><span class="gnb_2da_name"></span>온라인예약</a></div>
                <div class="gnb_2dli"><a href="/consult" class="gnb_2da"><span class="gnb_2da_name"></span>온라인상담</a></div>
                <div class="gnb_2dli"><a href="/jisikin" class="gnb_2da"><span class="gnb_2da_name"></span>생활건강지식인</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="gnb_1dul" style="display:none;">
        <div class="gnb_1dli gnb_mnal">
          <button type="button" class="gnb_menu_btn" title="전체메뉴">
            <i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span>
          </button>
        </div>
        <?php
        $menu_datas = get_menu_db(0, true);
        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
        $i = 0;
        foreach ($menu_datas as $row) {
          if (empty($row)) continue;
          $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
        ?>
          <div class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
            <?php
            $k = 0;
            foreach ((array) $row['sub'] as $row2) {

              if (empty($row2)) continue;

              if ($k == 0)
                echo '<span class="bg">하위분류</span><div class="gnb_2dul"><div class="gnb_2dul_box">' . PHP_EOL;
            ?>
              <div class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></div>










            <?php
              $k++;
            }   //end foreach $row2

            if ($k > 0)
              echo '</div></div>' . PHP_EOL;
            ?>





          </div>



        <?php
          $i++;
        }   //end foreach $row

        if ($i == 0) {  ?>
          <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
        <?php } ?>




      </div>
      <!--  -->
      <div id="gnb_all">
        <h2>전체메뉴</h2>


        <ul class="gnb_al_ul">
          <?php

          $i = 0;
          foreach ($menu_datas as $row) {
          ?>

            <li class="gnb_al_li">
              <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
              <?php
              $k = 0;
              foreach ((array) $row['sub'] as $row2) {
                if ($k == 0)
                  echo '<ul>' . PHP_EOL;
              ?>
            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
          <?php
                $k++;
              }   //end foreach $row2

              if ($k > 0)
                echo '</ul>' . PHP_EOL;
          ?>
          </li>
        <?php
            $i++;
          }   //end foreach $row

          if ($i == 0) {  ?>
          <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
        <?php } ?>

        </ul>
        <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
      </div>
      <div id="gnb_all_bg"></div>
    </div>
  </nav>

  <script>
    $(function() {
      $(".gnb_menu_btn").click(function() {
        $("#gnb_all, #gnb_all_bg").show();
      });
      $(".gnb_close_btn, #gnb_all_bg").click(function() {
        $("#gnb_all, #gnb_all_bg").hide();
      });
    });
  </script>



</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
  <div id="container_wr">

    <div id="container">
      <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }
