<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
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
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
        }
        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
            }
        }
        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }
        if ($is_mail) {
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
        }
    }
    echo $option_hidden;
    ?>

    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div">
        <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">분류를 선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>
 <!---타이틀시작--->
        <div class="page">
    <div class="sub">
    
    <div class="sub_title">
      <div class="name"><span>ONLINE CONSULT</span> <b>온라인상담</b></div>
      <div class="exp">상담내용 남겨주시면 자세한 답변을 빠르게 안내해 드리겠습니다</div>
    </div>    
        
        
    
    </div>
        </div>
        
        <!---타이틀끝--->
        
        
          
          <!--개인정보동의시작--->  
        <div>
            
           
            
          
            <div class="priv_info">
               
                
                
                
                
                <div id="ctt">
                <div id="ctt_con">
        <p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">올리팅눈재수술전문병원은 귀하의 개인정보보호를 매우 중요시하며, 개인정보보호방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.<br></p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보 수집에 대한 동의</b><br>올리팅눈재수술전문병원은 귀하께 회원가입시 개인정보보호방침 또는 이용약관의 내용을 공지하며 회원가입버튼을 클릭하면 개인정보 수집에 대해 동의하신 것으로 봅니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보의 수집목적 및 이용목적</b><br>올리팅눈재수술전문병원은 다음과 같은 목적을 위하여 개인정보를 수집하고 있습니다 .</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">– 올리팅눈재수술전문병원 및 제휴사이트 서비스를 위한 회원 가입 및 이용아이디 발급<br>– 서비스의 이행(경품 등 우편물 배송 및 예약에 관한 사항)<br>– 장애처리 및 개별 회원에 대한 개인 맞춤서비스<br>– 서비스 이용에 대한 통계수집<br>– 기타, 새로운 서비스 및 정보 안내<br>단, 이용자의 기본적 인권침해의 우려가 있는 민감한 개인정보는 수집하지 않습니다.<br>올리팅눈재수술전문병원은 상기 범위 내에서 보다 풍부한 서비스를 제공하기 위해 이용자의 자의에 의한 추가정보를 수집합니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>수집하는 개인정보 항목</b><br>올리팅눈재수술전문병원은 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">-수집항목: 이름, 생년월일, 성별, 로그인 ID, 비밀번호, 자택 전화번호, 자택 주소, 휴대전화번호, 이메일, 서비스이용기록, 접속로그, 쿠키, 접속 IP 정보 , 결제기록<br>-개인정보 수집방법: 홈페이지(회원가입, 게시판, 온라인상담, 온라인예약 등)<br>쿠키에 의한 개인정보 수집<br>올리팅눈재수술전문병원은 귀하에 대한 정보를 저장하고 수시로 찾아내는 ‘쿠키 (cookie)’ 를 사용합니다. 쿠키는 웹사이트가 귀하의 컴퓨터 브라우저(넷스케이프, 인터넷 익스플로러 등)로 전송하는 소량의 정보입니다. 귀하가 웹사이트에 접속을 하면 올리팅눈재수술전문병원 웹서버는 귀하의 브라우저에 있는 쿠키의 내용을 읽고, 귀하의 추가정보를 귀하의 컴퓨터에서 찾아 접속에 따른 아이디 등의 추가 입력없이 서비스를 제공할 수 있습니다. 쿠키는 귀하의 컴퓨터는 식별하지만 귀하를 개인적으로 식별하지는 않습니다.<br>또한 귀하는 쿠키에 대한 선택권이 있습니다. 웹브라우저의 옵션을 조정함으로써 모든 쿠키를 다 받아들이거나, 쿠키가 설치될 때 통지를 보내도록 하거나 아니면 모든 쿠키를 거부할 수 있는 선택권을 가질 수 있습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보의 제3자에 대한 제공</b><br>올리팅눈재수술전문병원은 귀하의 개인정보를 &lt;개인정보의 수집목적 및 이용목적&gt;에서 고지한 범위 내에서 사용하며, 동 범위를 초과하여 이용하거나 타인 또는 타기업/기관에 제공하지 않습니다. 그러나 보다 나은 서비스 제공을 위하여 귀하의 개인정보를 제휴사에게 제공하거나 또는 제휴사와 공유할 수 있습니다. 단, 개인정보를 제공하거나 공유할 경우에는 사전에 귀하께 고지하여 드립니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보의 열람/정정</b><br>귀하는 언제든지 등록되어 있는 귀하의 개인정보를 열람하거나 정정하실 수 있습니다. 개인정보 열람 및 정정을 하고자 할 경우에는 &lt;회원정보수정&gt;을 클릭하여 직접 열람 또는 정정하거나 개인정보관리책임자에게 E-mail로 연락하시면 조치하여 드립니다.<br>귀하가 개인정보의 오류에 대한 정정을 요청한 경우, 정정을 완료하기 전까지 당해 개인정보를 이용하지 않습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보 수집, 이용, 제공에 대한 동의철회</b><br>회원가입 등을 통해 개인정보의 수집, 이용, 제공에 대해 귀하께서 동의하신 내용을 귀하는 언제든지 철회할 수 있습니다. 동의철회는 웹사이트 및 개인정보관리책임자에게 E-mail 등으로 연락하시면 즉시 개인정보의 삭제 등 필요한 조치를 하겠습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">개인정보의 보유기간 및 이용기간귀하의 개인정보는 다음과 같이 개인정보의 수집목적 또는 제공받은 목적이 달성되면 파기됩니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">-회원 가입정보의 경우, 회원 가입을 탈퇴하거나 회원에서 제명된 때<br>-예약의 경우, 예약에 따른 처리 및 진료가 완료된 때<br>위 보유기간에도 불구하고 계속 보유하여야 할 필요가 있을 경우에는 귀하의 동의를 받습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보보호를 위한 기술적 대책</b><br>올리팅눈재수술전문병원은 귀하의 개인정보를 취급함에 있어 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적 대책을 강구하고 있습니다.<br>귀하의 개인정보는 비밀번호에 의해 보호되며, 파일 및 전송 데이터를 암호화하거나 파일 잠금기능(Lock)을 사용하여 중요한 데이터는 별도의 보안기능을 통해 보호되고 있습니다.<br>올리팅눈재수술전문병원은 회원인증과 관련 암호알고리즘을 이용하여 네트워크 상의 개인정보를 안전하게 전송할 수 있는 인증 및 보안장치를 채택하고 있으며, 시스템상 사정에 의해 미시행시 도우미에 의한 의사 확인을 시행하고 있습니다.<br>해킹 등에 의해 귀하의 개인정보가 유출되는 것을 방지하기 위해 외부로부터의 침입을 차단하는 장치를 이용하고 있으며, 각 서버마다 침입탐지시스템을 설치하여 24시간 침입을 감시하고 있습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>의견수렴 및 불만처리</b><br>올리팅눈재수술전문병원은 개인정보보호와 관련하여 귀하가 의견과 불만을 제기할 수 있는 창구를 개설하고 있습니다. 개인정보와 관련한 불만이 있으신 분은 올리팅눈재수술전문병원의 개인정보 관리책임자에게 의견을 주시면 접수 즉시 조치하여 처리결과를 통보해 드립니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>14세 미만 어린이들에 대한 보호정책</b><br>올리팅눈재수술전문병원은 14세 미만 어린이들에 대한 회원 미가입 정책과 함께 개인정보를 부모의 동의 없이 제3자와 공유하지 않으며 사용자에 관한 정보를 매매하거나 대여하지 않습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>개인정보 관리책임자</b><br>올리팅눈재수술전문병원은 개인정보에 대한 의견수렴 및 불만처리의 정책을 담당하는 개인정보정책 담당 관리책임자를 지정하고 있습니다. 본 정책에 대한 불만사항이 있으시다면 아래 연락처로 문의 하시면 친절히 처리하여 드리겠습니다.</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);">개인정보정책 책임자<br>성명 : 윤영석<br>소속 : 올리팅눈재수술전문병원 <br>연락처 : 010-9220-1537</p><p style="font-family:NanumSquare, Montserrat, 'Nanum Gothic';margin-bottom:20px;font-size:17px;background-color:rgb(255,255,255);"><b>시행일 : 개인정보보호정책은 2021년 11월 09일부터 시행합니다.&#8203;</b></p>    </div>
                    </div>
                
                
                
                
 
            
            </div>
            <div class="priv_agree">
            <lable><input type="checkbox" name="consult_Privacy" id="consult_privacy" required>개인정보처리방침 동의</lable>
            </div>
        </div>
        
          
          <!--개인정보동의끝--->  
        
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
        
        <?php if ($is_homepage) { ?>
	        <label for="wr_homepage" class="sound_only">휴대폰번호</label>
	        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input required" size="50" placeholder="휴대폰번호" required>
	    <?php } ?>
        
	    
	    <!--
	    <?php if ($is_homepage) { ?>
	        <label for="wr_homepage" class="sound_only">홈페이지</label>
	        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지">
	    <?php } ?>
        -->
        
	</div>
	
    <?php if ($option) { ?>
    <div class="write_div">
        <span class="sound_only">옵션</span>
        <ul class="bo_v_option">
        <?php echo $option ?>
        </ul>
    </div>
    <?php } ?>

    <div class="bo_w_tit write_div">
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        
        <div id="autosave_wrapper" class="write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
            <?php if ($is_member) { // 임시 저장된 글 기능 ?>
            <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
            <?php if($editor_content_js) echo $editor_content_js; ?>
            <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
            <div id="autosave_pop">
                <strong>임시 저장된 글 목록</strong>
                <ul></ul>
                <div><button type="button" class="autosave_close">닫기</button></div>
            </div>
            <?php } ?>
        </div>
        
    </div>

    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>

    <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?php } ?>

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
        
    </div>
    <?php } ?>


    <?php if ($is_use_captcha) { //자동등록방지  ?>
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
    <?php if($write_min || $write_max) { ?>
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
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
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
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
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
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->