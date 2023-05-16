<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">




    <!--두드림지식인상단시작--->
    <div class="jisik_top">
        <a class="jisik_logo" href="/jisikin">
            <img src="/theme/hospital/img/jisik_logo.png">
        </a>
    </div>
    <!--두드림지식인상단끝--->

    <!-- 닥톡 20220228 -->
    <?php
    // $res = var_dump($view);
    // echo ("<script>console.log(" . $res . ");</script>");
    ?>

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
                            <input type="text" name="stx" required id="sch_stx" class="sch_input" size="25" maxlength="20" placeholder=" 궁금한 한방다이어트 키워드를 입력해보세요.">
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
        <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=다이어트프로그램">#다이어트프로그램</a>
        <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=한약">#한약</a>
        <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=다이어트부스터">#다이어트부스터</a>
        <a href="/jisikin?sca=&sop=and&sfl=wr_subject%7C%7Cwr_content&stx=한방다이어트">#한방다이어트</a>
    </div>
    <!--인기키워드끝-->



    <header>

        <section id="bo_v_info">
            <table class="table">
                <caption>설명</caption>
                <colgroup>
                    <col style="width: 4%">
                    <col style="width: 96%">
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">
                            <img src="https://dformula.speedgabia.com/_dodreamhairplant/jisik_q.png">
                        </th>
                        <td>
                            <span class="bo_v_tit">
                                <?php
                                echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                                ?>
                                <!-- 220412 -->
                                (<?php if ($view['wr_5']) {
                                        echo $view['wr_5'];
                                    } ?><?php if ($view['wr_6']) {
                                            echo '&nbsp;' . $view['wr_6'];
                                        } ?><?php if ($view['wr_7']) {
                                                echo '/' . $view['wr_7'];
                                            } ?><?php if ($view['wr_1']) {
                                                    echo '&nbsp;' . $view['wr_1'];
                                                } ?><?php if ($view['wr_2']) {
                                                        echo '/' . $view['wr_2'];
                                                    } ?>)
                                <!--  -->
                            </span>

                        </td>
                    </tr>

                    <?php if ($category_name) { ?>
                        <tr>
                            <th scope="row">구분</th>
                            <td> <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 
                                                            ?></span> </td>
                        </tr>
                    <?php } ?>


                    <!--    <tr>
									<th scope="row">작성자</th>
									<td><span class="bo_v_cate"> <span class="sound_only">작성자 </span>
                                          <?/*php
                                            echo $view['name'] 
                                           */ ?></span></td>
								</tr>  -->
                    <?php if ($is_admin) { ?>
                        <tr>
                            <th scope="row">작성자 | 이름 | 연락처 :</th>
                            <!-- <span class="sound_only">작성일</span> -->
                            <td>
                                <span class="if_date">
                                    <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
                                </span> | <?php echo $view['wr_name'] ?> | <?php echo $view['wr_4'] ?>
                                <?php if ($admin_href) /*관리자만 볼수 있어요 */ { ?>
                                    <?php if ($is_ip_view) {
                                        echo "&nbsp;($ip)";
                                    } ?></strong>
                                    <span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
                                    <span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
                                <?php } ?>


                            </td>
                        </tr>

                    <?php } ?>


                    <!-- 첨부파일 시작 { -->
                    <?php
                    $cnt = 0;
                    if ($view['file']['count']) {
                        for ($i = 0; $i < count($view['file']); $i++) {
                            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                                $cnt++;
                        }
                    }
                    ?>
                    <?php if ($cnt) { ?>
                        <?php
                        // 가변 파일
                        for ($i = 0; $i < count($view['file']); $i++) {
                            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                        ?>
                                <tr>
                                    <th scope="row">첨부파일</th>
                                    <td><i class="fa fa-folder-open" aria-hidden="true"></i>
                                        <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download" download>
                                            <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                                        </a> <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
                                    </td>
                                </tr>
                                <?php }
                        } ?><?php } ?>
                                <!-- } 첨부파일 끝 -->

                                <!-- 참고링크 시작 { -->
                                <?php if (isset($view['link']) && array_filter($view['link'])) { ?>
                                    <?php
                                    // 링크
                                    $cnt = 0;
                                    for ($i = 1; $i <= count($view['link']); $i++) {
                                        if ($view['link'][$i]) {
                                            $cnt++;
                                            $link = cut_str($view['link'][$i], 70);
                                    ?>
                                            <tr>
                                                <th scope="row">참고링크</th>
                                                <td> <i class="fa fa-link" aria-hidden="true"></i> <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                                                        <strong><?php echo $link ?></strong> </a> <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?><?php } ?>


                </tbody>
            </table>
        </section>
    </header>



    <!---관리자페이지편집시작!--->
    <?php if ($is_admin) { ?>
        <div class="edit_q">

            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>">수정 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li><?php } ?>

            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;">삭제 <i class="fa fa-trash-o" aria-hidden="true"></i></a></li><?php } ?>

            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="" title="글쓰기">새글쓰기 <i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>

        </div>
    <?php } else {  ?>
    <?php } ?>
    <!---관리자페이지편집끝--->


    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>
        <!-- 게시물 상단 버튼 시작 { -->
        <div id="bo_v_top">
            <?php ob_start(); ?>

            <ul class="btn_bo_user bo_v_com">
                <li><a href="<?php echo $list_href ?>" class="btn_b01 btn" title="목록"><i class="fa fa-list" aria-hidden="true"></i><span class="sound_only">목록</span></a></li>
                <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn" title="답변"><i class="fa fa-reply" aria-hidden="true"></i><span class="sound_only">답변</span></a></li><?php } ?>
                <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
                <?php if ($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
                    <li>
                        <button type="button" class="btn_more_opt is_view_btn btn_b01 btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
                        <ul class="more_opt is_view_btn">
                            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>">수정<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li><?php } ?>
                            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;">삭제<i class="fa fa-trash-o" aria-hidden="true"></i></a></li><?php } ?>
                            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;">복사<i class="fa fa-files-o" aria-hidden="true"></i></a></li><?php } ?>
                            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;">이동<i class="fa fa-arrows" aria-hidden="true"></i></a></li><?php } ?>
                            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>">검색<i class="fa fa-search" aria-hidden="true"></i></a></li><?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
            <script>
                jQuery(function($) {
                    // 게시판 보기 버튼 옵션
                    $(".btn_more_opt.is_view_btn").on("click", function(e) {
                        e.stopPropagation();
                        $(".more_opt.is_view_btn").toggle();
                    });
                    $(document).on("click", function(e) {
                        if (!$(e.target).closest('.is_view_btn').length) {
                            $(".more_opt.is_view_btn").hide();
                        }
                    });
                });
            </script>
            <?php
            $link_buttons = ob_get_contents();
            ob_end_flush();
            ?>
        </div>
        <!-- } 게시물 상단 버튼 끝 -->

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if ($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            foreach ($view['file'] as $view_file) {
                echo get_file_thumbnail($view_file);
            }

            echo "</div>\n";
        }
        ?>

        <?php
        $res = get_view_thumbnail($view['content']);
        // $res2 = var_dump($view['content']);
        $res3 = $view['content'];
        // echo("<script>
        // var res = ");
        // echo $res;
        // echo(";
        // console.log(res);
        // </script>");
        ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 
        ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>



        <!--  추천 비추천 시작 { -->
        <?php if ($good_href || $nogood_href) { ?>
            <div id="bo_v_act">
                <?php if ($good_href) { ?>
                    <span class="bo_v_act_gng">
                        <a href="<?php echo $good_href . '&amp;' . $qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                        <b id="bo_v_act_good"></b>
                    </span>
                <?php } ?>
                <?php if ($nogood_href) { ?>
                    <span class="bo_v_act_gng">
                        <a href="<?php echo $nogood_href . '&amp;' . $qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                        <b id="bo_v_act_nogood"></b>
                    </span>
                <?php } ?>
            </div>
            <?php } else {
            if ($board['bo_use_good'] || $board['bo_use_nogood']) {
            ?>
                <div id="bo_v_act">
                    <?php if ($board['bo_use_good']) { ?><span class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
                    <?php if ($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
                </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <div id="bo_v_share">

        <?php if ($scrap_href) { ?>
            <a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;">
                <i class="fa fa-bookmark" aria-hidden="true"></i> 스크랩</a>
        <?php } ?>

        <?php include_once(G5_SNS_PATH . "/view.sns.skin.php"); ?>

    </div>




    <!--  게시판 목록 시작 { -->
    <!--
<div id="bot_botton">
    <ul>
    <li><a href="javascript:history.back();" class="bot_left" title="목록">이전</i><span class="sound_only">이전</span></a></li>
    <li><a href="<?php echo $list_href ?>" class="bot_right" title="목록">목록으로</i><span class="sound_only">목록</span></a></li>
   
    </ul>
</div>
-->
    <!-- } 게시판 목록 끝 -->

    <!--  이전다음  { -->
    <div id="bo_v_n">
        <?php if ($prev_href || $next_href) { ?>
            <ul class="bo_v_nb">
                <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tia"> 이전글 <i class="fa fa-angle-up"></i></span>
                        <span class="nb_href">
                            <a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject; ?></a> </span>
                        <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span>
                    </li><?php } ?>

                <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tib"> 다음글 <i class="fa fa-angle-down"></i></span>
                        <span class="nb_href">
                            <a href="<?php echo $next_href ?>"><?php echo $next_wr_subject; ?></a> </span>
                        <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span>
                    </li><?php } ?>
            </ul>
        <?php } ?>
    </div>
    <!-- } 이전다음  끝 -->

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH . '/view_comment.php');
    ?>
</article>
<!-- } 게시판 읽기 끝 -->


<!--  게시판 목록 시작 { -->

<!-- 닥톡연동여부확인_220413 -->
<?php if ($is_admin) { ?>

    <div class="doctalkChk" i="doctalkChk">
        <p>업로드여부확인</p>
        <table>
            <tr>
                <th>닥톡</th>
                <th>지식인</th>
            </tr>
            <tr>
                <td id="doctalk_up"></td>
                <td id="jisikin_up"></td>
            </tr>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            doctalk_chk();
        });

        function doctalk_chk() {
            var source = location.pathname;
            console.log(source);
            var regex = /[^0-9]/g;
            var questionKey = source.replace(regex, "");
            console.log(questionKey);

            $.ajax({
                url: 'https://api.doctalk.co.kr/apis/consults/v1/check-consults',
                data: {
                    accessKey: 'DTXX-r6f1u-408afd75-cbf0-4ba5-a641-953ce37d7a94-1f9Gxq-Qnmwu',
                    questionKey: `${questionKey}`
                },
                type: 'post',
                dataType: 'json',
                success: function(response, textStatus, xhr) {

                    if (response.header.code == '0000') {

                        // var text = '성공'

                        if (response.body.dtRegisteredYn == 'Y') {
                            // text += '\n닥톡에 글이 등록됨'
                            $("#doctalk_up").html("O");
                        } else {
                            // text += '\n닥톡에 글이 등록되지 않음'
                            $("#doctalk_up").html("X");
                        }
                        if (response.body.kinRegisteredYn == 'Y') {
                            // text += '\n지식인에 글이 등록됨'
                            $("#jisikin_up").html("O");
                        } else {
                            // text += '\n지식인에 글이 등록되지 않음'
                            $("#jisikin_up").html("X");

                        }

                        // alert(text + '\n' + JSON.stringify(response.body));
                    } else {
                        $("#doctalk_up").html("X");
                        $("#jisikin_up").html("X");
                        // alert('실패\n' + JSON.stringify(response.header));
                    }
                }
            });
        }
    </script>
<?php } ?>
<!-- 닥톡연동여부확인_220413 -->

<!-- 닥톡연동_220228 -->
<?php if ($is_admin) { ?>
    <button class="doctalkBtn" onclick="doctalk()">닥톡지식인연동하기</button>

    <script>
        function doctalk() {

            var region = '<?php echo $view['wr_5'] ?>';
            var age = '<?php echo $view['wr_6'] ?>';
            var gender = '<?php echo $view['wr_7'] ?>';
            var category_area = '<?php echo $view['wr_1'] ?>';
            var category_type = '<?php echo $view['wr_2'] ?>';
            var category_num = '<?php echo $view['wr_3'] ?>';
            var title = $(".bo_v_tit")[0].innerText;

            // var URLSearch = new URLSearchParams(location.search);
            // var questionKey = parseInt(URLSearch.get("wr_id"));

            var questionBody = $("#bo_v_con")[0].innerHTML;
            var questionDate = $(".if_date")[0].innerHTML.trim();
            var answerBody = $("#answerBody")[0].innerHTML;
            var answerDate = $(".bo_vc_hdinfo time")[0].innerText.trim();
            var source = location.href;
            var regex = /[^0-9]/g;
            var questionKey = source.replace(regex, "");

            console.log(region);
            console.log(age);
            console.log(gender);
            console.log(category_area);
            console.log(category_type);
            console.log(title);
            console.log(questionKey);
            console.log(questionBody);
            // console.log(typeof questionBody);
            // console.log(JSON.stringify(questionBody));
            // console.log(typeof JSON.stringify(questionBody));
            console.log(questionDate);
            console.log(answerBody);
            // console.log(typeof answerBody);
            // console.log(JSON.stringify(answerBody));
            // console.log(typeof JSON.stringify(answerBody));
            console.log(answerDate);
            console.log(source);

            $.ajax({
                //개발
                // url: 'https://dev.doctalk.co.kr/apis/consults/v2/reg-consults',
                //상용
                url: 'https://api.doctalk.co.kr/apis/consults/v2/reg-consults',
                data: {
                    // 개발
                    // accessKey: 'DTXX-ALmSp-df7e0359-af15-4756-8a48-9ce38127e564-1b8ACa-BRHg9',
                    //상용
                    accessKey: 'DTXX-r6f1u-408afd75-cbf0-4ba5-a641-953ce37d7a94-1f9Gxq-Qnmwu',
                    subjectCode: '10131',
                    // questionTitle: `${title} (${region} ${age} ${gender} ${category_area}/${category_type})`,
                    questionTitle: `${title}`,
                    questionKey: `${questionKey}`,
                    questionBody: `<p>${questionBody}</p>`,
                    questionDate: `20${questionDate}:00`,
                    /* 선택사항 answerKey: 'answer`s primary(unique) key' */
                    answerBody: `<p>${answerBody}\n<br>※전문가의 예상 치료비, 할인 가능 여부, 편집된 답변 내용 등 추가 정보가 궁금하시면 아래 출처를 통해 확인할 수 있습니다.</p>`,
                    answerDate: `20${answerDate}:00`,
                    contentsType: 'html',
                    source: `${source}`,
                    // tags: '여성다이어트프로그램,엠자다이어트프로그램,30대다이어트프로그램'
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
<!-- 닥톡연동_220228 -->


<div id="bot_botton">
    <ul>
        <!--
    <li><a href="javascript:history.back();" class="bot_left" title="목록">이전</i><span class="sound_only">이전</span></a></li>
-->
        <li><a href="<?php echo $list_href ?>" class="bot_right" title="목록">목록으로</i><span class="sound_only">목록</span></a></li>



    </ul>
</div>
<!-- } 게시판 목록 끝 -->




<script>
    <?php if ($board['bo_download_point'] < 0) { ?>
        $(function() {
            $("a.view_file_download").click(function() {
                if (!g5_is_member) {
                    alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
                    return false;
                }

                var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

                if (confirm(msg)) {
                    var href = $(this).attr("href") + "&js=on";
                    $(this).attr("href", href);

                    return true;
                } else {
                    return false;
                }
            });
        });
    <?php } ?>

    function board_move(href) {
        window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
    }
</script>

<script>
    $(function() {
        $("a.view_image").click(function() {
            window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
            return false;
        });

        // 추천, 비추천
        $("#good_button, #nogood_button").click(function() {
            var $tx;
            if (this.id == "good_button")
                $tx = $("#bo_v_act_good");
            else
                $tx = $("#bo_v_act_nogood");

            excute_good(this.href, $(this), $tx);
            return false;
        });

        // 이미지 리사이즈
        $("#bo_v_atc").viewimageresize();
    });

    function excute_good(href, $el, $tx) {
        $.post(
            href, {
                js: "on"
            },
            function(data) {
                if (data.error) {
                    alert(data.error);
                    return false;
                }

                if (data.count) {
                    $el.find("strong").text(number_format(String(data.count)));
                    if ($tx.attr("id").search("nogood") > -1) {
                        $tx.text("이 글을 비추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    } else {
                        $tx.text("이 글을 추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    }
                }
            }, "json"
        );
    }


    var res = "<?php $res ?>";
    var res2 = "<?php echo $res ?>";
    console.log(res);
    console.log(res2);
</script>
<!-- } 게시글 읽기 끝 -->