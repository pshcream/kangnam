<div class="page">
    <div class="sub_banner">
        <img src="../hospital-introduction/pc/img/banner.jpg" alt="진료시간/찾아오는길">
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
            <li>
                <a href="/life-health-introduction/take-a-tour/#start">둘러보기</a>
            </li>
            <li class="on">
                <a href="/life-health-introduction/way-to-come-and-treatment-hours/#start">진료시간/찾아오는길</a>
            </li>

        </ul>
    </div>

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=871d5776e2b45cf547a0021c81f852f4"></script>

    <div class="con">
        <div class="map_info">
            <div class="mi">
                <div id="di_map">
                </div>
                <div class="map_box">
                    <div class="nm"><b>생활건강한의원</b></div>
                    <div class="ad">부산 부산진구 중앙대로691번길 5 <br> 천우빌딩 4층  </div>
                    <div class="pn"><b>051-802-3313</b></div>
                    <div class="tm">
                        <table>
                            <tr>
                                <td>월~금</td>
                                <td>10:00~20:00</td>
                            </tr>
                            <!-- <tr>
                                <td>화/수/목</td>
                                <td>10:00~19:00</td>
                            </tr> -->
                            <tr>
                                <td>토</td>
                                <td>10:00~14:00</td>
                            </tr>
                            <tr>
                                <td>일/공휴일</td>
                                <td>휴진</td>
                            </tr>
                        </table>
                    </div>
                    <a class="fr" href="https://map.naver.com/v5/search/%EA%B9%80%EC%A7%80%EC%8A%B9%ED%95%9C%EC%9D%98%EC%9B%90/place/35075169?c=14138740.2669530,4509383.7864638,19,0,0,0,dh&isCorrectAnswer=true" target="_blank">빠른길 찾기</a>
                </div>

                <script>
                    var mapContainer = document.getElementById('di_map'), // 지도를 표시할 div 
                        mapOption = {
                            center: new kakao.maps.LatLng(35.15446644330695, 129.05874371323668), // 지도의 중심좌표
                            level: 3 // 지도의 확대 레벨
                        };

                    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

                    // 마커가 표시될 위치입니다 
                    var markerPosition = new kakao.maps.LatLng(35.15446644330695, 129.05874371323668);

                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({
                        position: markerPosition
                    });

                    // 마커가 지도 위에 표시되도록 설정합니다
                    marker.setMap(map);
                </script>




            </div>




            <!---da시작---->

            <div class="mi">
                <img style="margin-top:50px;" src="./pc/img/content.jpg" alt="진료시간/찾아오는길">
            </div>

            <!---da끝---->



        </div>
    </div>

</div>