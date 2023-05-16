<?php
// 메인페이지
if ($_SERVER['SCRIPT_NAME'] == "/index.php") {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역에서 합리적인가격/비용으로 한방다이어트프로그램/다이어트한약/다이어트부스터 잘하는곳';
}
// 생활건강소개
else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/hospital-introduction/index.php") {
    $meta_title = '병원소개 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역에서 합리적인가격/비용으로 한방다이어트프로그램/다이어트한약/다이어트부스터 잘하는곳';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/medical-staff-introduction/index.php") {
    $meta_title = '의료진소개 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 의료진을 소개합니다.';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/take-a-tour/index.php") {
    $meta_title = '둘러보기 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 공간을 소개합니다. 안전하고 쾌적한 환경으로 고객님들께 편안함과 만족함을 드리고 있습니다.';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/way-to-come-and-treatment-hours/index.php") {
    $meta_title = '진료시간/찾아오는길 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 찾아오는길과 진료시간을 안내해드립니다. 찾아 주시는 고객님들을 위해 빠르고 편안하게 찾아오도록 소개해드립니다.';
}
// 다이어트프로그램
else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/life-health-diet/index.php") {
    $meta_title = '생활건강다이어트 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 생활건강다이어트에 대해 안내해드립니다. 적게 먹거나 굶고 운동을 많이하는 다이어트는 틀렸습니다 살빠지는 원리, 살찌는 원리를 정확히 알아야 효과적인 다이어트를 할 수 있습니다 그 원리를 생활건강에서 만나보세요';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/today-weight-loss-premium-oriental-medicine/index.php") {
    $meta_title = '오늘,감량프리미엄한약 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 오늘,감량프리미엄한약에 대해 안내해드립니다. 성별,세대별,개인별로 위장관 운동성과 호르몬 상태등의 차이가 있는 신체를 정밀하게 검사,진찰하여 개인에 맞는 처방과 시술법을 추천하여 건강은 더욱 좋게 하면서 체중은 잘 빠지는 체질로 변하도록 합니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/yesterday-maintenance-yo-yo-prevention-oriental-medicine/index.php") {
    $meta_title = '내일,유지요요방지한약 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 내일,유지요요방지한약에 대해 안내해드립니다. 다이어트 성공후에 요요가 오지 않도록 내일,유지로 대사활성화, 노폐물 제거를 통해 다이어트 유지를 도와줍니다';
}
// 다이어트부스터
else if ($_SERVER['SCRIPT_NAME'] == "/diet-booster/fat-cut-injection/index.php") {
    $meta_title = '팻컷주사 - 다이어트부스터 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 팻컷주사에 대해 안내해드립니다. 피하지방은 직접적으로 분해하고 내장지방은 위장관 기능향상과 호르몬 분비기전으로 분해합니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-booster/lifting-tying/index.php") {
    $meta_title = '리프팅매선 - 다이어트부스터 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 리프팅매선에 대해 안내해드립니다. 늘어진 피부에 강력하게 스며들고 절개없이 확실하게 당겨 더 강력한 리프팅 솔루션입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-booster/medical-machine-management/REC-triple-plus/index.php") {
    $meta_title = 'REC트리플플러스 - 메디컬기계관리 - 다이어트부스터 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 REC트리플플러스에 대해 안내해드립니다. 다이어트 시술에 필수적인 고주파, 초음파, 엔더몰로지를 하나로 결합하여 지방감소, 셀룰라이트제거, 리프팅을 동시에 하는 기술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-booster/medical-machine-management/3E-shaperr/index.php") {
    $meta_title = '3E쉐이퍼 - 메디컬기계관리 - 다이어트부스터 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 3E쉐이퍼에 대해 안내해드립니다. 광에너지, 중저주파, 고주파 3가지 에너지를 동시에 출력하여 지방세포를 없애고, 근육탄력과 피부탄력을 동시에 높이는 획기적인 시술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-booster/medical-machine-management/medical-thermal-management/index.php") {
    $meta_title = '메디컬온열관리 - 메디컬기계관리 - 다이어트부스터 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 메디컬온열관리에 대해 안내해드립니다. 인체 전신에 깊숙하게 열에너지를 전달하여 기초대사량을 높여서 살이 잘 빠지는 몸으로 변화시켜줍니다.';
}
// 장비소개
else if ($_SERVER['SCRIPT_NAME'] == "/device-introduction/main/index.php") {
    $meta_title = '장비소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 보유한 장비에 대해 안내해드립니다. 생활건강한의원은 만족스러운 시술을 끌어내기 위해 장비에 아낌없는 투자를 하고 있습니다';
}
// 1대1다이어트
else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/childhood-and-adolescent-obesity/index.php") {
    $meta_title = '소아청소년비만 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 소아청소년비만에 대해 안내해드립니다. 아이의 연령, 키, 체중, 체성분, 혈액검사, 뇌파검사등 다이어트에 필요한 모든 요소들을 종합검사, 분석하여 효율적이고 적절한 치료프로그램을 제시해드립니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/wedding-diet/index.php") {
    $meta_title = '웨딩다이어트 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 웨딩다이어트에 대해 안내해드립니다. 결혼식은 디데이가 정해져있어 잘못된방법으로 다이어트를 할경우 오히려 건강하지 않은 모습으로 결혼식장에 들어설 수도 있습니다. 건강과 아름다음을 함께 살리는것이 생활건강이 추구하는 다이어트입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/postpartum-diet/index.php") {
    $meta_title = '산후다이어트 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 산후다이어트에 대해 안내해드립니다. 10개월간 엄마의 몸으로 살아온 당신이 다시 여자의 몸으로 돌아가야합니다. 단순히 다이어트만 생각해선 안되고 건강한 나의몸을 되찾도록 도와드리겠습니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/high-obesity-diet/index.php") {
    $meta_title = '고도비만다이어트 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 고도비만다이어트에 대해 안내해드립니다. 고도비만은 개인의 노력과 의지의 문제가 아니라 식욕을 억제하는 랩틴 호르몬의 분비장애가 가장 큰 원인으로 의학적 도움이 필요합니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/menopause-diet/index.php") {
    $meta_title = '갱년기다이어트 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 갱년기다이어트에 대해 안내해드립니다. 대체로 45~55세에 해당하여 내분비기능의 변화와 함께 체중이 증가합니다 내장지방을 감소시키고 혈관 노폐물을 감소시켜 뱃살을 없애는것이 우선입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/one-on-one-diet/mens-diet/index.php") {
    $meta_title = '남성다이어트 - 1대1다이어트 | 생활건강한의원 한방다이어트병원';
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 남성다이어트에 대해 안내해드립니다. 남성은 여성과 신체조건 외형 호르몬 분비등에서 많은 차이가 있습니다 같은 방법으로 접근이 아닌 남성에게 맞춰진 남성을 위한 솔루션이 필요합니다';
}
// 커뮤니티
else if ($bo_table == "event" && !$wr_id) {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원에서 새롭고 다양한 이벤트를 진행합니다';
} else if ($bo_table == "column" && !$wr_id) {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 원장님이 직접 작성하는 칼럼으로 깊이있는 한방다이어트 정보를 얻으실 수 있습니다';
} else if ($bo_table == "before_and_after" && !$wr_id) {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원의 치료 전후사진을 공개합니다. 자신있는 모습으로 다시 만난 고객님들의 꾸밈없는 치료 전후 사진입니다.';
}
// 상담예약
else if ($bo_table == "consult" && !$wr_id) {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 온라인상담게시판입니다. 1:1 문의를 올려주시면, 최대한 빠르고 정확하게 고객님께 답변드리도록 최선을 다하겠습니다';
} else if ($bo_table == "jisikin" && !$wr_id) {
    $meta_description = '강남/서초/반포/교대/고속버스터미널역 한방다이어트전문 생활건강한의원 생활건강지식인 페이지입니다. 맞춤으로 궁금증을 해결하실 수 있습니다';
}
