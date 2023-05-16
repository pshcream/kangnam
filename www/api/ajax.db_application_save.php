<?php
header('Access-Control-Allow-Origin: *');
include_once('./_common.php');
@include_once("../plugin/sms5/JSON.php");

if (!function_exists('json_encode')) {
    function json_encode($data)
    {
        $json = new Services_JSON();
        return ($json->encode($data));
    }
}

if (!isset($_REQUEST['u_name']) || !trim($_REQUEST['u_name'])) {
    die(0);
}

if (!isset($_REQUEST['u_cell']) || !trim($_REQUEST['u_cell'])) {
    die(0);
}


$u_name = addslashes(clean_xss_tags(trim($_REQUEST['u_name'])));
$u_cell = addslashes(clean_xss_tags(trim($_REQUEST['u_cell'])));
$fixedPrivacy = addslashes(clean_xss_tags(trim($_REQUEST['fixedPrivacy'])));
$call_type = addslashes(clean_xss_tags(trim($_REQUEST['call_type'])));
$u_type = addslashes(clean_xss_tags(trim($_REQUEST['u_type'])));
$location = addslashes(clean_xss_tags(trim($_REQUEST['location'])));

//게시판 기본값
$bo_table = "application";
$mb_id = "admin";
$wr_name = $u_name;
$wr_password = get_encrypt_string("dkfckek1234!@#$");
$wr_email = "";
$wr_homepage = "";

$wr_num = get_next_num($g5['dbadmin_application_table']);
$wr_reply = '';

$wr_content = $u_cell;
$wr_subject = $call_type;
$wr_link1 = "";
$wr_link2 = "";

$ca_name = $u_type;
$wr_1 = $location;
$wr_10 = $fixedPrivacy;

$sql = "insert into {$g5['dbadmin_application_table']}
set wr_num = '$wr_num',
    wr_reply = '$wr_reply',
    wr_is_comment = 0,
    wr_comment = 0,
    ca_name = '$ca_name',
    wr_option = '',
    wr_subject = '$wr_subject',
    wr_content = '$wr_content',
    wr_seo_title = '$wr_seo_title',
    wr_link1 = '$wr_link1',
    wr_link2 = '$wr_link2',
    wr_link1_hit = 0,
    wr_link2_hit = 0,
    wr_hit = 0,
    wr_good = 0,
    wr_nogood = 0,
    mb_id = '$mb_id',
    wr_password = '$wr_password',
    wr_name = '$wr_name',
    wr_email = '$wr_email',
    wr_homepage = '$wr_homepage',
    wr_datetime = '" . G5_TIME_YMDHIS . "',
    wr_last = '" . G5_TIME_YMDHIS . "',
    wr_ip = '{$_SERVER['REMOTE_ADDR']}',
    wr_1 = '$wr_1',
    wr_2 = '$wr_2',
    wr_3 = '$wr_3',
    wr_4 = '$wr_4',
    wr_5 = '$wr_5',
    wr_6 = '$wr_6',
    wr_7 = '$wr_7',
    wr_8 = '$wr_8',
    wr_9 = '',
    wr_10 = '$wr_10' ";
sql_query($sql);

$wr_id = sql_insert_id();

// 부모 아이디에 UPDATE
sql_query("update {$g5['dbadmin_application_table']} set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

// 새글 INSERT
sql_query("insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '" . G5_TIME_YMDHIS . "', '{$mb_id}' ) ");

// 게시글 1 증가
sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$bo_table}'");

echo $wr_id;

// //관리자 알림톡 메세지 발송
// $alimtalkMSG = "[알차다]

// ▷채널 : 알차다랜딩

// ".$u_name."님의 상담신청 문의가 접수되었습니다.

// ".G5_TIME_YMDHIS;

// $alimtalkBTN = array();
// $alimtalkBTN['type'] = "WL";
// $alimtalkBTN['name'] = "관리자페이지";
// $alimtalkBTN['linkMobile'] = "https://www.rchada.com/rchada_adm/";
// $alimtalkBTN['linkPc'] = "https://www.rchada.com/rchada_adm/";
// if(substr_count($_SERVER['SERVER_NAME'],"newwww")<1){
// 	//실서버 알림톡 발송
// 	rchadaTalk('rchadaReg00', '010-2703-2588', $alimtalkMSG, 'application', $wr_id, $alimtalkBTN);
// }
?>