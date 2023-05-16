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
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_all_liting.jpg" alt="생활건강소개">
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
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_doubleeyelid.jpg" alt="다이어트프로그램">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/diet-program/life-health-diet/" class="gnb_2da"><span class="gnb_2da_name"></span>생활건강다이어트</a></div>
                <div class="gnb_2dli"><a href="/diet-program/today-weight-loss-premium-oriental-medicine/" class="gnb_2da"><span class="gnb_2da_name"></span>오늘,감량프리미엄한약</a></div>
                <div class="gnb_2dli"><a href="/diet-program/yesterday-maintenance-yo-yo-prevention-oriental-medicine/" class="gnb_2da"><span class="gnb_2da_name"></span>내일,유지요요방지한약</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:993">
          <a href="/eye-correction/non-incision-eyelid-correction/" class="gnb_1da">눈매교정</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_correction.jpg" alt="눈매교정">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/eye-correction/non-incision-eyelid-correction/" class="gnb_2da"><span class="gnb_2da_name"></span>비절개 눈매교정</a></div>
                <div class="gnb_2dli"><a href="/eye-correction/incision-eyelid-correction/" class="gnb_2da"><span class="gnb_2da_name"></span>절개 눈매교정</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:997">
          <a href="/eye-revision-surgery/squint-eye-correction/non-incision-drooping-eye-correction/" class="gnb_1da">눈재수술</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_resurgery.jpg" alt="눈재수술">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/eye-revision-surgery/squint-eye-correction/non-incision-drooping-eye-correction/" class="gnb_2da"><span class="gnb_2da_name"></span>꺼진눈교정</a></div>
                <div class="gnb_2dli"><a href="/eye-revision-surgery/thick-eye-correction/slit-fat-removal/" class="gnb_2da"><span class="gnb_2da_name"></span>두툼한눈교정</a></div>
                <div class="gnb_2dli"><a href="/eye-revision-surgery/eyelash-piercing-correction/correction-of-eyelash-puncture-on-the-upper-eyelid/" class="gnb_2da"><span class="gnb_2da_name"></span>속눈썹 찔림교정</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:993">
          <a href="/male-eye-surgery/none-diet-program/" class="gnb_1da">남자눈성형</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_man.jpg" alt="남자눈성형">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/male-eye-surgery/none-diet-program/" class="gnb_2da"><span class="gnb_2da_name"></span>무쌍수술</a></div>
                <div class="gnb_2dli"><a href="/male-eye-surgery/inner-double eyelid-surgery/" class="gnb_2da"><span class="gnb_2da_name"></span>속쌍수술</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:997">
          <a href="/total-eye-lifting/endoscopic-forehead-lifting/" class="gnb_1da">토탈아이리프팅</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_total.jpg" alt="토탈아이리프팅">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/total-eye-lifting/endoscopic-forehead-lifting/" class="gnb_2da"><span class="gnb_2da_name"></span>내시경이마리프팅</a></div>
                <div class="gnb_2dli"><a href="/total-eye-lifting/endoscopic-forehead-lift/" class="gnb_2da"><span class="gnb_2da_name"></span>내시경이마거상</a></div>
                <div class="gnb_2dli"><a href="/total-eye-lifting/forehead-reduction-surgery/" class="gnb_2da"><span class="gnb_2da_name"></span>이마축소술</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:995">
          <a href="/middle-aged-eye-surgery/upper-eyelid/" class="gnb_1da">중년눈성형</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_middleage.jpg" alt="중년눈성형">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/middle-aged-eye-surgery/upper-eyelid/" class="gnb_2da"><span class="gnb_2da_name"></span>상안검</a></div>
                <div class="gnb_2dli"><a href="/middle-aged-eye-surgery/lower-eyelid/" class="gnb_2da"><span class="gnb_2da_name"></span>하안검</a></div>
                <div class="gnb_2dli"><a href="/middle-aged-eye-surgery/eyebrow-lowering/" class="gnb_2da"><span class="gnb_2da_name"></span>눈썹하리프팅</a></div>
                <div class="gnb_2dli"><a href="/middle-aged-eye-surgery/total-eye-lifting/" class="gnb_2da"><span class="gnb_2da_name"></span>토탈아이리프팅</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:993">
          <a href="/under-eye-surgery/redistribution-of-fat-under-the-eyes/" class="gnb_1da">눈밑수술</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_under.jpg" alt="눈밑수술">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/under-eye-surgery/redistribution-of-fat-under-the-eyes/" class="gnb_2da"><span class="gnb_2da_name"></span>눈밑지방재배치</a></div>
                <div class="gnb_2dli"><a href="/under-eye-surgery/lower-eyelid-reposition/" class="gnb_2da"><span class="gnb_2da_name"></span>하안검재배치</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:994">
          <a href="/slit-molding/anterior-slit-surgery/" class="gnb_1da">트임성형</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_slit.jpg" alt="트임성형">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/slit-molding/anterior-slit-surgery/" class="gnb_2da"><span class="gnb_2da_name"></span>앞트임수술</a></div>
                <div class="gnb_2dli"><a href="/slit-molding/back-slit-surgery/" class="gnb_2da"><span class="gnb_2da_name"></span>뒷트임수술</a></div>
                <div class="gnb_2dli"><a href="/slit-molding/undercut-surgery/" class="gnb_2da"><span class="gnb_2da_name"></span>밑트임수술</a></div>
                <div class="gnb_2dli"><a href="/slit-molding/restoration-of-anterior-slit/" class="gnb_2da"><span class="gnb_2da_name"></span>앞트임복원</a></div>
                <div class="gnb_2dli"><a href="/slit-molding/restoration-of-back-slit/" class="gnb_2da"><span class="gnb_2da_name"></span>뒷트임복원</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:995">
          <a href="/fat-grafting-and-removal-of-foreign-substances/eye-fat-grafting/" class="gnb_1da">지방이식/이물질제거</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_fat.jpg" alt="지방이식/이물질제거">
              </div>
              <div class="gnb_2dul_box">
                <div class="gnb_2dli"><a href="/fat-grafting-and-removal-of-foreign-substances/eye-fat-grafting/" class="gnb_2da"><span class="gnb_2da_name"></span>눈 지방이식</a></div>
                <div class="gnb_2dli"><a href="/fat-grafting-and-removal-of-foreign-substances/fat-grafting-by-region/" class="gnb_2da"><span class="gnb_2da_name"></span>부위별 지방이식</a></div>
                <div class="gnb_2dli"><a href="/fat-grafting-and-removal-of-foreign-substances/removal-of-debris-from-the-eyelids/" class="gnb_2da"><span class="gnb_2da_name"></span>눈두덩이 이물질 제거</a></div>
                <div class="gnb_2dli"><a href="/fat-grafting-and-removal-of-foreign-substances/removal-of-foreign-substances-under-the-eyes/" class="gnb_2da"><span class="gnb_2da_name"></span>눈밑 이물질 제거 </a></div>
              </div>
            </div>
          </div>
        </div>

        <style>
          .gnb_1da {
            padding: 0 10.5px;
            margin: 0 10.5px;
          }
        </style>

        <div class="gnb_1dli gnb_al_li_plus" style="z-index:993">
          <a href="/event" class="gnb_1da">커뮤니티</a>
          <span class="bg">하위분류</span>
          <div class="gnb_2dul">
            <div class="gnb_2dul_cover">
              <div class="gnb_imgbox">
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_communuity.jpg" alt="커뮤니티">
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
                <img src="https://dformula.speedgabia.com/_alllitingps/menu_consult.jpg" alt="상담예약/문의">
              </div>
              <div class="gnb_2dul_box">
                <!-- <div class="gnb_2dli"><a href="https://booking.naver.com/booking/13/bizes/261618/items/3162300?area=bmp" class="gnb_2da" target="_blank"><span class="gnb_2da_name"></span>온라인예약</a></div> -->
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
