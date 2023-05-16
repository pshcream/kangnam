<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

  <!--생활건강지식인상단시작--->


  <div class="jisik_top">
    <a class="jisik_logo" href="/jisikin">
      <img src="https://dformula.speedgabia.com/_alllitinglifting/jisik_logo.png">
    </a>

  </div>


  <!--생활건강지식인상단끝--->


  <!-- 게시판 카테고리 시작 { -->
  <?php if ($is_category) { ?>
    <nav id="bo_cate">
      <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
      <ul id="bo_cate_ul">
        <?php echo $category_option ?>
      </ul>
    </nav>
  <?php } ?>
  <!-- } 게시판 카테고리 끝 -->




  <!-- 검색을 만들어요 { -->

  <div id="bo_search">
    <ul class="btn_search">
      <li>
        <!-- 게시판 검색 시작 제목이나 내용으로 검색합니다 { -->
        <fieldset class="bo_sch">
          <h3><?php echo get_head_title($g5['title']); ?> 검색</h3>
          <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <input type="hidden" name="sfl" value="wr_subject||wr_content">
            <label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong>
            </label>
            <div class="sch_bar">
              <input type="text" name="stx" required id="sch_stx" class="sch_input" size="25" maxlength="20" placeholder="궁금한 눈성형/재수술 키워드를 입력해보세요.">
              <button type="submit" value="검색" class="sch_btn"><span class="sound_only">검색</span></button>
            </div>
          </form>
        </fieldset>
        <!-- } 게시판 검색 끝 -->
      </li>
    </ul>
  </div>
  <!-- } 검색을 만들어요  끝 -->

  <!--인기키워드시작-->
  <div class="keyword">
    <h1>인기키워드</h1>
    <a href="/jisikin?bo_table=jisikin&sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=다이어트프로그램">#다이어트프로그램</a>
    <a href="/jisikin?bo_table=jisikin&sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=눈매교정">#눈매교정</a>
    <a href="/jisikin?bo_table=jisikin&sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=눈재수술">#눈재수술</a>
    <a href="/jisikin?bo_table=jisikin&sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=눈밑수술">#눈밑수술</a>


  </div>
  <!--인기키워드끝-->


  <!--지식인검색분류탭시작--->

  <div class="jisik_tab">
    <a href="/jisikin" class="on">전체</a>
    <a href="/jisikin_1">지방흡입(수술치료)</a>
    <a href="/jisikin_2">지방흡입(주사치료)</a>
    <a href="/jisikin_3">비만진료(비만약처방)</a>
    <a href="/jisikin_4">지방흡입후관리</a>
    <a href="/jisikin_5">비만정보</a>

  </div>

  <!--지식인검색분류탭끝--->


  <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">

    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
      <div id="bo_list_total">
        <span>Total <?php echo number_format($total_count) ?>건</span>
        <?php echo $page ?> 페이지
      </div>
      <div id="bo_list_r">
        <?php if ($rss_href) { ?><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a><?php } ?>
        <?php if ($admin_href) { ?><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a><?php } ?>
      </div>
    </div>

    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
    <div class="admin_li">
      <li>
        <?php if ($is_checkbox) { ?>
          <div scope="col" class="all_chk chk_box">
            <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
            <label for="chkall">
              <span></span>
              <b class="sound_only">현재 페이지 게시물 전체선택</b>
            </label>
          </div>
        <?php } ?>
      </li>


      <?php if ($is_admin == 'super' || $is_auth) {  ?>
        <?php if ($is_checkbox) { ?>
          <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
          <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
          <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
        <?php } ?>
      <?php }  ?>

      <?php if ($admin_href) { ?>
        <li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자">
            <i class="fa fa-cogs"></i><span class="sound_only">관리자</span></a></li>
      <?php } ?>



    </div>




    <div class="tbl_head01 tbl_wrap">
      <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
          <tr class="sound_only">
            <th scope="col"><b class="sound_only">현재 페이지 게시물 전체선택</b></th>
            <th scope="col"><b class="sound_only">공백</b></th>
            <th scope="col"><b class="sound_only">제목</b></th>
            <?php if ($is_category) { ?> <th scope="col"><b class="sound_only">카테고리</b></th> <?php } ?>
            <th scope="col"><b class="sound_only">날짜</b></th>
          </tr>
        </thead>
        <tbody class="line_top">
          <?php
          for ($i = 0; $i < count($list); $i++) {
            if ($i % 2 == 0) $lt_class = "even";
            else $lt_class = "";
          ?>
            <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
              <?php if ($is_checkbox) { ?>
                <td class="td_chk chk_box">
                  <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                  <label for="chk_wr_id_<?php echo $i ?>">
                    <span></span>
                    <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                  </label>
                </td>
              <?php } ?>

              <td class="td_sound_only"><b class="sound_only">공백</b></td>

              <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply']) * 10) : '0'; ?>px">

                <?php
                if ($list[$i]['is_notice']) // 공지사항
                  echo '<strong class="notice_icon">공지</strong>';
                else if ($wr_id == $list[$i]['wr_id'])
                  echo "<span class=\"bo_current\">열람중</span>";

                ?>

                <div class="bo_tit">
                  <a href="<?php echo $list[$i]['href'] ?>">
                    <img src="https://dformula.speedgabia.com/_dodreamhairplant/jisik_q.png">
                    <div class="kin_title">

                      <?php echo $list[$i]['icon_reply'] ?>
                      <?php
                      if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                      ?>
                      <?php echo $list[$i]['subject'] ?>
                    </div>

                    <!--내용썸네일노출시작--->
                    <div class="kin_content">
                      <em class="listCont"><?php echo cut_str(strip_tags($list[$i]['wr_content']), 160, " . . . ") ?></em>
                    </div>
                    <!--내용썸네일노출끝--->

                    <!--답글썸네일노출시작-->
                    <img src="https://dformula.speedgabia.com/_dodreamhairplant/jisik_a.png">
                    <div class="kin_reply">

                      <?php $cmt = sql_fetch("select wr_content from $write_table where wr_parent = '{$list[$i]['wr_id']}' and wr_is_comment = '1' ");
                      echo $cmt['wr_content'] ?>
                    </div>
                    <!--답글썸네일노출끝--->

                  </a>
                  <?php
                  if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                  // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                  if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                  if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                  if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                  ?>
                  <!-- <?/*php if ($list[$i]['comment_cnt']) { */ ?>
                        <span class="sound_only">댓글</span><span class="cnt_cmt"><?/*php echo $list[$i]['wr_comment']; */ ?></span><span class="sound_only">개</span><?/*php }*/ ?>
                    -->
                </div>
              </td>
              <?php if ($is_category) { ?>
                <td class="td_ca_name"><?php echo $list[$i]['ca_name'] ?></td> <?php } ?>
              <!-- <td class="td_name sv_use"><?/*php echo $list[$i]['name'] */ ?></td> -->
              <td class="td_datetime"><?php echo $list[$i]['datetime'] ?></td>

            </tr>
          <?php } ?>
          <?php if (count($list) == 0) {
            echo '<tr><td colspan="' . $colspan . '" class="empty_table">게시물이 없습니다.</td></tr>';
          } ?>
        </tbody>
      </table>
    </div>
    <!-- 페이지 -->
    <?php echo $write_pages; ?>
    <!-- 페이지 -->

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
      <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
          <ul class="btn_bo_user1">
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_t01" title="글쓰기">글쓰기<span class="sound_only">글쓰기</span></a></li><?php } ?>
          </ul>
        <?php } ?>
      </div>
    <?php } ?>
  </form>

</div>
<?php if ($is_checkbox) { ?>
  <noscript>
    <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
  </noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
  <script>
    function all_checked(sw) {
      var f = document.fboardlist;

      for (var i = 0; i < f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
          f.elements[i].checked = sw;
      }
    }

    function fboardlist_submit(f) {
      var chk_count = 0;

      for (var i = 0; i < f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
          chk_count++;
      }

      if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
      }

      if (document.pressed == "선택복사") {
        select_copy("copy");
        return;
      }

      if (document.pressed == "선택이동") {
        select_copy("move");
        return;
      }

      if (document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
          return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url + "/board_list_update.php";
      }

      return true;
    }

    // 선택한 게시물 복사 및 이동
    function select_copy(sw) {
      var f = document.fboardlist;

      if (sw == "copy")
        str = "복사";
      else
        str = "이동";

      var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

      f.sw.value = sw;
      f.target = "move";
      f.action = g5_bbs_url + "/move.php";
      f.submit();
    }

    // 게시판 리스트 관리자 옵션
    jQuery(function($) {
      $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
      });
      $(document).on("click", function(e) {
        if (!$(e.target).closest('.is_list_btn').length) {
          $(".more_opt.is_list_btn").hide();
        }
      });
    });
  </script>
<?php } ?>
<!-- } 게시판 목록 끝 -->