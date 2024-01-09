<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%-- <%@ taglib uri="http://xmlns.jcp.org/jsp/jstl/core" prefix="c"%> --%>
<%-- <%@ taglib uri="http://jakarta.apache.org/jsp/jstl/core" prefix="c" %> --%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>周末跟我趣</title>

    <!-- <link rel="stylesheet" href="Tools/info.css"> -->
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
    <!-- 背景影片css -->
    <link rel="stylesheet" href="/static/Tools/Bg_YTiframe.css">
    <!-- 背景影片js -->
    <script src="https://www.youtube.com/iframe_api" defer></script>
    <script src="/static/Tools/Bg_YTiframe.js" defer></script>
    <!-- Gruop_City.css -->
    <link rel="stylesheet" href="/static/Tools/Gruop_City.css">
    <!-- Group_News.css -->
    <link rel="stylesheet" href="/static/Tools/Group_News.css">
    <!-- NavBar.js -->
    <script src="/static/Tools/NavBar.js" defer></script>
    <!-- NavBar.css -->
    <link rel="stylesheet" href="/static/Tools/NavBar.css">
    <!-- SimpleBar -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- Color -->
    <link rel="stylesheet" href="/static/Tools/Color.css">
    <!-- Footer.css -->
    <link rel="stylesheet" href="/static/Tools/footer.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/static/Tools/index.css">

    <style>

    </style>
</head>
<div id="iframeContainer">
    <iframe id="youtubeIframe"
        src="https://www.youtube.com/embed/wIf-HN15URA?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=1&mute=1&loop=1&disablekb=1&enablejsapi=1"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

<body>

    <div id="overlayDiv">
        <!-- navBar -->
        <nav id="myNavbar" class="navbar bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;">
            <div class="container-fluid m-0 p-0 h-100">
                <div class="row m-0 p-0 h-100">
                    <div id="mynavbarCon" class="col-12 d-flex justify-content-between align-items-center">
                        <a href="<c:url value='/' />" class="navbar-brand" style="font-size:x-large;">
                            <img src="<c:url value='/static/image/logo1228.png' />" alt="logo" width="65" height="50">
                        </a>
                        <div class="memberConMd d-flex">
                            <div class="nameCon">
                                <a href="<c:url value='/Member' />">
                                    <img class="rounded-circle img-fluid" src="<c:url value='/static/image/IMG_0987.JPG' />" alt="">
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="collapseCon">
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="<c:url value='/EventList' />">活動資訊</a>
                                </li>
                                <li class="nav-item">
                                    <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="<c:url value='/Trafficimfor' />">交通情報</a>
                                </li>
                                <li class="nav-item">
                                    <a id="forum" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="<c:url value='/' />">旅遊論壇</a>
                                </li>
                                <li class="nav-item">
                                    <a id="aboutus" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="<c:url value='' />">關於我們</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input id="search_input" class="form-control me-2" type="search" placeholder="搜尋"
                                    aria-label="Search">
                                <button id="search_btn" class="btn btn-outline-success" type="submit">
                                    <span class="material-icons" style="vertical-align: middle;">
                                        search
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- ========== -->
    <div id="newBG" class="row justify-content-center">

        <!-- -----offcanvas----- -->
        <div id="myOffcanvas" class="fixedDiv">
            <a class="btn btn-primary OffcanBtn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <img src="<c:url value='/static/image/OffcanvasIcon.png"' /> class="img-fluid">
            </a>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="weatherDivOff">
                    <div class="row p-0 m-0">
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">台中市</div>
                        </div>
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">24C</div>
                        </div>
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">
                                降雨機率：20%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="couponGroup" data-simplebar>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                </div>
            </div>
        </div>
        <!-- -----pageInfo----- -->
        <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
            <div class="row m-0 p-0 w-100">
                <div class="col m-0 p-0">
                    <a href="<c:url value='/EventList' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/static/image/a011.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/EventList' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/static/image/a012.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/EventList' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/static/image/a013.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/EventList' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/static/image/a014.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/Ian/index' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/static/image/a015.png' />">
                        </div>
                    </a>
                </div>
            </div>
            <!-- ---------- -->
            <div id="groupNews" class="">
                <div class="groupTitle">
                    <h3>最新消息</h3>
                </div>
                <a href="<c:url value='/Event' />" class="newsA">
                    <div id="news1" class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="<c:url value='/static/image/2023聖誕節.jpg' />" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<c:url value='/Event' />" class="newsA">
                    <div id="news2" class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="<c:url value='/static/image/2023聖誕節.jpg' />" alt="">
                        </div>
                    </div>
                </a>

            </div>
            <!-- ---------- -->
            <div id="groupCity" class="">
                <div class="groupTitle">
                    <h3>縣市踩點</h3>
                </div>
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-12 col-lg-8 m-0 p-0">
                        <div class="row justify-content-center m-0 p-0">

                            <div class="cityCol col-6">
                                <a href="<c:url value='/EventList' />" class="newsA">
                                    <div class="cityDiv card">
                                        <img class="cityImg rounded card-img-top" src="<c:url value='/static/image/台北市.png' />">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">台北市</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="cityCol col-6">
                                <a href="<c:url value='/EventList' />" class="newsA">
                                    <div class="cityDiv card">
                                        <img class="cityImg rounded card-img-top" src="<c:url value='/static/image/新北市.png' />">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">新北市</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cityCol col-0 col-lg-4">
                        <a href="<c:url value='/EventList' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImgV2 rounded card-img-top" src="<c:url value='/static/image/桃園市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">桃園市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="row justify-content-center m-0 p-0">
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/EventList' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/static/image/台中市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">台中市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/EventList' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/static/image/台南市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">台南市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/EventList' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/static/image/高雄市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">高雄市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <!-- ---------- -->

        <div class="homeRight col-0 col-md-3 order-1 order-md-2">
            <div class="weatherDiv">
                <div class="row p-0 m-0">
                    <div class="weatherColTop col-6 col-xxl-4">
                        <div class="weatherBlock">台中市</div>
                    </div>
                    <div class="weatherColTop col-6 col-xxl-4">
                        <div class="weatherBlock">24C</div>
                    </div>
                    <div class="weatherColSm col-12">
                        <div class="weatherBlock">台中市：24C</div>
                    </div>
                    <div class="weatherCol col col-xxl-4">
                        <div class="weatherBlock">
                            降雨機率：20%
                        </div>
                    </div>
                </div>
            </div>
            <div class="couponGroup" data-simplebar>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
	<%@ include file="Shared/Footer.jsp" %>
    <!--footer end-->


    <script>
        $(document).ready(function () {
            $('#myOffcanvas').on('click', function () {
                if (!$('#offcanvasExample').hasClass('show')) {
                    $('.fixedDiv').animate({ right: '350px' }, 300);
                    $('.fixedDiv').animate({ right: '0' }, 100);
                }
            });
        });


    </script>
</body>

</html>