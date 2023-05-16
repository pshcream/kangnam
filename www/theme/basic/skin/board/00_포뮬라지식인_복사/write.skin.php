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
                <option value="">고민부위(필수)</option>
                <option value="주름" <? if ($write[wr_1] == '주름') echo " selected "; ?>>주름</option>
                <option value="탄력" <? if ($write[wr_1] == '탄력') echo " selected "; ?>>탄력</option>
                <option value="미백" <? if ($write[wr_1] == '미백') echo " selected "; ?>>미백</option>
                <option value="흉터/모공" <? if ($write[wr_1] == '흉터/모공') echo " selected "; ?>>흉터/모공</option>
                <option value="여드름" <? if ($write[wr_1] == '여드름') echo " selected "; ?>>여드름</option>
                <option value="기미" <? if ($write[wr_1] == '기미') echo " selected "; ?>>기미</option>
                <option value="점/잡티" <? if ($write[wr_1] == '점/잡티') echo " selected "; ?>>점/잡티</option>
                <option value="홍조" <? if ($write[wr_1] == '홍조') echo " selected "; ?>>홍조</option>
                <option value="문신제거" <? if ($write[wr_1] == '문신제거') echo " selected "; ?>>문신제거</option>
                <option value="브이라인" <? if ($write[wr_1] == '브이라인') echo " selected "; ?>>브이라인</option>
                <option value="수염/체모" <? if ($write[wr_1] == '수염/체모') echo " selected "; ?>>수염/체모</option>
                <option value="피부결/유수분" <? if ($write[wr_1] == '피부결/유수분') echo " selected "; ?>>피부결/유수분</option>
                <option value="무좀" <? if ($write[wr_1] == '무좀') echo " selected "; ?>>무좀</option>
            </select>
            <select name='wr_2' value='<?= $write[`wr_2`] ?>' required class="doctalk_select" id="treatment" onchange="showType();">
                <option value="">관심시술(필수)</option>
                <option value="생활건강다이어트" <? if ($write[wr_2] == '생활건강다이어트') echo " selected "; ?>>생활건강다이어트</option>
                <option value="오늘,감량프리미엄한약" <? if ($write[wr_2] == '오늘,감량프리미엄한약') echo " selected "; ?>>오늘,감량프리미엄한약</option>
                <option value="상안검" <? if ($write[wr_2] == '상안검') echo " selected "; ?>>상안검</option>
                <option value="토탈아이리프팅" <? if ($write[wr_2] == '토탈아이리프팅') echo " selected "; ?>>토탈아이리프팅</option>
                <option value="눈밑수술" <? if ($write[wr_2] == '눈밑수술') echo " selected "; ?>>눈밑수술</option>
                <option value="색소레이저" <? if ($write[wr_2] == '색소레이저') echo " selected "; ?>>색소레이저</option>
                <option value="하안검" <? if ($write[wr_2] == '하안검') echo " selected "; ?>>하안검</option>
                <option value="주사시술" <? if ($write[wr_2] == '주사시술') echo " selected "; ?>>주사시술</option>
                <option value="레이저시술" <? if ($write[wr_2] == '레이저시술') echo " selected "; ?>>레이저시술</option>
                <option value="상안검" <? if ($write[wr_2] == '상안검') echo " selected "; ?>>상안검</option>
                <option value="여드름관리" <? if ($write[wr_2] == '여드름관리') echo " selected "; ?>>여드름관리</option>
                <option value="바디리프팅" <? if ($write[wr_2] == '바디리프팅') echo " selected "; ?>>바디리프팅</option>
                <option value="스킨케어" <? if ($write[wr_2] == '스킨케어') echo " selected "; ?>>스킨케어</option>
            </select>
            <select name='wr_3' value='<?= $write[`wr_3`] ?>' class="doctalk_select" id="treatment_type">
                <option value="">시술종류(선택)</option>
            </select>
        </div>

        <script>
            function showType() {
                if ($("#treatment")[0].value == "생활건강다이어트") {
                    var treatType1 = '';
                    treatType1 += `<option value="">시술종류(선택)</option>
                    <option value="인모드" <? if ($write[wr_3] == '인모드') echo " selected "; ?>>인모드</option>
        <option value="슈링크" <? if ($write[wr_3] == '슈링크') echo " selected "; ?>> 슈링크</option>
        <option value="더블로" <? if ($write[wr_3] == '더블로') echo " selected "; ?>> 더블로</option>
        <option value="물방울LDM" <? if ($write[wr_3] == '물방울LDM') echo " selected "; ?>> 물방울LDM</option>
        <option value="써마지" <? if ($write[wr_3] == '써마지') echo " selected "; ?>> 써마지</option>
        <option value="내시경이마리프팅" <? if ($write[wr_3] == '내시경이마리프팅') echo " selected "; ?>> 내시경이마리프팅</option>`;
                    $("#treatment_type").html(treatType1);
                }
                // 
                else if ($("#treatment")[0].value == "상안검") {
                    var treatType2 = '';
                    treatType2 += `<option value="">시술종류(선택)</option>
                    <option value="이마" <? if ($write[wr_3] == '이마') echo " selected "; ?>>이마</option>
        <option value="미간/눈가" <? if ($write[wr_3] == '미간/눈가') echo " selected "; ?>> 미간/눈가</option>
        <option value="콧등/콧볼" <? if ($write[wr_3] == '콧등/콧볼') echo " selected "; ?>> 콧등/콧볼</option>
        <option value="광대" <? if ($write[wr_3] == '광대') echo " selected "; ?>> 광대</option>
        <option value="입꼬리" <? if ($write[wr_3] == '입꼬리') echo " selected "; ?>> 입꼬리</option>
        <option value="입술" <? if ($write[wr_3] == '입술') echo " selected "; ?>> 입술</option>
        <option value="침샘" <? if ($write[wr_3] == '침샘') echo " selected "; ?>> 침샘</option>
        <option value="사각턱" <? if ($write[wr_3] == '사각턱') echo " selected "; ?>> 사각턱</option>
        <option value="자갈턱" <? if ($write[wr_3] == '자갈턱') echo " selected "; ?>> 자갈턱</option>
        <option value="브이라인" <? if ($write[wr_3] == '브이라인') echo " selected "; ?>> 브이라인</option>
        <option value="승모근" <? if ($write[wr_3] == '승모근') echo " selected "; ?>> 승모근</option>
        <option value="종아리" <? if ($write[wr_3] == '종아리') echo " selected "; ?>> 종아리</option>`;
                    $("#treatment_type").html(treatType2);
                }
                // 
                else if ($("#treatment")[0].value == "토탈아이리프팅") {
                    var treatType3 = '';
                    treatType3 += `<option value="">시술종류(선택)</option>
                    <option value="볼" <? if ($write[wr_3] == '볼') echo " selected "; ?>>볼</option>
        <option value="팔자주름" <? if ($write[wr_3] == '팔자주름') echo " selected "; ?>> 팔자주름</option>
        <option value="턱" <? if ($write[wr_3] == '턱') echo " selected "; ?>> 턱</option>
        <option value="코" <? if ($write[wr_3] == '코') echo " selected "; ?>> 코</option>
        <option value="이마" <? if ($write[wr_3] == '이마') echo " selected "; ?>> 이마</option>
        <option value="입술" <? if ($write[wr_3] == '입술') echo " selected "; ?>> 입술</option>`;
                    $("#treatment_type").html(treatType3);
                }
                // 
                else if ($("#treatment")[0].value == "상안검") {
                    var treatType4 = '';
                    treatType4 += `<option value="">시술종류(선택)</option>
                    <option value="얼굴전체" <? if ($write[wr_3] == '얼굴전체') echo " selected "; ?>>얼굴전체</option>   
        <option value="헤어라인" <? if ($write[wr_3] == '헤어라인') echo " selected "; ?>> 헤어라인</option>                 
        <option value="이마" <? if ($write[wr_3] == '이마') echo " selected "; ?>> 이마</option>
        <option value="미간" <? if ($write[wr_3] == '미간') echo " selected "; ?>> 미간</option>
        <option value="볼" <? if ($write[wr_3] == '볼') echo " selected "; ?>> 볼</option>
        <option value="콧수염" <? if ($write[wr_3] == '콧수염') echo " selected "; ?>> 콧수염</option>
        <option value="턱수염" <? if ($write[wr_3] == '턱수염') echo " selected "; ?>> 턱수염</option>
        <option value="인중" <? if ($write[wr_3] == '인중') echo " selected "; ?>> 인중</option>
        <option value="턱" <? if ($write[wr_3] == '턱') echo " selected "; ?>> 턱</option>
        <option value="목" <? if ($write[wr_3] == '목') echo " selected "; ?>> 목</option>
        <option value="바디" <? if ($write[wr_3] == '바디') echo " selected "; ?>> 바디</option>
        <option value="겨드랑이" <? if ($write[wr_3] == '겨드랑이') echo " selected "; ?>> 겨드랑이</option>
        <option value="팔" <? if ($write[wr_3] == '팔') echo " selected "; ?>> 팔</option>
        <option value="손발" <? if ($write[wr_3] == '손발') echo " selected "; ?>> 손발</option>
        <option value="허벅지" <? if ($write[wr_3] == '허벅지') echo " selected "; ?>> 허벅지</option>
        <option value="종아리" <? if ($write[wr_3] == '종아리') echo " selected "; ?>> 종아리</option>`;
                    $("#treatment_type").html(treatType4);
                }
                // 
                else if ($("#treatment")[0].value == "눈밑수술") {
                    var treatType5 = '';
                    treatType5 += `<option value="">시술종류(선택)</option>
                    <option value="리쥬란" <? if ($write[wr_3] == '리쥬란') echo " selected "; ?>>리쥬란</option>
        <option value="샤넬주사" <? if ($write[wr_3] == '샤넬주사') echo " selected "; ?>> 샤넬주사</option>
        <option value="눈밑지방재배치" <? if ($write[wr_3] == '눈밑지방재배치') echo " selected "; ?>> 눈밑지방재배치</option>`;
                    $("#treatment_type").html(treatType5);
                }
                // 
                else if ($("#treatment")[0].value == "색소레이저") {
                    var treatType6 = '';
                    treatType6 += `<option value="">시술종류(선택)</option>
                    <option value="피코토닝" <? if ($write[wr_3] == '피코토닝') echo " selected "; ?>>피코토닝</option>
        <option value="피코프락셀" <? if ($write[wr_3] == '피코프락셀') echo " selected "; ?>> 피코프락셀</option>
        <option value="제네시스" <? if ($write[wr_3] == '제네시스') echo " selected "; ?>> 제네시스</option>
        <option value="V레이저" <? if ($write[wr_3] == 'V레이저') echo " selected "; ?>> V레이저</option>
        <option value="클리어토닝" <? if ($write[wr_3] == '클리어토닝') echo " selected "; ?>> 클리어토닝</option>`;
                    $("#treatment_type").html(treatType6);
                }
                // 
                else if ($("#treatment")[0].value == "주사시술") {
                    var treatType7 = '';
                    treatType7 += `<option value="">시술종류(선택)</option>
                    <option value="백옥주사" <? if ($write[wr_3] == '백옥주사') echo " selected "; ?>>백옥주사</option>
        <option value="신데렐라주사" <? if ($write[wr_3] == '신데렐라주사') echo " selected "; ?>> 신데렐라주사</option>
        <option value="마늘주사" <? if ($write[wr_3] == '마늘주사') echo " selected "; ?>> 마늘주사</option>
        <option value="비타민주사" <? if ($write[wr_3] == '비타민주사') echo " selected "; ?>> 비타민주사</option>`;
                    $("#treatment_type").html(treatType7);
                }
                // 
                else if ($("#treatment")[0].value == "여드름관리") {
                    var treatType8 = '';
                    treatType8 += `<option value="">시술종류(선택)</option>
                    <option value="압출" <? if ($write[wr_3] == '압출') echo " selected "; ?>>압출</option>
        <option value="염증주사" <? if ($write[wr_3] == '염증주사') echo " selected "; ?>> 염증주사</option>`;
                    $("#treatment_type").html(treatType8);
                }
                // 
                else if ($("#treatment")[0].value == "바디리프팅") {
                    var treatType9 = '';
                    treatType9 += `<option value="">시술종류(선택)</option>
                    <option value="팔뚝" <? if ($write[wr_3] == '팔뚝') echo " selected "; ?>>팔뚝</option>
        <option value="복부" <? if ($write[wr_3] == '복부') echo " selected "; ?>> 복부</option>
        <option value="옆구리" <? if ($write[wr_3] == '옆구리') echo " selected "; ?>> 옆구리</option>
        <option value="허벅지" <? if ($write[wr_3] == '허벅지') echo " selected "; ?>> 허벅지</option>`;
                    $("#treatment_type").html(treatType9);
                } else {
                    var treatType10 = '';
                    treatType10 += ` <option value="">시술종류(선택)</option>`;
                    $("#treatment_type").html(treatType10);
                }
            };
        </script>


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
                <option value="남성" <? if ($write[wr_7] == '남성') echo " selected "; ?>>남성</option>
                <option value="여성" <? if ($write[wr_7] == '여성') echo " selected "; ?>>여성</option>
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