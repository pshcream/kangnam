<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <?php
        $option = '';
        $option_hidden = '';
        if ($is_notice || $is_html || $is_secret || $is_mail) {
            $option = '';
            if ($is_notice) {
                $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" ' . $notice_checked . '>' . PHP_EOL . '<label for="notice"><span></span>공지</label></li>';
            }
            if ($is_html) {
                if ($is_dhtml_editor) {
                    $option_hidden .= '<input type="hidden" value="html1" name="html">';
                } else {
                    $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="' . $html_value . '" ' . $html_checked . '>' . PHP_EOL . '<label for="html"><span></span>html</label></li>';
                }
            }
            if ($is_secret) {
                if ($is_admin || $is_secret == 1) {
                    $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" ' . $secret_checked . '>' . PHP_EOL . '<label for="secret"><span></span>비밀글</label></li>';
                } else {
                    $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                }
            }
            if ($is_mail) {
                $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" ' . $recv_email_checked . '>' . PHP_EOL . '<label for="mail"><span></span>답변메일받기</label></li>';
            }
        }
        echo $option_hidden;
        ?>

        <!-- <?php if ($is_category) { ?>
            <div class="bo_w_select write_div">
                <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
                <select name="ca_name" id="ca_name" required>
                    <option value="">분류를 선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </div>
        <?php } ?> -->

        <?php if ($is_category) { ?>
            <div class="bo_w_ico write_div">
                <label for="ca_name" class="lb_icon"><i class="fa fa-check"></i> <span class="sound_only"> 분류<strong>필수</strong></span></label>
                <select name="ca_name" id="ca_name" required class="frm_input full_input required">
                    <option value="">분류를 선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </div>
        <?php } ?>
        <!-- 닥톡 220307 -->
        <div class="doctalk_surgery">
            <select name='wr_1' value='<?= $write[`wr_1`] ?>' required class="doctalk_select">
                <option value="">고민부위</option>
                <option value="팔뚝" <? if ($write[wr_1] == '팔뚝') echo " selected "; ?>>팔뚝</option>
                <option value="허벅지" <? if ($write[wr_1] == '허벅지') echo " selected "; ?>>허벅지</option>
                <option value="복부" <? if ($write[wr_1] == '복부') echo " selected "; ?>>복부</option>
                <option value="종아리" <? if ($write[wr_1] == '종아리') echo " selected "; ?>>종아리</option>
                <option value="등" <? if ($write[wr_1] == '등') echo " selected "; ?>>등</option>
                <option value="엉덩이" <? if ($write[wr_1] == '엉덩이') echo " selected "; ?>>엉덩이</option>
                <option value="얼굴" <? if ($write[wr_1] == '얼굴') echo " selected "; ?>>얼굴</option>
                <option value="전신" <? if ($write[wr_1] == '전신') echo " selected "; ?>>전신</option>
                <option value="기타" <? if ($write[wr_1] == '기타') echo " selected "; ?>>기타</option>

            </select>
            <select name='wr_2' value='<?= $write[`wr_2`] ?>' required class="doctalk_select">
                <option value="">관심시술</option>
                <option value="다이어트프로그램" <? if ($write[wr_2] == '다이어트프로그램') echo " selected "; ?>>다이어트프로그램</option>
                <option value="다이어트한약" <? if ($write[wr_2] == '다이어트한약') echo " selected "; ?>>다이어트한약</option>
                <option value="다이어트주사" <? if ($write[wr_2] == '다이어트주사') echo " selected "; ?>>다이어트주사</option>
                <option value="다이어트시술" <? if ($write[wr_2] == '다이어트시술') echo " selected "; ?>>다이어트시술</option>
                <option value="기타" <? if ($write[wr_2] == '기타') echo " selected "; ?>>기타</option>
            </select>

        </div>
        <!-- 닥톡 220307 -->

        <!--  -->
        <div class="bo_w_info write_div">
            <?php if ($is_name) { ?>
                <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
                <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input half_input required" placeholder="이름">
            <?php } ?>

            <?php if ($is_password) { ?>
                <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
                <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input half_input <?php echo $password_required ?>" placeholder="비밀번호">
            <?php } ?>

            <?php if ($is_email) { ?>
                <label for="wr_email" class="sound_only">이메일</label>
                <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input email " placeholder="이메일">
            <?php } ?>


            <!-- <?php if ($is_homepage) { ?>
                <label for="wr_homepage" class="sound_only">홈페이지</label>
                <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지">
            <?php } ?> -->
        </div>

        <?php if ($option) { ?>
            <div class="write_div">
                <span class="sound_only">옵션</span>
                <ul class="bo_v_option">
                    <?php echo $option ?>
                </ul>
            </div>
        <?php } ?>


        <!-- 닥톡_220228 -->
        <div class="doctalk_person">
            <input type="tel" name="wr_4" value="" placeholder="전화번호" required class="required">
            <input type="text" name="wr_5" value="" placeholder="지역" required class="required">
            <select name='wr_6' value='<?= $write[`wr_6`] ?>' class="doctalk_select">
                <option value="20대" <? if ($write[wr_6] == '20대') echo " selected "; ?>>20대</option>
                <option value="30대" <? if ($write[wr_6] == '30대') echo " selected "; ?>>30대</option>
                <option value="40대" <? if ($write[wr_6] == '40대') echo " selected "; ?>>40대</option>
                <option value="50대" <? if ($write[wr_6] == '50대') echo " selected "; ?>>50대</option>
                <option value="60대이상" <? if ($write[wr_6] == '60대이상') echo " selected "; ?>>60대이상</option>
            </select>
            <select name='wr_7' value='<?= $write[`wr_7`] ?>' class="doctalk_select" required>
                <option value="여성" <? if ($write[wr_7] == '여성') echo " selected "; ?>>여성</option>
                <option value="남성" <? if ($write[wr_7] == '남성') echo " selected "; ?>>남성</option>
            </select>
        </div>

        <!-- 닥톡_220228 -->

        <div class="bo_w_tit write_div">
            <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>

            <div id="autosave_wrapper" class="write_div">
                <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
                <?php if ($is_member) { // 임시 저장된 글 기능 
                ?>
                    <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                    <?php if ($editor_content_js) echo $editor_content_js; ?>
                    <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                    <div id="autosave_pop">
                        <strong>임시 저장된 글 목록</strong>
                        <ul></ul>
                        <div><button type="button" class="autosave_close">닫기</button></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <style>
            textarea#wr_content {
                font-size: 14px;
            }
        </style>

        <div class="write_div">
            <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
            <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                <?php if ($write_min || $write_max) { ?>
                    <!-- 최소/최대 글자 수 사용 시 -->
                    <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 
                ?>
                <?php if ($write_min || $write_max) { ?>
                    <!-- 최소/최대 글자 수 사용 시 -->
                    <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </div>

        </div>

        <?php for ($i = 1; $is_link && $i <= G5_LINK_COUNT; $i++) { ?>
            <div class="bo_w_link write_div">
                <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크 #<?php echo $i ?></span></label>
                <input type="text" name="wr_link<?php echo $i ?>" value="<?php if ($w == "u") {
                                                                                echo $write['wr_link' . $i];
                                                                            } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
            </div>
        <?php } ?>

        <?php for ($i = 0; $is_file && $i < $file_count; $i++) { ?>
            <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                    <label for="bf_file_<?php echo $i + 1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i + 1 ?></span></label>
                    <input type="file" name="bf_file[]" id="bf_file_<?php echo $i + 1 ?>" title="파일첨부 <?php echo $i + 1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                </div>
                <?php if ($is_file_content) { ?>
                    <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                <?php } ?>

                <?php if ($w == 'u' && $file[$i]['file']) { ?>
                    <span class="file_del">
                        <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'] . '(' . $file[$i]['size'] . ')';  ?> 파일 삭제</label>
                    </span>
                <?php } ?>

            </div>
        <?php } ?>


        <?php if ($is_use_captcha) { //자동등록방지  
        ?>
            <div class="write_div">
                <?php echo $captcha_html ?>
            </div>
        <?php } ?>

        <div class="btn_confirm write_div">
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
            <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn">작성완료</button>
        </div>
    </form>

    <script>
        <?php if ($write_min || $write_max) { ?>
            // 글자수 제한
            var char_min = parseInt(<?php echo $write_min; ?>); // 최소
            var char_max = parseInt(<?php echo $write_max; ?>); // 최대
            check_byte("wr_content", "char_count");

            $(function() {
                $("#wr_content").on("keyup", function() {
                    check_byte("wr_content", "char_count");
                });
            });

        <?php } ?>

        function html_auto_br(obj) {
            if (obj.checked) {
                result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                if (result)
                    obj.value = "html2";
                else
                    obj.value = "html1";
            } else
                obj.value = "";
        }

        function fwrite_submit(f) {
            <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   
            ?>

            var subject = "";
            var content = "";
            $.ajax({
                url: g5_bbs_url + "/ajax.filter.php",
                type: "POST",
                data: {
                    "subject": f.wr_subject.value,
                    "content": f.wr_content.value
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(data, textStatus) {
                    subject = data.subject;
                    content = data.content;
                }
            });

            if (subject) {
                alert("제목에 금지단어('" + subject + "')가 포함되어있습니다");
                f.wr_subject.focus();
                return false;
            }

            if (content) {
                alert("내용에 금지단어('" + content + "')가 포함되어있습니다");
                if (typeof(ed_wr_content) != "undefined")
                    ed_wr_content.returnFalse();
                else
                    f.wr_content.focus();
                return false;
            }

            if (document.getElementById("char_count")) {
                if (char_min > 0 || char_max > 0) {
                    var cnt = parseInt(check_byte("wr_content", "char_count"));
                    if (char_min > 0 && char_min > cnt) {
                        alert("내용은 " + char_min + "글자 이상 쓰셔야 합니다.");
                        return false;
                    } else if (char_max > 0 && char_max < cnt) {
                        alert("내용은 " + char_max + "글자 이하로 쓰셔야 합니다.");
                        return false;
                    }
                }
            }

            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  
            ?>

            document.getElementById("btn_submit").disabled = "disabled";

            return true;
        }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->