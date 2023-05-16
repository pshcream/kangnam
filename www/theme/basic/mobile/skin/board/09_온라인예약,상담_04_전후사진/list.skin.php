<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
//$colspan = 5;

//if ($is_checkbox) $colspan++;
//if ($is_good) $colspan++;
//if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css?ver='.$today.'">', 0);
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/open-iconic.css">', 0);

// 날짜 계산 함수
function passing_time($datetime)
{
    $time_lag = time() - strtotime($datetime);

    if ($time_lag < 60) {
        $posting_time = "방금";
    } elseif ($time_lag >= 60 and $time_lag < 3600) {
        $posting_time = floor($time_lag / 60) . "분 전";
    } elseif ($time_lag >= 3600 and $time_lag < 86400) {
        $posting_time = floor($time_lag / 3600) . "시간 전";
    } elseif ($time_lag >= 86400 and $time_lag < 2419200) {
        $posting_time = floor($time_lag / 86400) . "일 전";
    } else {
        $posting_time = date("y.m.d", strtotime($datetime));
    }

    return $posting_time;
}
?>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/style.css">


<!-- 상세페이지슬라이더 시작 -->

<script>
    $(document).ready(function() {
        // 스크롤시작
        var wTop = $(this).scrollTop();
        $(window).on('scroll', function() {
            wTop = $(this).scrollTop();
            if (wTop > 0) {
                $('#wrapper').addClass('on');
            } else {
                setTimeout(function() {
                    $('#wrapper').removeClass('on');
                }, 1000)

            }
        });
    });
</script>

<div id="" class="bigmenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/life-health-introduction/hospital-introduction/" class="">생활건강소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/diet-program/life-health-diet/" class="">다이어트프로그램</a>
            </div>
            <div class="swiper-slide">
                <a href="/diet-booster/fat-cut-injection/" class="">다이어트부스터</a>
            </div>
            <div class="swiper-slide">
                <a href="/device-introduction/main/" class="">장비소개</a>
            </div>
            <div class="swiper-slide">
                <a href="/one-on-one-diet/childhood-and-adolescent-obesity/" class="">1대1다이어트</a>
            </div>
            <div class="swiper-slide on">
                <a href="/event" class="">커뮤니티</a>
            </div>
            <div class="swiper-slide">
                <a href="/consult" class="">상담예약</a>
            </div>

        </div>
    </div>
</div>

<script>
    var bigmenuSlider = new Swiper('.bigmenu_slider .swiper-container', {
        direction: "horizontal",
        slidesPerView: "auto",
        speed: 600,
        spaceBetween: 0,
        initialSlide: 10,
    });
</script>

<div id="" class="submenu_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/event" class="">이벤트</a>
            </div>
            <div class="swiper-slide">
                <a href="/column" class="">칼럼</a>
            </div>
            <div class="swiper-slide on">
                <a href="/before_and_after" class="">전후사진</a>
            </div>

        </div>
    </div>
</div>

<script>
    var submenuSlider = new Swiper('.submenu_slider .swiper-container', {
        direction: "horizontal",
        slidesPerView: "auto",
        speed: 600,
        spaceBetween: 0,
        initialSlide: 2,
    });
</script>

<!-- 상세페이지슬라이더 끝 -->
<!---전후사진탭시작-->
<div class="page">
    <div class="sub">

        <div class="sub_title">
            <div class="name"><span>BEFORE&AFTER</span> <b>전후사진</b></div>
            <div class="exp">올리팅에서 시술한 다양한 사례를 볼 수 있습니다</div>
        </div>
        <!--
	<ul class="sub_tab surgical_treatment">
        <li class="on">
            <a href="/bbs/board.php?bo_table=before_after">복부지방</a>
        </li>
        <li>
            <a href="/bbs/board.php?bo_table=before_after">허벅지지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=before_after">팔뚝지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=before_after">종아리지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=before_after">등지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=before_after">엉덩이지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=before_after">특수부위지방</a>
        </li>
        <li>
            <a href="/bbs/board.php?bo_table=side#start">옆테라인지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=only#start">한부위지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=double_chin#start">이중턱지방</a>
        </li>
		
		<li>
            <a href="/bbs/board.php?bo_table=mini_fat#start">미니지방</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=again#start">지방흡입재수술</a>
        </li>
		<li>
            <a href="/bbs/board.php?bo_table=many#start">대용량지방</a>
        </li>
		<li>
            <a></a>
        </li>
		<li>
            <a></a>
        </li>
    </ul>	
      -->
        <!--
    <ul class="sub_tab ba_board">
        <li class="on">
            <a href="https://dodreamhairplant.co.kr/bbs/board.php?bo_table=before_after">전체</a>
        </li>
        <li>
            <a href="https://dodreamhairplant.co.kr/bbs/board.php?bo_table=before_after_m">M자</a>
        </li>
        <li>
            <a href="https://dodreamhairplant.co.kr/bbs/board.php?bo_table=before_after_o">정수리탈모</a>
        </li>
        <li>
            <a href="https://dodreamhairplant.co.kr/bbs/board.php?bo_table=before_after_w">여성탈모</a>
        </li>
        <li>
            <a href="https://dodreamhairplant.co.kr/bbs/board.php?bo_table=before_after_line">헤어라인교정</a>
        </li>
        
    </ul>
-->


        <div class="sub_nav mobile">
            <div class="nav_select">
                <select>
                    <option value="test.php" selected="selected">전체</option>
                    <option value="cure.php">M자</option>
                    <option value="care.php">정수리탈모</option>
                    <option value="immune.php">여성탈모</option>
                    <option value="immune.php">헤어라인교정</option>
                </select>
            </div>
        </div>



    </div>

    <!--전후사진탭끝-->

    <!-- 게시판 목록 시작 { -->
    <div id="bo_list" style="width:<?php echo $width; ?>">



        <!-- 게시판 페이지 정보 및 버튼 시작 { -->
        <div id="bo_btn_top">
            <div id="bo_list_total">
                <!-- 게시판 카테고리 시작 { -->
                <?php if ($is_category) { ?>
                    <nav id="bo_cate" style="float:left; margin-right:25px;">
                        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
                        <ul id="bo_cate_ul">
                            <?php echo $category_option ?>
                        </ul>
                    </nav>
                <?php } ?>
                <nav id="bo_cate" style="float:left">
                    <span class="color-gray" style="line-height:30px; float:left;">전체 <?php echo number_format($total_count) ?>건 <?php echo $page ?> 페이지</span>
                </nav>
                <!-- } 게시판 카테고리 끝 -->
            </div>

            <?php if ($rss_href || $write_href) { ?>

                <ul class="btn_bo_user">
                    <!--
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_admin2 btn">RSS</a></li><?php } ?>
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin2 btn">관리자</a></li><?php } ?>
			-->
                    <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_b03 btn" title="게시판관리"><i class="oi oi-cog color-blue"></i></a></li><?php } ?>
                    <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn color-blue-bg">글쓰기</a></li><?php } ?>
                </ul>
            <?php } ?>
        </div>
        <!-- } 게시판 페이지 정보 및 버튼 끝 -->


        <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">

            <div class="tbl_head01 tbl_wrap">


                <ul id="gall_ul" class="gall_row">
                    <?php for ($i = 0; $i < count($list); $i++) {

                        $classes = array();

                        $classes[] = 'gall_li';
                        $classes[] = 'col-gn-' . $bo_gallery_cols;

                        if ($i && ($i % $bo_gallery_cols == 0)) {
                            $classes[] = 'box_clear';
                        }

                        if ($wr_id && $wr_id == $list[$i]['wr_id']) {
                            $classes[] = 'gall_now';
                        }
                    ?>
                        <li class="<?php echo implode(' ', $classes); ?>">



                            <div class="gall_box">
                                <div class="gall_chk">
                                    <?php if ($is_checkbox) { ?>
                                        <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                    <?php } ?>
                                    <span class="sound_only">
                                        <?php
                                        if ($wr_id == $list[$i]['wr_id'])
                                            echo "<span class=\"bo_current\">열람중</span>";
                                        else
                                            echo $list[$i]['num'];
                                        ?>
                                    </span>
                                </div>

                                <!--
                <div class="gall_con" onclick="location.href='<?php echo $list[$i]['href'] ?>'" style="corsor:pointer;">
-->
                                <div class="gall_con" style="corsor:pointer;">
                                    <div class="gall_img" style="height:<?php echo $board['bo_gallery_height'] ?>; width:<?php echo $board['bo_gallery_width'] ?>px; overflow: hidden;">
                                        <!--
                        <a href="<?php echo $list[$i]['href'] ?>">
                          -->
                                        <a>
                                            <?php
                                            if ($list[$i]['is_notice']) { // 공지사항  
                                            ?>
                                                <span class="no_image" style="width:100%; font-size:12px; font-weight:normal;"><i class="oi oi-bell" aria-hidden="true" style="color:#0099FF"></i></span>
                                            <?php } else {
                                                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                                if ($thumb['src']) {
                                                    $img_content = '<img src="' . $thumb['src'] . '" alt="' . $thumb['alt'] . '" >';
                                                } else {
                                                    $img_content = '<span class="no_image" style="width:100%; font-size:12px; font-weight:normal;">이미지가 없습니다.</span>';
                                                }

                                                echo $img_content;
                                            }
                                            ?>
                                        </a>
                                        <!--
                        </a>
                           -->
                                    </div>
                                    <div style="margin-top:10px;">
                                        <!--
                        <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit" style="font-size:14px"><?php echo $list[$i]['subject'] ?></a>
                         -->
                                        <a class="bo_tit" style="font-size:14px"><?php echo $list[$i]['subject'] ?></a>
                                    </div>
                                    <div style="margin-top:5px;">
                                        <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> <?php echo passing_time($list[$i]['wr_datetime']) ?>　</span>
                                        <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> <?php echo $list[$i]['wr_hit'] ?>　</span>
                                        <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> <?php echo $list[$i]['wr_comment']; ?>　</span>
                                    </div>

                                </div>
                            </div>

                        </li>
                    <?php } ?>
                    <?php if (count($list) == 0) {
                        echo "<li class=\"empty_list\">게시물이 없습니다.</li>";
                    } ?>
                </ul>
            </div>

            <?php if ($list_href || $is_checkbox || $write_href) { ?>
                <div class="bo_fx">
                    <?php if ($list_href || $write_href) { ?>
                        <ul class="btn_bo_user">
                            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_admin btn" title="목록"><i class="oi oi-menu"></i></a></li><?php } ?>
                            <?php if ($is_checkbox) { ?>
                                <li><button type="submit" name="btn_submit" value="선택삭제" title="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin"><i class="oi oi-trash"></i></button></li>
                                <li><button type="submit" name="btn_submit" value="선택복사" title="선택복사" onclick="document.pressed=this.value" class="btn btn_admin"><i class="oi oi-file"></i></button></li>
                                <li><button type="submit" name="btn_submit" value="선택이동" title="선택이동" onclick="document.pressed=this.value" class="btn btn_admin"><i class="oi oi-layers"></i></button></li>
                            <?php } ?>
                            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_admin btn" title="글쓰기"><i class="oi oi-pencil color-blue"></i></a></li><?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            <?php } ?>

        </form>

        <!-- 게시판 검색 시작 { -->
        <fieldset id="bo_sch">
            <legend>게시물 검색</legend>

            <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl">
                    <option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                    <option value="wr_content" <?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                    <option value="wr_subject||wr_content" <?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
                </select>
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어 입력">
                <button type="submit" value="검색" class="sch_btn"><i class="oi oi-magnifying-glass" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </form>
        </fieldset>
        <!-- } 게시판 검색 끝 -->



    </div>



    <?php if ($is_checkbox) { ?>
        <noscript>
            <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
        </noscript>
    <?php } ?>



    <!-- 페이지 -->
    <?php echo $write_pages;  ?>


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
                    f.action = "./board_list_update.php";
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
                f.action = "./move.php";
                f.submit();
            }
        </script>
    <?php } ?>
    <!-- } 게시판 목록 끝 -->
</div>