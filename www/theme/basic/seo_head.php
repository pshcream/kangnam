<?php
// 메인페이지
if ($_SERVER['SCRIPT_NAME'] == "/index.php") {
    $meta_description = '역삼/서초/교대/강남역에서 합리적인가격/비용으로 쌍커풀/눈매교정/눈재수술/트임성형/눈밑수술/남자눈성형/중년눈성형/지방이식/이물질제거 잘하는곳';
}
// 생활건강소개
else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/hospital-introduction/index.php") {
    $meta_title = '병원소개 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역에서 합리적인가격/비용으로 쌍커풀/눈매교정/눈재수술/트임성형/눈밑수술/남자눈성형/중년눈성형/지방이식/이물질제거 잘하는곳';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/medical-staff-introduction/index.php") {
    $meta_title = '의료진소개 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 의료진을 소개합니다.';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/take-a-tour/index.php") {
    $meta_title = '둘러보기 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 공간을 소개합니다. 안전하고 쾌적한 환경으로 고객님들께 편안함과 만족함을 드리고 있습니다.';
} else if ($_SERVER['SCRIPT_NAME'] == "/life-health-introduction/way-to-come-and-treatment-hours/index.php") {
    $meta_title = '진료시간/찾아오는길 - 생활건강소개 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 찾아오는길과 진료시간을 안내해드립니다. 찾아 주시는 고객님들을 위해 빠르고 편안하게 찾아오도록 소개해드립니다.';
}
// 다이어트프로그램
else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/life-health-diet/index.php") {
    $meta_title = '생활건강다이어트 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 생활건강다이어트에 대해 안내해드립니다. 미세 구멍을 연속으로 묶은 다음에 피부조직과 근육사이의 자연유착을 유도하여 풀리지 않으면서도 본래 있었던 쌍커풀처럼 자연스러운 라인을 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/today-weight-loss-premium-oriental-medicine/index.php") {
    $meta_title = '오늘,감량프리미엄한약 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 오늘,감량프리미엄한약에 대해 안내해드립니다. 피부, 근육, 지방 결체조직을 효과적으로 제거하여 쌍커풀 풀림을 예방하고 정상조직을 최대한 보존하여 매몰법처럼 자연스럽고 선명한 라인을 완성하는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/diet-program/yesterday-maintenance-yo-yo-prevention-oriental-medicine/index.php") {
    $meta_title = '내일,유지요요방지한약 - 다이어트프로그램 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 내일,유지요요방지한약에 대해 안내해드립니다. 쌍커풀 수술  후 흉하고 항상 표시나는 쌍커풀이 만들어졌거나 기능적인 문제가 생겨 대인접촉을 피하게 되는 심한 경우까지 다양한 문제가 생길수 있고 이런 이유로 재수술을 하게 됩니다';
}
// 눈매교정
else if ($_SERVER['SCRIPT_NAME'] == "/eye-correction/non-incision-eyelid-correction/index.php") {
    $meta_title = '비절개눈매교정 - 눈매교정 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 비절개눈매교정에 대해 안내해드립니다. 검판과 눈뜨는 근육을 직접적으로 연결시켜 눈매교정을 더욱 효과적이고 부작용을 최소화하고 절개 없이 눈뜨는 힘을 강화하여 눈동자를 또렷하게 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-correction/incision-eyelid-correction/index.php") {
    $meta_title = '절개눈매교정 - 눈매교정 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 절개눈매교정에 대해 안내해드립니다. 눈을 뜨게하는 근육의 힘이 매우 약해서 눈동자의 노출이 작을때 절개를 통해 눈뜨는 근육의 장력조절과 지방, 근육등을 제거하여 눈을 또렷하게 만드는 수술입니다';
}
// 눈재수술
else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/squint-eye-correction/non-incision-drooping-eye-correction/index.php") {
    $meta_title = '비절개꺼진눈교정 - 꺼진눈교정 - 눈재수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 비절개꺼진눈교정에 대해 안내해드립니다. 검판과 눈뜨는 근육을 직접적으로 연결시켜 꺼진눈을 더욱 효과적이고 부작용을 최소화하고 절개 없이 눈뜨는 힘을 강화하여 눈동자를 또렷하게 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/squint-eye-correction/incision-drooping-eye-correction/index.php") {
    $meta_title = '절개 꺼진눈교정 - 꺼진눈교정 - 눈재수술| 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 절개 꺼진눈교정에 대해 안내해드립니다. 상안검수술과 같은 절개를 통해 눈꺼풀 깊은 층에 묶여있는 안와지방을 박리하여 부위를 슬라이딩 시켜 고정해주는 수술입니다.';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/thick-eye-correction/slit-fat-removal/index.php") {
    $meta_title = '슬릿지방제거 - 두툼한눈교정 - 눈재수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 슬릿지방제거에 대해 안내해드립니다. 과도한 눈위 안와지방에서 불필요한 지방을 제거하여 두툼한 눈꺼풀을 가볍고 선명하게 만들어주는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/thick-eye-correction/endoscopic-forehead-lifting/index.php") {
    $meta_title = '내시경이마리프팅 - 두툼한눈교정 - 눈재수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 내시경이마리프팅에 대해 안내해드립니다. 처진 눈썹을 위로 올린 후 고정하는 수술로 이마 전체를 거상시킨 후 봉합하는 방식입니다. 일반 이마 거상술에 비해 수술시간이 짧고 회복이 빠르며 리프팅효과가 오래 지속됩니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/eyelash-piercing-correction/correction-of-eyelash-puncture-on-the-upper-eyelid/index.php") {
    $meta_title = '상안검 속눈썹 찔림교정 - 속눈썹 찔림교정 - 눈재수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 상안검 속눈썹 찔림교정에 대해 안내해드립니다. 노화가 진행되면서 눈꺼풀이 쳐졌거나 속눈썹이 안구쪽으로 말리는 안검내반의 증상이 있을 경우 아래로 처진 눈꺼풀의 늘어진 피부를 당겨주어 잔주름을 없애고 시야를 넓혀 생기 있는 눈매로 개선하는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/eye-revision-surgery/eyelash-piercing-correction/correction-of-eyelash-puncture-on-the-lower-eyelid/index.php") {
    $meta_title = '하안검 속눈썹 찔림교정 - 속눈썹 찔림교정 - 눈재수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 하안검 속눈썹 찔림교정에 대해 안내해드립니다. 노화가 진행되면서 눈꺼풀이 쳐졌거나 속눈썹이 안구쪽으로 말리는 안검내반의 증상이 있을 경우 아래로 처진 눈꺼풀의 늘어진 피부를 당겨주어 잔주름을 없애고 시야를 넓혀 생기 있는 눈매로 개선하는 수술입니다';
}
// 남자눈성형
else if ($_SERVER['SCRIPT_NAME'] == "/male-eye-surgery/none-diet-program/index.php") {
    $meta_title = '무쌍수술 - 남자눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 남자 무쌍수술에 대해 안내해드립니다. 별도의 쌍커풀을 만들지 않고도 눈의 가로-세로 폭을 확대하여 시원하고 깊은 눈매로 개선하는 수술로 눈뜨는 근육을 강화시킴과 동시에 지방을 제거할 수 있는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/male-eye-surgery/inner-double eyelid-surgery/index.php") {
    $meta_title = '속쌍수술 - 남자눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 남자 속쌍수술에 대해 안내해드립니다. 남자와 여자의 쌍커풀 수술은 라인자체가 틀리기 때문에 차별화된 방법으로 진행되어야하며, 남자는 여자에 비해 피부가 두꺼워 흉터가 최대한 보이지 않게 수술해야합니다';
}
// 토탈아이리프팅
else if ($_SERVER['SCRIPT_NAME'] == "/total-eye-lifting/endoscopic-forehead-lifting/index.php") {
    $meta_title = '내시경이마리프팅 - 토탈아이리프팅 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 내시경이마리프팅 수술에 대해 안내해드립니다. 처진 눈썹을 위로 올린 후 고정하는 수술로 이마 전체를 거상시킨 후 봉합하는 방식입니다. 일반 이마 거상술에 비해 수술시간이 짧고 회복이 빠르며 리프팅효과가 오래 지속됩니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/total-eye-lifting/endoscopic-forehead-lift/index.php") {
    $meta_title = '내시경이마거상 - 토탈아이리프팅 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 내시경이마거상 수술에 대해 안내해드립니다. 두피 안쪽에 작은 절개창을 내어 위로 당겨 올려주는 수술법입니다. 상안면부의 연조직 전체를 광범위하게 리프팅해 젊어보이는 인상을 선사합니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/total-eye-lifting/forehead-reduction-surgery/index.php") {
    $meta_title = '이마축소술 - 토탈아이리프팅 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 이마축소술 수술에 대해 안내해드립니다. 이마가 너무 넓은 경우 헤어라인 부위를 미세하게 절개하여 두피를 당겨 고정함으로서 이마 길이를 줄이는 수술입니다 모발이식으로 해결되지 않는 넓은 이마에 특히 효과적입니다';
}
// 중년눈성형
else if ($_SERVER['SCRIPT_NAME'] == "/middle-aged-eye-surgery/upper-eyelid/index.php") {
    $meta_title = '상안검 - 중년눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 상안검 수술에 대해 안내해드립니다. 눈꺼풀 피부를 절제한뒤 눈을 뜨게하는 근육인 상안검거근을 팽팽하게 만들어 눈꺼풀이 처지는 현상을 해결하게 만들어주는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/middle-aged-eye-surgery/lower-eyelid/index.php") {
    $meta_title = '하안검 - 중년눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 하안검 수술에 대해 안내해드립니다. 처진 피부를 제거함과 동시에 불룩한 지방을 재배치하여 눈 밑 피부조직을 튼튼하게 교정해주는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/middle-aged-eye-surgery/eyebrow-lowering/index.php") {
    $meta_title = '눈썹하리프팅 - 중년눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 눈썹하리프팅 수술에 대해 안내해드립니다. 눈썹 근육이 탄력을 잃고 눈쪽으로 내려앉게 되면서 눈꺼풀까지 처지게되는데 이때 눈썹 윗선이나 밑선을 절개해 늘어진 피부과 근육을 당겨 올려주어 또렷한 인상을 만들어주는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/middle-aged-eye-surgery/total-eye-lifting/index.php") {
    $meta_title = '토탈아이리프팅 - 중년눈성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 토탈아이리프팅 수술에 대해 안내해드립니다. 상안검+하안검+이마리프팅의 효과를 볼수 있는 수술로 눈가처짐정도, 노화상태, 눈모양, 탄력등을 파악후 개개인에 맞는 수술방법으로 자연스럽고, 탄력있는 눈매를 완성할 수 있습니다';
}
// 눈밑수술
else if ($_SERVER['SCRIPT_NAME'] == "/under-eye-surgery/redistribution-of-fat-under-the-eyes/index.php") {
    $meta_title = '눈밑지방재배치 - 눈밑수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 눈밑지방재배치 수술에 대해 안내해드립니다. 돌출된 지방을 함몰된 부위에 재배치하고 늘어진 안와격막을 고정하여 어둡고 피곤해 보이는 눈매를 밝은 눈매로 만들어주는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/under-eye-surgery/lower-eyelid-reposition/index.php") {
    $meta_title = '하안검재배치 - 눈밑수술 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 하안검재배치 수술에 대해 안내해드립니다. 처진 피부를 제거함과 동시에 불룩한 지방을 재배치하여 눈 밑 피부조직을 튼튼하게 교정해주는 수술입니다';
}
// 트임성형
else if ($_SERVER['SCRIPT_NAME'] == "/slit-molding/anterior-slit-surgery/index.php") {
    $meta_title = '앞트임수술 - 트임성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 앞트임수술에 대해 안내해드립니다 몽고주름에 가려진 부분을 제거하여 답답해 보이는 눈 앞머리를 시원하게 터주고 눈의 가로길이를 늘려주어 시원하고 부드러운 눈매를 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/slit-molding/back-slit-surgery/index.php") {
    $meta_title = '뒷트임수술 - 트임성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 뒷트임수술에 대해 안내해드립니다. 눈의 가로 길이가 짧아 눈매가 답답한 경우 눈꼬리쪽을 절개한 후 바깥쪽으로 연장하여 길고 시원한 눈매로 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/slit-molding/undercut-surgery/index.php") {
    $meta_title = '밑트임수술 - 트임성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 밑트임수술에 대해 안내해드립니다. 눈뒤쪽 삼각부의 가려져 있던 눈동자를 노출하여 강하고 사나워 보이는 눈꼬리를 아래로 내림으로서 부드러운 눈매를 만드는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/slit-molding/restoration-of-anterior-slit/index.php") {
    $meta_title = '앞트임복원 - 트임성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 앞트임복원 수술에 대해 안내해드립니다. 앞트임 부작용으로 생긴 흉터와 과도하게 노출되는 누호로 인해 기능적 또는 심미적 불편함을 겪을 경우, 열려있는 누호를 닫아주고 흉터를 개선하여 균형잡힌 눈매로 복원하는 수술입니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/slit-molding/restoration-of-back-slit/index.php") {
    $meta_title = '풀안면거상 - 트임성형 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 풀안면거상 수술에 대해 안내해드립니다. 소실된 인매를 비롯한 해부학적 구조의 연결과 피부및 점막을 재배치하여 잘못된 뒷트임 수술오 인해 비정상적인 외안각을 기능적, 미용적으로 정상적인 눈으로 만들어주는 수술입니다';
}
// 지방이식/이물질제거
else if ($_SERVER['SCRIPT_NAME'] == "/fat-grafting-and-removal-of-foreign-substances/eye-fat-grafting/index.php") {
    $meta_title = '눈 지방이식 - 지방이식/이물질제거 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 눈 지방이식에 대해 안내해드립니다. 나이가 들면서 눈꺼풀 부분이 꺼져들어가고 주름도 생기게 됩니다. 노화로 인해 눈꺼풀의 지방이 부족해지면서 생기는 현상인데 이러한 현상은 실제보다 나이가 들어보이게하고 피곤한 인상을 줍니다 이럴경우, 꺼진 부분에 지방이식을 통해 생기있는 동안형 눈으로 교정할 수 있습니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/fat-grafting-and-removal-of-foreign-substances/fat-grafting-by-region/index.php") {
    $meta_title = '부위별 지방이식 - 지방이식/이물질제거 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 부위별 지방이식에 대해 안내해드립니다. 올리팅만의 기술과 노하우로 개개인의 상태를 파악하여 전체적으로 균형잡힌 아름다운 볼륨과 피부탄력을 완성시켜드립니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/fat-grafting-and-removal-of-foreign-substances/removal-of-debris-from-the-eyelids/index.php") {
    $meta_title = '눈두덩이 이물질 제거 - 지방이식/이물질제거 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 눈두덩이 이물질 제거에 대해 안내해드립니다. 눈두덩이에 주입된 불필요한 이물질을 제거하여 본래의 피부로 복원하는 시술로 초음파로 이물질의 위치를 정확하게 확인하여 말끔하게 안전하게 제거가 가능합니다';
} else if ($_SERVER['SCRIPT_NAME'] == "/fat-grafting-and-removal-of-foreign-substances/removal-of-foreign-substances-under-the-eyes/index.php") {
    $meta_title = '눈밑 이물질 제거 - 지방이식/이물질제거 | 생활건강한의원 한방다이어트병원';
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 눈밑 이물질 제거에 대해 안내해드립니다. 잘못된 수술방법과 보형물 선택으로 망가진 눈밑 라인을 되살리며, 흉터를 최소화하여 편평하고 자연스러운 눈밑라인을 되찾아드립니다';
}
// 커뮤니티
else if ($bo_table == "event" && !$wr_id) {
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원에서 새롭고 다양한 이벤트를 진행합니다';
} else if ($bo_table == "column" && !$wr_id) {
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 원장님이 직접 작성하는 칼럼으로 깊이있는 눈성형/재수술 정보를 얻으실 수 있습니다';
} else if ($bo_table == "before_and_after" && !$wr_id) {
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원의 수술 전후사진을 공개합니다. 자신있는 모습으로 다시 만난 고객님들의 꾸밈없는 수술 전후 사진입니다.';
}
// 상담예약
else if ($bo_table == "consult" && !$wr_id) {
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 온라인상담게시판입니다. 1:1 문의를 올려주시면, 최대한 빠르고 정확하게 고객님께 답변드리도록 최선을 다하겠습니다';
} else if ($bo_table == "jisikin" && !$wr_id) {
    $meta_description = '역삼/서초/교대/강남역 눈성형/재수술전문 생활건강한의원 생활건강지식인 페이지입니다. 맞춤으로 궁금증을 해결하실 수 있습니다';
}
