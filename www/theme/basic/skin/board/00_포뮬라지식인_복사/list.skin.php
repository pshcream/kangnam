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
              <!-- <button type="submit" value="검색" class="sch_btn"><span class="sound_only">검색</span></button> -->
              <button class="searchImgBtn searchImgBtn2" type="button" onclick="searchImglist();"></button>
            </div>
          </form>
        </fieldset>
        <!-- } 게시판 검색 끝 -->

        <!-- 옵션검색 시작 -->

        <style>
          .bo_sch .searchImgBtn.searchImgBtn2 {
            width: 67px;
            height: 60px;
            float: right;
            border: 0;
            color: #fff;
            font-weight: 400;
            font-size: 1rem;
            padding: 5px 10px;
            background-image: url(https://dformula.speedgabia.com/_dodreamhairplant/jisik_search.png);
          }

          /*  */
          fieldset#bo_sch {
            margin-top: 60px;
            width: 767px;
            margin-left: -25px;
            position: relative;
          }

          fieldset#bo_sch .fsearch {
            display: inline-block;
          }

          fieldset#bo_sch select {
            font-size: 14px;
            width: 120px;
            height: 45px;
            padding-left: 10px;
            cursor: pointer;
            margin-right: 10px;
            outline: none;
            padding-right: 10px;
            font-family: 'S-CoreDream-5Medium';
          }

          button.searchImgBtn.searchImgBtn1 {
            display: inline-block;
            height: 45px;
            width: 80px;
            font-size: 14px;
            background: #03cf5d;
            border: none;
            border-radius: 5%;
            color: white;
            margin-left: 15px;
            position: absolute;
            right: 0;
            font-family: 'S-CoreDream-5Medium';
          }

          form#fboardlist {
            padding-top: 0;
            position: relative;
          }

          /*  */
          .bo_tit .status {
            float: right;
            width: 70px;
            display: inline-block;
            text-align: center;
            vertical-align: top;
            height: 70px;
            line-height: 70px;
            background: #472B33;
            border-radius: 10%;
            color: white;
            font-weight: normal;
            font-size: 15px;
          }

          .bo_tit .status.on {
            background: grey;
            color: #f4f4f4;
          }
        </style>


        <!-- <fieldset id="bo_sch">
          <legend>게시물 검색</legend>

          <div name="fsearch" class="fsearch">
            <select name="wr_1" id="age_select" class="age_select">
              <option value="" class="age" id="age">연령별</option>
              <option value="20대" class="twenty" id="twenty">20대</option>
              <option value="30대" class="thirty" id="thirty">30대</option>
              <option value="40대" class="forty" id="forty">40대</option>
              <option value="50대" class="fifty" id="fifty">50대</option>
            </select>
            <select name="wr_2" id="sex_select" class="sex_select">
              <option value="" class="sex" id="sex">성별</option>
              <option value="남성" class="male" id="male">남성</option>
              <option value="여성" class="female" id="female">여성</option>
            </select>
            <select name="wr_3" id="surgery_select" class="surgery_select">
              <option value="" class="surgery" id="surgery">수술방식</option>
              <option value="절개" class="cut" id="cut">절개</option>
              <option value="비절개" class="uncut" id="uncut">비절개</option>
            </select>
            <select name="wr_4" id="part_select" class="part_select">
              <option value="" class="part" id="part">고민부위</option>
              <option value="M자" class="mshape" id="mshape">M자</option>
              <option value="정수리" class="parietal" id="parietal">정수리</option>
              <option value="M자+정수리" class="garma" id="garma">M자+정수리</option>
            </select>
            <select name="wr_5" id="num_select" class="num_select">
              <option value="" class="num" id="num">이식모수</option>
              <option value="소량" class="hair1000" id="hair1000">소량</option>
              <option value="3000모" class="hair2000" id="hair2000">3000모</option>
              <option value="3500모" class="hair3000" id="garma">3500모</option>
              <option value="4000모" class="hair4000" id="hair4000">4000모</option>
              <option value="4500모" class="hair4000" id="hair4000">4500모</option>
              <option value="대용량" class="hair4000" id="hair4000">대용량</option>
            </select>
          </div>
          <button class="searchImgBtn searchImgBtn1" type="button" onclick="searchImglist();">조회</button>
        </fieldset> -->

        <!-- <script>
          // 조건 검색
          function searchImglist() {
            var schwr1 = $("#age_select")[0].value;
            var schwr2 = $("#sex_select")[0].value;
            var schwr3 = $("#surgery_select")[0].value;
            var schwr4 = $("#part_select")[0].value;
            var schwr5 = $("#num_select")[0].value;
            var schtitle = $("#sch_stx")[0].value;

            console.log(schwr1);
            console.log(schwr2);
            console.log(schwr3);
            console.log(schwr4);
            console.log(schwr5);
            console.log(schtitle);

            location.href = `/bbs/board.php?bo_table=<?php echo $bo_table ?>&wr_subject=${schtitle}&wr_1=${schwr1}&wr_2=${schwr2}&wr_3=${schwr3}&wr_4=${schwr4}&wr_5=${schwr5}?sca=&sop=and&sfl=wr_subject||wr_content&stx=${schtitle} ${schwr1} ${schwr2} ${schwr3} ${schwr4} ${schwr5}`;
          }

          // 화면에 뿌리기
          $(document).ready(function() {
            $("#sch_stx")[0].value = "";

            var URLSearch = new URLSearchParams(location.search);
            var urlwr1 = URLSearch.get("wr_1");
            var urlwr2 = URLSearch.get("wr_2");
            var urlwr3 = URLSearch.get("wr_3");
            var urlwr4 = URLSearch.get("wr_4");
            var urlwr5 = URLSearch.get("wr_5");
            var urlsubject = URLSearch.get("wr_subject");

            console.log(urlwr1);
            console.log(urlwr2);
            console.log(urlwr3);
            console.log(urlwr4);
            console.log(urlwr5);
            console.log(urlsubject);


            if (urlwr1) {
              $("#age_select")[0].value = urlwr1;
            }
            if (urlwr2) {
              $("#sex_select")[0].value = urlwr2;
            }
            if (urlwr3) {
              $("#surgery_select")[0].value = urlwr3;
            }
            if (urlwr4) {
              $("#part_select")[0].value = urlwr4;
            }
            if (urlwr5) {
              $("#num_select")[0].value = urlwr5;
            }
            if (urlsubject) {
              $("#sch_stx")[0].value = urlsubject;
            }
            // if (urlwr3 == "절개" || urlsubject == "절개") {
            //   var balist = document.querySelectorAll("#ba_list");
            //   var banum = balist.length;
            //   for (var i = 0; i < banum; i++) {
            //     if (balist[i].dataset.wr3 == "비절개") {
            //       balist[i].style.display = "none";
            //     }
            //   }
            // }
          })
        </script> -->
        <!-- 옵션검색 끝 -->
      </li>
    </ul>
  </div>
  <!-- } 검색을 만들어요  끝 -->

  <!--인기키워드시작-->
  <div class="keyword">
    <h1>인기키워드</h1>
    <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=레이저">#레이저</a>
    <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=토탈아이리프팅">#토탈아이리프팅</a>
    <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=상안검">#상안검</a>
    <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=인모드">#인모드</a>
  </div>
  <!--인기키워드끝-->
  <!--공개게시판안내 시작-->
  <style>
    .open_info {
      width: 900px;
      margin: 50px auto;
      font-size: 16px;
      padding: 20px;
      border: 5px solid #03cf5d;
      color: black;
    }

    .open_info span {
      font-weight: 900;
      color: #03cf5d;
    }

    .open_info p {}
  </style>
  <div class="open_info">
    <p><span>※안내사항</span><br>
      - 생활건강지식인 상담게시판은 고객님들이 자유롭게 건강 정보를 공유할 수 있도록 개방형으로 운영됩니다.<br>
      - 질문을 올리시면 원장님이 직접 답변을 자세히 드리고 있습니다.<br>
      - 이 게시판은 내용이 노출되므로, 본문에 개인정보 노출은 하지 마시기 바랍니다.<br>
      - 게시판에 등록한 질문은 개인정보 비식별 처리 후 NAVER 지식IN에 등록될 수 있으며, 질문 작성시 이에 동의한 것으로 간주합니다.</p>
  </div>
  <!--공개게시판안내 끝-->


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
                  <a id="sourceUrl<?php echo $list[$i]['wr_id'] ?>" href="<?php echo $list[$i]['href'] ?>">
                    <div class="category" style="    text-align: center;
    width: 120px;
    display: inline-block;
    vertical-align: top;
    height: 70px;
    position: relative;
    background: #03cf5d;
    border-radius: 5%;
    font-weight: normal;
    font-size: 15px;
    color: #f4f4f4;">
                      <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:100%;">
                        <p><?php if ($list[$i]['wr_1']) {
                              echo '#' . $list[$i]['wr_1'];
                            } ?></p>
                        <p><?php if ($list[$i]['wr_2']) {
                              echo '#' . $list[$i]['wr_2'];
                            } ?></p>
                        <p><?php if ($list[$i]['wr_3']) {
                              echo '#' . $list[$i]['wr_3'];
                            } ?></p>
                      </div>

                    </div>

                    <div style="width: 620px; display: inline-block;">
                      <img src="https://dformula.speedgabia.com/_dodreamhairplant/jisik_q.png">
                      <div class="kin_title" id="kin_title<?php echo $list[$i]['wr_id'] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                        if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                        ?>
                        <?php echo $list[$i]['subject'] ?>
                        (<?php if ($list[$i]['wr_5']) {
                            echo $list[$i]['wr_5'];
                          } ?><?php if ($list[$i]['wr_6']) {
                                echo '&nbsp;' . $list[$i]['wr_6'];
                              } ?><?php if ($list[$i]['wr_7']) {
                                    echo '/' . $list[$i]['wr_7'];
                                  } ?><?php if ($list[$i]['wr_1']) {
                                        echo '&nbsp;' . $list[$i]['wr_1'];
                                      } ?><?php if ($list[$i]['wr_2']) {
                                            echo '/' . $list[$i]['wr_2'];
                                          } ?>)
                      </div>
                      <!--내용썸네일노출시작--->
                      <div class="kin_content">
                        <!-- <em class="listCont"><?php echo cut_str(strip_tags($list[$i]['wr_content']), 1000, " . . . ") ?></em> -->
                        <!-- <em class="listCont"><?php echo strip_tags($list[$i]['wr_content']) ?></em> -->
                        <!-- <em class="listCont"><?php echo strip_tags($list[$i]['content']) ?></em> -->
                        <em class="listCont" id="listCont<?php echo $list[$i]['wr_id'] ?>"><?php echo $list[$i]['content'] ?></em>
                        <!-- <em class="listCont"><?php echo nl2br($list[$i]['content']) ?></em> -->
                        <!-- <em class="listCont"><?php echo get_view_thumbnail($list[$i]['wr_content']) ?></em> -->
                      </div>
                      <!--내용썸네일노출끝--->
                    </div>
                    <!--답글썸네일노출시작-->
                    <!-- <img src="https://dformula.speedgabia.com/_dodreamhairplant/jisik_a.png"> -->
                    <div class="kin_reply" id="kin_reply<?php echo $list[$i]['wr_id'] ?>"><?php $cmt = sql_fetch("select wr_content from $write_table where wr_parent = '{$list[$i]['wr_id']}' and wr_is_comment = '1' ");
                                                                                          echo nl2br($cmt['wr_content']) ?></div>
                    <!--답글썸네일노출끝--->
                    <!-- <script>
                      $(document).ready(function() {
                        if ($(".kin_reply")[0].innerText == "") {
                          $(".status").html("접수완료");
                        } else $(".status").html("답변완료");
                      })
                    </script> -->



                    <?php
                    if ($list[$i]['comment_cnt']) // 공지사항
                      echo '<div class="status">답변완료</div>';
                    else
                      echo '<div class="status on">접수완료</div>';
                    ?>

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
                <!-- 220419 닥톡 -->
                <?php if ($is_admin) { ?>

                  <div class="doctalkChk" id="doctalkChk">
                    <!-- <p>업로드여부확인</p> -->
                    <table>
                      <tbody>
                        <tr>
                          <th>닥톡</th>
                          <th>지식인</th>
                        </tr>
                        <tr>
                          <td id="doctalk_up">X</td>
                          <td id="jisikin_up">X</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="doctalkBtn" onclick="doctalk('<?php echo $list[$i]['wr_id'] ?>');">닥톡연동</div>

                  <!-- 220420 닥톡 -->
                  <script>
                    function doctalk(i) {
                      // 질문제목
                      var questionTitle = $(`#kin_title${i}`)[0].innerText;
                      console.log(questionTitle);
                      // 질문내용  
                      var questionBody = $(`#listCont${i}`)[0].innerHTML;
                      console.log(questionBody);
                      // 질문작성시간
                      var questionDate = $(`#td_datetime${i}`)[0].innerHTML;
                      console.log(questionDate);
                      // 답변내용
                      var answerBody = $(`#kin_reply${i}`)[0].innerHTML;
                      console.log(answerBody);
                      // // 답변작성시간
                      // var answerDate = $(`#kin_reply${i}`);
                      // 게시글주소
                      var source = $(`#sourceUrl${i}`)[0].href;
                      console.log(source);
                      // 게시글고유번호
                      var regex = /[^0-9]/g;
                      var questionKey = source.replace(regex, "");
                      console.log(questionKey);

                      $.ajax({
                        url: 'https://api.doctalk.co.kr/apis/consults/v2/reg-consults',
                        data: {
                          accessKey: 'DTXX-244NOB-0d6f4a57-8742-46f4-8d6a-700bce77a983-1UrZGO-kxMCB',
                          subjectCode: '10103',
                          questionTitle: `${questionTitle}`,
                          questionKey: `${questionKey}`,
                          questionBody: `<p>${questionBody}</p>`,
                          questionDate: `${questionDate} 00:00:00`,
                          /* 선택사항 answerKey: 'answer`s primary(unique) key' */
                          answerBody: `<p>${answerBody}\n<br>※전문가의 예상 치료비, 할인 가능 여부, 편집된 답변 내용 등 추가 정보가 궁금하시면 아래 출처를 통해 확인할 수 있습니다.</p>`,
                          answerDate: `${questionDate} 12:00:00`,
                          contentsType: 'html',
                          source: `${source}`,
                          // tags: '여성탈모,엠자탈모,30대탈모'
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(response, textStatus, xhr) {

                          if (response.header.code == '0000') {

                            alert('닥톡지식인 연동에 성공했습니다! 네이버지식인 업로드는 1~2일정도 소요됩니다\n' + JSON.stringify(response.body));
                          } else {

                            alert('닥톡지식인 연동에 실패했습니다ㅠ 다시한번 확인해주세요\n' + JSON.stringify(response.header));
                          }
                        }
                      });
                    }
                  </script>


                <?php } ?>

                <!-- 220419 닥톡 -->
              </td>
              <?php if ($is_category) { ?>
                <td class="td_ca_name"><?php echo $list[$i]['ca_name'] ?></td> <?php } ?>
              <!-- <td class="td_name sv_use"><?/*php echo $list[$i]['name'] */ ?></td> -->
              <td class="td_datetime" id="td_datetime<?php echo $list[$i]['wr_id'] ?>"><?php echo $list[$i]['datetime'] ?></td>

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

  <!-- 220419 닥톡 -->
  <?php if ($is_admin) { ?>
    <script>
      $(document).ready(function() {
        var listNum = $(".line_top")[0].children.length;
        // console.log(listNum)

        for (var i = 0; i < $(".line_top")[0].children.length; i++) {
          (function(i) {

            var listHref = $(".line_top")[0].children[i].children[2].children[0].children[0].href;
            var regex = /[^0-9]/g;
            var questionKey = listHref.replace(regex, "");

            $.ajax({
              url: 'https://api.doctalk.co.kr/apis/consults/v1/check-consults',
              data: {
                accessKey: 'DTXX-244NOB-0d6f4a57-8742-46f4-8d6a-700bce77a983-1UrZGO-kxMCB',
                questionKey: `${questionKey}`
              },
              type: 'post',
              dataType: 'json',
              success: function(response, textStatus, xhr) {

                if (response.header.code == '0000') {

                  var doctalkUp = $(".line_top")[0].children[i].children[2].children[1].children[0].children[0].children[1].children[0];
                  // console.log(doctalkUp);

                  var jisikinUp = $(".line_top")[0].children[i].children[2].children[1].children[0].children[0].children[1].children[1];
                  // console.log(jisikinUp);


                  if (response.body.dtRegisteredYn == 'Y') {
                    doctalkUp.innerHTML = "O";
                    // console.log("1");
                  } else {
                    doctalkUp.innerHTML = "X";
                    // console.log("2");

                  }
                  if (response.body.kinRegisteredYn == 'Y') {
                    jisikinUp.innerHTML = "O";
                    // console.log("3");

                  } else {
                    jisikinUp.innerHTML = "X";
                    // console.log("4");

                  }
                } else {
                  doctalkUp.innerHTML = "X";
                  jisikinUp.innerHTML = "X";
                  // console.log("5");
                }
              }
            });
          })(i);
        }

      });
    </script>

  <?php } ?>
  <!-- 220419 닥톡 -->
<?php } ?>
<!-- } 게시판 목록 끝 -->