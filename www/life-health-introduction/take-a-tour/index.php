<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');

if (G5_IS_MOBILE) {
    include('./mobile/index.php');
} else {
	include('./pc/index.php');
}
?>

<!-- CONTENTS -->


<!--// CONTENTS -->

<?php
include_once(G5_THEME_PATH.'/tail.php');

