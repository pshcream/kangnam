<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가;
include_once(G5_PLUGIN_PATH . "/sms5/JSON.php");

//------------------------------------------------------------------------------
// 차딜 상수 모음 시작
//------------------------------------------------------------------------------
define('G5_DBADMIN_DIR',        'DBADMIN');
define('G5_DBADMIN_PATH',       G5_PATH . '/' . G5_DBADMIN_DIR);
define('G5_DBADMIN_URL',        G5_URL . '/' . G5_DBADMIN_DIR);

define('G5_DBADMIN_ADMIN_DIR',        'manager');
define('G5_DBADMIN_ADMIN_PATH',       G5_PATH . '/' . G5_DBADMIN_ADMIN_DIR);
define('G5_DBADMIN_ADMIN_URL',        G5_URL . '/' . G5_DBADMIN_ADMIN_DIR);

define('G5_DBADMIN_ADMIN_BOARD_DIR',        'board');
define('G5_DBADMIN_ADMIN_BOARD_PATH',       G5_DBADMIN_ADMIN_PATH.'/'.G5_DBADMIN_ADMIN_BOARD_DIR);
define('G5_DBADMIN_ADMIN_BOARD_URL',        G5_DBADMIN_ADMIN_URL.'/'.G5_DBADMIN_ADMIN_BOARD_DIR);

define('G5_DBADMIN_ADMIN_AUTH_DIR',        'auth');
define('G5_DBADMIN_ADMIN_AUTH_PATH',       G5_DBADMIN_ADMIN_PATH.'/'.G5_DBADMIN_ADMIN_AUTH_DIR);
define('G5_DBADMIN_ADMIN_AUTH_URL',        G5_DBADMIN_ADMIN_URL.'/'.G5_DBADMIN_ADMIN_AUTH_DIR);

// 테이블명
$g5['dbadmin_prefix']                = 'dbadmin_';

// 게시판 테이블명
$g5['dbadmin_application_table']                            = $g5['write_prefix'] . 'application'; //상담신청 저장


// 
function my_json_encode($arr)
{
    array_walk_recursive($arr, function (&$item, $key) {
        if (is_string($item)) $item = mb_encode_numericentity($item, array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
    });
    return mb_decode_numericentity(json_encode($arr), array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
}

?>