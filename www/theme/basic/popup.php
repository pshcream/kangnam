<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// include_once(G5_THEME_MOBILE_PATH . '/popup.php');
?>


<!-- 네이버 광고 로그분석 전환페이지 설정 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script> 
<script type="text/javascript"> 
var _nasa={};
if(window.wcs) _nasa["cnv"] = wcs.cnv("4","1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
</script> 



<h1>상담 신청 완료되었습니다</h1>
<script language="javascript">
	var wintimer;
	clearTimeout(wintimer);
	wintimer = setTimeout("closewin()", 500); //천분의 1초 단위로 초를 지정합니다..

	function closewin() {
		window.close();
	}
	window.onload = showWindow;
</script>


<script type="text/javascript">
	opener.document.location.reload();
</script>