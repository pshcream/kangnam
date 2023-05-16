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

<!---이벤트게시판제목시작----->




<!---이벤트게시판제목끝--->

<style>
    #bo_list {
        border-bottom: none;
    }

    .active_prod {
        transition: width 0.3s, opacity 0.5s;
        -webkit-transition: width 0.3s, opacity 0.5s;
        -moz-transition: width 0.3s, opacity 0.5s;
        -ms-transition: width 0.3s, opacity 0.5s;
        -o-transition: width 0.3s, opacity 0.5s;
        background-image: none;
        background-color: #bc776a;
        right: 0;
        left: 0;
        margin: 10px auto;
        height: 4px;
        width: 0;
    }
</style>

<!-- 상시할인시작 -->
<div class="page">
    <div class="sub">
        <div class="sub_title">
            <div class="name"><span>ALL LITING EVENT</span> <b>상시할인 이벤트</b></div>
            <div class="exp">당신을 위한 특별 이벤트를 준비했습니다</div>
        </div>
    </div>
</div>
<div id="bo_list" style="width:100%">


    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <!-- 게시판 카테고리 시작 { -->
            <nav id="bo_cate" style="float:left">
                <span class="color-gray" style="line-height:30px; float:left;">전체 4건 1 페이지</span>
            </nav>
            <!-- } 게시판 카테고리 끝 -->
        </div>

    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->


    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="event">
        <input type="hidden" name="sfl" value="">
        <input type="hidden" name="stx" value="">
        <input type="hidden" name="spt" value="">
        <input type="hidden" name="sca" value="">
        <input type="hidden" name="sst" value="wr_num, wr_reply">
        <input type="hidden" name="sod" value="">
        <input type="hidden" name="page" value="1">
        <input type="hidden" name="sw" value="">

        <div class="tbl_head01 tbl_wrap">


            <ul id="gall_ul" class="gall_row">
                <li class="gall_li col-gn-3">



                    <div class="gall_box">
                        <div class="gall_chk">
                            <span class="sound_only">
                                4 </span>
                        </div>


                        <div class="gall_con" onclick="window.open('https://theolimclinic.com/event&amp;wr_id=4')" style="corsor:pointer;">
                            <div class="gall_img" style="height:400; width:400px; overflow: hidden;">
                                <!--
                        <a href="https://theolimclinic.com/event&amp;wr_id=4" target="_blank">
                        -->
                                <a>
                                    <img src="https://theolimclinic.com/data/file/event/thumb-1935668570_iBsTJ7pV_1e5852aa300980f451b32c110f8e59bfdc2273c2_400x400.jpg" alt="">
                                    <div class="active_prod"></div>
                                </a>
                            </div>


                            <div style="margin-top:10px;">
                                <!--
						<a href="https://theolimclinic.com/event&amp;wr_id=4" class="bo_tit" style="font-size:14px" target="_blank">
                        -->
                                <a class="bo_tit" style="font-size:14px">
                                    프리미엄 명품 눈밑수술 자연스럽게 빛나는 피부를 위한 첫걸음 - 샤넬주사 1CC 5.9만원 </a>
                            </div>
                            <div style="margin-top:5px;">
                                <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> 21.11.10　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> 151　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> 0　</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="gall_li col-gn-3">
                    <div class="gall_box">
                        <div class="gall_chk">
                            <span class="sound_only"> 3 </span>
                        </div>
                        <div class="gall_con" onclick="window.open('https://theolimclinic.com/event&amp;wr_id=3')" style="corsor:pointer;">
                            <div class="gall_img" style="height:400; width:400px; overflow: hidden;">
                                <!--
                        <a href="https://theolimclinic.com/event&amp;wr_id=3" target="_blank">
                        -->
                                <a>
                                    <img src="https://theolimclinic.com/data/file/event/thumb-1935668570_KlaVs57j_f05db65388505db2e8e9dd43850ed3163e24ed54_400x400.jpg" alt="" title="">
                                    <div class="active_prod"></div>
                                </a>
                            </div>


                            <div style="margin-top:10px;">
                                <!--
						<a href="https://theolimclinic.com/event&amp;wr_id=3" class="bo_tit" style="font-size:14px" target="_blank">
                        -->
                                <a class="bo_tit" style="font-size:14px">매끈하고 강력하다! 민트오늘,감량프리미엄한약 - 360도 입체돌기로 더 강력하게! 2줄 9.9만원 </a>
                            </div>
                            <div style="margin-top:5px;">
                                <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> 21.11.10　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> 103　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> 0　</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="gall_li col-gn-3">
                    <div class="gall_box">
                        <div class="gall_chk">
                            <span class="sound_only"> 2 </span>
                        </div>
                        <div class="gall_con" onclick="window.open('https://theolimclinic.com/event&amp;wr_id=2')" style="corsor:pointer;">
                            <div class="gall_img" style="height:400; width:400px; overflow: hidden;">
                                <a>
                                    <img src="https://theolimclinic.com/data/file/event/thumb-1935668570_iPUGN7jh_437f65ab69b5f6a0e86dacc48c3e933bf1fa4a96_400x400.jpg" alt="" title="">
                                    <div class="active_prod"></div>
                                </a>
                            </div>
                            <div style="margin-top:10px;">
                                <a class="bo_tit" style="font-size:14px">피부겉은 탄력있게! 피부속은 촉촉하게! 리쥬란힐러 2cc 14.9만원 </a>
                            </div>
                            <div style="margin-top:5px;">
                                <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> 21.11.10　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> 141　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> 0　</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="gall_li col-gn-3 box_clear">
                    <div class="gall_box">
                        <div class="gall_chk">
                            <span class="sound_only"> 1 </span>
                        </div>
                        <div class="gall_con" onclick="window.open('https://theolimclinic.com/event&amp;wr_id=1')" style="corsor:pointer;">
                            <div class="gall_img" style="height:400; width:400px; overflow: hidden;">
                                <a>
                                    <img src="https://theolimclinic.com/data/file/event/thumb-1935668570_Q241vGSg_506a0a233b3149e20983b64bac8ad27e219b706a_400x400.jpg" alt="">
                                    <div class="active_prod"></div>
                                </a>
                            </div>
                            <div style="margin-top:10px;">
                                <a class="bo_tit" style="font-size:14px">올리팅 인모드 리프팅 2부위 9.9만원 </a>
                            </div>
                            <div style="margin-top:5px;">
                                <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> 21.11.10　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> 210　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> 0　</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</div>
<!-- 상시할인끝 -->
<!-- 기간할인시작 -->
<div class="page">
    <div class="sub">
        <div class="sub_title">
            <div class="name"><span>ALL LITING EVENT</span> <b>기간할인 이벤트</b></div>
            <div class="exp">당신을 위한 특별 이벤트를 준비했습니다</div>
        </div>
    </div>
</div>
<div id="bo_list" style="width:100%">
    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="event_occasion">
        <input type="hidden" name="sfl" value="">
        <input type="hidden" name="stx" value="">
        <input type="hidden" name="spt" value="">
        <input type="hidden" name="sca" value="">
        <input type="hidden" name="sst" value="wr_num, wr_reply">
        <input type="hidden" name="sod" value="">
        <input type="hidden" name="page" value="1">
        <input type="hidden" name="sw" value="">

        <div class="tbl_head01 tbl_wrap">


            <ul id="gall_ul" class="gall_row">
                <li class="gall_li col-gn-3">



                    <div class="gall_box">
                        <div class="gall_chk">
                            <span class="sound_only">
                                1 </span>
                        </div>


                        <div class="gall_con" onclick="window.open('https://theolimclinic.com/event_occasion&amp;wr_id=1')" style="corsor:pointer;">
                            <div class="gall_img" style="height:400; width:400px; overflow: hidden;">
                                <!--
                        <a href="https://theolimclinic.com/event_occasion&amp;wr_id=1" target="_blank">
                        -->
                                <a>
                                    <img src="https://theolimclinic.com/data/file/event_occasion/thumb-1935668571_OAQuVHya_c37dc17fcc82e9f879b94f30a51cd374c56fa503_400x400.jpg" alt="" title="">
                                    <div class="active_prod"></div>
                                </a>
                            </div>


                            <div style="margin-top:10px;">
                                <!--
						<a href="https://theolimclinic.com/event_occasion&amp;wr_id=1" class="bo_tit" style="font-size:14px" target="_blank">
                        -->
                                <a class="bo_tit" style="font-size:14px">
                                    2022 올리팅 리프팅 새해뷰티혜택 </a>
                            </div>
                            <div style="margin-top:5px;">
                                <span class="bo_cate_link color-gray"><i class="oi oi-clock"></i> 13분 전　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-eye"></i> 1　</span>
                                <span class="bo_cate_link color-gray"><i class="oi oi-chat"></i> 0　</span>
                            </div>

                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </form>
</div>

<!-- 기간할인끝 -->



<!-- } 게시판 목록 끝 -->