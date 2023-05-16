<div class="page">
    <div class="sub_banner">
        <img src="../hospital-introduction/pc/img/banner.jpg" alt="둘러보기">
    </div>

    <div id="start"></div>


    <div class="sub">
        <div class="sub_title">
            <div class="name"><span>ABOUT LIFE HEALTH</span> <b>생활건강소개</b></div>
            <div class="exp">생활건강만의 다이어트로 당신의 삶의 질을 높여보세요</div>
        </div>
        <ul class="sub_tab four">
            <li>
                <a href="/life-health-introduction/hospital-introduction/#start">병원소개</a>
            </li>
            <li>
                <a href="/life-health-introduction/medical-staff-introduction/#start">의료진소개</a>
            </li>
            <li class="on">
                <a href="/life-health-introduction/take-a-tour/#start">둘러보기</a>
            </li>
            <li>
                <a href="/life-health-introduction/way-to-come-and-treatment-hours/#start">진료시간/찾아오는길</a>
            </li>
        </ul>
    </div>
    <div class="con">
        <div class="int_info">
            <div class="ii">
                <div class="ii_left">
                    <div class="ii_pick on" onclick="openMap(event, 'ii_01')">
                        <div><b>안내데스크</b></div>
                    </div>
                    <div class="ii_pick" onclick="openMap(event, 'ii_02')">
                        <div><b>대기실</b></div>
                    </div>
                    <div class="ii_pick" onclick="openMap(event, 'ii_03')">
                        <div><b>상담실</b></div>
                    </div>
                    <div class="ii_pick" onclick="openMap(event, 'ii_04')">
                        <div><b>치료실</b></div>
                    </div>
                    <div class="ii_pick" onclick="openMap(event, 'ii_05')">
                        <div><b>치료실2</b></div>
                    </div>
                    <div class="ii_pick" onclick="openMap(event, 'ii_06')">
                        <div><b>치료실3</b></div>
                    </div>
                </div>
                <div class="ii_right">
                    <div class="ii_view on" id="ii_01">
                        <img src="./pc/img/tour01.jpeg" alt="안내데스크 - 병원 진료 시간 동안 직원이 상주하며, 층별 이동 안내를 도와드리고 있습니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>안내데스크</b></div>
                            <div class="ii_ment">병원 진료 시간 동안 직원이 상주하며,<br>층별 이동 안내를 도와드리고 있습니다.</div>
                        </div>
                    </div>
                    <div class="ii_view" id="ii_02">
                        <img src="./pc/img/tour01.jpeg" alt="대기실 - 생활건강한의원를 방문해주시는 고객님을 처음 만나는 공간입니다. 고객님의 편의를 위해 편의시설 및 대기공간을 마련하였습니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>대기실</b></div>
                            <div class="ii_ment">생활건강한의원를 방문해주시는 고객님을 처음 만나는 공간입니다.<br>고객님의 편의를 위해 편의시설 및 대기공간을 마련하였습니다.</div>
                        </div>
                    </div>
                    <div class="ii_view" id="ii_03">
                        <img src="./pc/img/tour03.jpeg" alt="상담실 - 전담 의료인과의 1:1 상담을 통해 고객을 위한 최선의 방안을 찾고 진정으로 원하는 아름다움을 제공합니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>상담실</b></div>
                            <div class="ii_ment">전담 의료인과의 1:1 상담을 통해<br>고객을 위한 최선의 방안을 찾고 진정으로 원하는 아름다움을 제공합니다.</div>
                        </div>
                    </div>
                    <div class="ii_view" id="ii_04">
                        <img src="./pc/img/tour04.jpeg" alt="치료실 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>치료실</b></div>
                            <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                        </div>
                    </div>
                    <div class="ii_view" id="ii_05">
                        <img src="./pc/img/tour05.jpeg" alt="치료실2 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>치료실2</b></div>
                            <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                        </div>
                    </div>
                    <div class="ii_view" id="ii_06">
                        <img src="./pc/img/tour06.jpeg" alt="치료실3 - 위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.">
                        <div class="ii_exp">
                            <div class="ii_nm"><b>치료실3</b></div>
                            <div class="ii_ment">위생적이고 쾌적한 환경에서 수술 후 치료 및 경과를 확인하는 공간입니다.</div>
                        </div>
                    </div>
                </div>

                <script>
                    function openMap(evt, mapName) {
                        // Declare all variables
                        var i, ii_view, ii_pick;

                        // Get all elements with class="tabcontent" and hide them
                        ii_view = document.getElementsByClassName("ii_view");
                        for (i = 0; i < ii_view.length; i++) {
                            ii_view[i].style.display = "none";
                        }

                        // Get all elements with class="tablinks" and remove the class "active"
                        ii_pick = document.getElementsByClassName("ii_pick");
                        for (i = 0; i < ii_pick.length; i++) {
                            ii_pick[i].className = ii_pick[i].className.replace(" on", "");
                        }

                        // Show the current tab, and add an "active" class to the button that opened the tab
                        document.getElementById(mapName).style.display = "inline-block";
                        evt.currentTarget.className += " on";
                    }
                </script>

            </div>
        </div>
    </div>
</div>