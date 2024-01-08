<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>活動資訊</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SimpleBar-->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- NavBar -->
    <link rel="stylesheet" href="./Tools/NavBar_2.css">
    <!-- Css -->
    <link rel="stylesheet" href="./Tools/EventList.css">
    <!-- Color -->
    <link rel="stylesheet" href="./Tools/Color.css">
    <!-- footer -->
    <link rel="stylesheet" href="./Tools/footer.css">

</head>

<body>
    <!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	
    <div class="center">
        <div class="pageTitle">
            <h3>休閒旅遊</h3>
        </div>
        <div>
            <ul id="infoUlbar" class="nav nav-pills infoUlbar">
                <li class="ulName">
                    <a class="nav-link active" aria-current="page" href="#">休閒旅遊</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">藝文活動</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">親子</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">文創/市集</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">博物館/美術館</a>
                </li>
            </ul>
            <ul id="countyBar" class="nav nav-pills infoUlbar">
                <li class="ulName">
                    <a class="nav-link active" aria-current="page" href="#">台北市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">新北市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">桃園市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">台中市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">台南市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">高雄市</a>
                </li>
            </ul>
            <!-- <ul id="countyBar" class="nav nav-pills infoUlbar">
                <li class="ulName">
                    <a class="nav-link active" aria-current="page" href="#">旅展資訊</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">即將開始</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">進行中</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">優惠情報</a>
                </li>
                
            </ul> -->
            <div class="info">
                <ul>
                    <li class="dataList">
                        <div class="dataDay">2023-12-20</div>
                        <a href="./Event.html">
                            <div class="dataImg">
                                <img src="./image/2023聖誕節.jpg">
                            </div>
                            <div class="dataText">
                                <div class="dataCounty">
                                    台北市
                                </div>
                                <div class="dataInfo">
                                    卡司制霸全台！台中最強跨年三大亮點 High翻中央公園
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dataList">
                        <div class="dataDay">2023-12-20</div>
                        <a href="./Event.html">
                            <div class="dataImg">
                                <img src="./image/2023聖誕節.jpg">
                            </div>
                            <div class="dataText">
                                <div class="dataCounty">
                                    台北市
                                </div>
                                <div class="dataInfo">
                                    卡司制霸全台！台中最強跨年三大亮點 High翻中央公園
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dataList">
                        <div class="dataDay">2023-12-20</div>
                        <a href="./Event.html">
                            <div class="dataImg">
                                <img src="./image/2023聖誕節.jpg">
                            </div>
                            <div class="dataText">
                                <div class="dataCounty">
                                    台北市
                                </div>
                                <div class="dataInfo">
                                    卡司制霸全台！台中最強跨年三大亮點 High翻中央公園
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dataList">
                        <div class="dataDay">2023-12-20</div>
                        <a href="./Event.html">
                            <div class="dataImg">
                                <img src="./image/2023聖誕節.jpg">
                            </div>
                            <div class="dataText">
                                <div class="dataCounty">
                                    台北市
                                </div>
                                <div class="dataInfo">
                                    卡司制霸全台！台中最強跨年三大亮點 High翻中央公園
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dataList">
                        <div class="dataDay">2023-12-20</div>
                        <a href="./Event.html">
                            <div class="dataImg">
                                <img src="./image/2023聖誕節.jpg">
                            </div>
                            <div class="dataText">
                                <div class="dataCounty">
                                    台北市
                                </div>
                                <div class="dataInfo">
                                    卡司制霸全台！台中最強跨年三大亮點 High翻中央公園
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <nav aria-label="Page navigation example" style="padding: 0,auto;">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    <!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>
</body>

</html>