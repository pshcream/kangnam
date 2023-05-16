<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
  $g5['title'] = $config['cf_title'];
  $g5_head_title = $g5['title'];
} else {
  // 상태바에 표시될 제목
  $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

// $g5['title'] = strip_tags($g5['title']);
// $g5_head_title = strip_tags($g5_head_title);
$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);
$g5_board_description = strip_tags($g5['board_description']);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
  $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/' . G5_ADMIN_DIR . '/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <?php
  if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">' . PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">' . PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">' . PHP_EOL;
  } else {
    echo '<meta http-equiv="imagetoolbar" content="no">' . PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL;
  }

  if ($config['cf_add_meta'])
    echo $config['cf_add_meta'] . PHP_EOL;
  ?>
  <!--
<title>< ?php echo $g5_head_title; ?></title>-->

  <link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL . '/' . (G5_IS_MOBILE ? 'mobile' : 'default') . '.css?ver=' . G5_CSS_VER, G5_THEME_URL); ?>">
  <!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
  <script>
    // 자바스크립트에서 사용하는 전역변수 선언
    var g5_url = "<?php echo G5_URL ?>";
    var g5_bbs_url = "<?php echo G5_BBS_URL ?>";
    var g5_is_member = "<?php echo isset($is_member) ? $is_member : ''; ?>";
    var g5_is_admin = "<?php echo isset($is_admin) ? $is_admin : ''; ?>";
    var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
    var g5_bo_table = "<?php echo isset($bo_table) ? $bo_table : ''; ?>";
    var g5_sca = "<?php echo isset($sca) ? $sca : ''; ?>";
    var g5_editor = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor']) ? $config['cf_editor'] : ''; ?>";
    var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
  </script>
  <?php
  add_javascript('<script src="' . G5_JS_URL . '/jquery-1.12.4.min.js"></script>', 0);
  add_javascript('<script type="text/javascript" src="' . G5_JS_URL . '/jquery.bxslider.js"></script>', 0);
  add_javascript('<script src="' . G5_JS_URL . '/jquery-migrate-1.4.1.min.js"></script>', 0);
  add_javascript('<script src="' . G5_JS_URL . '/jquery.menu.js?ver=' . G5_JS_VER . '"></script>', 0);
  add_javascript('<script src="' . G5_JS_URL . '/common.js?ver=' . G5_JS_VER . '"></script>', 0);
  add_javascript('<script src="' . G5_JS_URL . '/wrest.js?ver=' . G5_JS_VER . '"></script>', 0);
  add_javascript('<script src="' . G5_JS_URL . '/placeholders.min.js"></script>', 0);
  add_stylesheet('<link rel="stylesheet" href="' . G5_JS_URL . '/font-awesome/css/font-awesome.min.css">', 0);

  if (G5_IS_MOBILE) {
    add_javascript('<script src="' . G5_JS_URL . '/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
  }
  if (!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
  ?>

  <!--공통-->
  <!-- 1. https로 강제 접속-->
  <?php
//   if ($_SERVER['HTTPS'] != "on") {
//     $ssl_port = "";  //  443 포트를 사용하지 않는경우에 이용할 포트번호 입력
//     if ($ssl_port == "") {
//       $redirect_URL = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     } else {
//       $redirect_URL = "https://" . $_SERVER['HTTP_HOST'] . ":" . $ssl_port . $_SERVER['REQUEST_URI'];
//     }
//     header("Location: " . $redirect_URL);
//   }
  ?>
  <!-- 2. 메타태그 robots -->
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <!-- 3. 메타태그 cash-control -->
  <meta http-equiv="Cash-Control" content="max-age=0, s-maxage=86400">
  <!-- 4. 메타태그 classification -->
  <meta name="classification" content="생활건강소개,다이어트프로그램,다이어트부스터,장비소개,1대1다이어트,커뮤니티,상담예약">
  <!-- 5. 관련채널 마크업 -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "name": "생활건강한의원 한방다이어트병원",
      "url": "https://lifehealth.co.kr/",
      "sameAs": ["https://hgkmc1.modoo.at/", "https://pf.kakao.com/_Jxfdcb", "https://www.instagram.com/jiseung.korean.medical.clinic/"]
    }
  </script>
  <!-- 6. 파비콘 -->
  <link rel="shortcut icon" href="/theme/hospital/img/favicon_144.png" type="image/x-icon" />
  <link rel="icon" href="/theme/hospital/img/favicon_144.png" />
  <!-- For iPhone -->
  <link rel="apple-touch-icon" href="/theme/hospital/img/favicon_57.png">
  <!-- For iPad -->
  <link rel="apple-touch-icon" sizes="72x72" href="/theme/hospital/img/favicon_72.png">
  <!-- For iPhone Retina display -->
  <link rel="apple-touch-icon" sizes="114x114" href="/theme/hospital/img/favicon_114.png">
  <!-- For iPad Retina display -->
  <link rel="apple-touch-icon" sizes="144x144" href="/theme/hospital/img/favicon_144.png">
  <!-- 7. 메타태그 og -->
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ko_KR" />
  <meta property="og:image" content="/theme/hospital/img/og_image.png" />
  <!-- 8. css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link rel="stylesheet" href="/theme/hospital/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/theme/hospital/css/font.css">
  <!-- 9. javascript -->
  <script type="text/javascript" src="/theme/hospital/js/main_swiper.js"></script>
  <!-- 10. 메타태그 네이버/구글 -->
  <meta name="google-site-verification" content="-SSTomVKgQjUoUgiufD5DUhFzIhEdUUnqDrZStrms-I" />
  <meta name="naver-site-verification" content="c44fb8af6a6365015fd0b9a5e58c0d366e77ab42" />

  <!-- 11. 메타태그 twitter -->
  <meta name="twitter:image" content="/theme/hospital/img/og_image.png">
  <meta name="twitter:domain" content="https://lifehealth.co.kr">
  <!-- 12. 스마트폰상단바색상 -->
  <!-- Chrome, Firefox, Opera -->
  <meta content='#e5004f' name='theme-color' />
  <!-- Windows Phone -->
  <meta content='#e5004f' name='msapplication-navbutton-color' />
  <!-- iOS Safari -->
  <meta content='#e5004f' name='apple-mobile-web-app-status-bar-style' />
  <meta content='yes' name='apple-mobile-web-app-capable' />
  <!-- 13. 메타태그 keywords -->
  <meta name="keyword" content="">


  <!-- 페이지별 -->
  <?php
  include_once(G5_THEME_PATH . "/seo_head.php");
  ?>
  <!-- 1. 페이지 제목 - title / og:site_name / og:title / twitter:title / itemprop="name" -->
  <?php
  if ($meta_title) {
    echo '<title>' . $meta_title . '</title>' . PHP_EOL;
    echo '<meta property="og:site_name" content="' . $meta_title . '">' . PHP_EOL;
    echo '<meta property="og:title" content="' . $meta_title . '">' . PHP_EOL;
    echo '<meta name="twitter:title" content="' . $meta_title . '">' . PHP_EOL;
    echo '<meta itemprop="name" content="' . $meta_title . '">' . PHP_EOL;
  } else if (!$meta_title) {
    echo '<title>' . $g5_head_title . '</title>' . PHP_EOL;
    echo '<meta property="og:site_name" content="' . $g5_head_title . '">' . PHP_EOL;
    echo '<meta property="og:title" content="' . $g5_head_title . '">' . PHP_EOL;
    echo '<meta name="twitter:title" content="' . $g5_head_title . '">' . PHP_EOL;
    echo '<meta itemprop="name" content="' . $g5_head_title . '">' . PHP_EOL;
  }
  ?>
  <!-- <title><?php echo $g5_head_title; ?></title>
  <meta property="og:site_name" content="<?php echo $g5_head_title; ?>" />
  <meta property="og:title" content="<?php echo $g5_head_title; ?>" />
  <meta name="twitter:title" content="<?php echo $g5_head_title; ?>">
  <meta itemprop="name" content="<?php echo $g5_head_title; ?>"> -->
  <!-- 2. 페이지 설명 - description / og:description / twitter:description / itemprop="description" -->
  <?php
  if ($meta_description) {
    echo '<meta name="description" content="' . $meta_description . '">' . PHP_EOL;
    echo '<meta property="og:description" content="' . $meta_description . '">' . PHP_EOL;
    echo '<meta name="twitter:description" content="' . $meta_description . '">' . PHP_EOL;
    echo '<meta itemprop="description" content="' . $meta_description . '">' . PHP_EOL;
  } else if (!$meta_description) {
    echo '<meta name="description" content="' . $g5_board_description . '">' . PHP_EOL;
    echo '<meta property="og:description" content="' . $g5_board_description . '">' . PHP_EOL;
    echo '<meta name="twitter:description" content="' . $g5_board_description . '">' . PHP_EOL;
    echo '<meta itemprop="description" content="' . $g5_board_description . '">' . PHP_EOL;
  }
  ?>
  <!-- 3. 페이지 주소 - canonical / og:url / twitter:domain / twitter:url / itemprop="url" -->
  <?php
  // $canonical = '';
  // if ($sca && $wr_id) $canonical = '/bbs/board.php?bo_table=' . $bo_table . '&wr_id=' . $wr_id . '&sca=' . $sca;
  // else if ($sca) $canonical = '/bbs/board.php?bo_table=' . $bo_table . '&sca=' . $sca;
  // else if ($wr_id) $canonical = '/bbs/board.php?bo_table=' . $bo_table . '&wr_id=' . $wr_id;
  // else if ($bo_table) $canonical = '/bbs/board.php?bo_table=' . $bo_table;
  // else 
  $canonical = $_SERVER['REQUEST_URI'];
  echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . $canonical . '">' . PHP_EOL;
  echo '<meta property="og:url" content="' . 'https://' . $_SERVER['HTTP_HOST'] . $canonical . '">' . PHP_EOL;
  echo '<meta name="twitter:url" content="' . 'https://' . $_SERVER['HTTP_HOST'] . $canonical . '">' . PHP_EOL;
  echo '<meta itemprop="url" content="' . 'https://' . $_SERVER['HTTP_HOST'] . $canonical . '">' . PHP_EOL;
  ?>


</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
  <?php
  if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">' . $sr_admin_msg . get_text($member['mb_nick']) . '님 로그인 중 ';
    echo '<a href="' . G5_BBS_URL . '/logout.php">로그아웃</a></div>';
  }
